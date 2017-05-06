<?php
/**
 * @package     Sven.Bluege
 * @subpackage  com_eventgallery
 *
 * @copyright   Copyright (C) 2005 - 2013 Sven Bluege All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;


//the name of the class must be the name of your component + InstallerScript
//for example: com_contentInstallerScript for com_content.
class com_eventgalleryInstallerScript
{

	protected $initialDbVersion = null;

    private $eventgalleryCliScripts = array(
        'eventgallery-sync.php',
        'eventgallery-s3-thumbnails.php'
    );

    /*
    * $parent is the class calling this method.
    * $type is the type of change (install, update or discover_install, not uninstall).
    * preflight runs before anything else and while the extracted files are in the uploaded temp folder.
    * If preflight returns false, Joomla will abort the update and undo everything already done.
    */
    function preflight( /** @noinspection PhpUnusedParameterInspection */$type, $parent ) {


        $dbVersion = $this->getDatabaseVersion();
        if ($dbVersion!= null && version_compare($dbVersion, '3.6.4_2017-02-13', 'gt')) {
            $msg = "Downgrades are not supported. Please install the same or a newer version. Current version: " . $dbVersion . ". I tried to install version 3.6.4_2017-02-13";
            throw new Exception($msg, 100);
        }
        
        $this->initialDbVersion = $dbVersion;


        $folders = array(  
            JPATH_ROOT . '/administrator/components/com_eventgallery/controllers',
            JPATH_ROOT . '/administrator/components/com_eventgallery/media',
            JPATH_ROOT . '/administrator/components/com_eventgallery/models',
            JPATH_ROOT . '/administrator/components/com_eventgallery/views',
            //JPATH_ROOT . '/administrator/components/com_eventgallery/sql',
            JPATH_ROOT . '/components/com_eventgallery/controllers',
            JPATH_ROOT . '/components/com_eventgallery/helpers',
            JPATH_ROOT . '/components/com_eventgallery/language',
            JPATH_ROOT . '/components/com_eventgallery/library',
            JPATH_ROOT . '/components/com_eventgallery/media',
            JPATH_ROOT . '/components/com_eventgallery/models',
            JPATH_ROOT . '/components/com_eventgallery/tests',
            JPATH_ROOT . '/components/com_eventgallery/views',
            JPATH_ROOT . '/components/com_eventgallery/vendor',
            JPATH_ROOT . '/cache/com_eventgallery_flickr',
            JPATH_ROOT . '/cache/com_eventgallery_picasa',
            JPATH_ROOT . '/cache/com_eventgallery_template_compile'
        );

        $files = array(
            JPATH_ROOT . '/language/en-GB/en-GB.com_eventgallery.ini',
            JPATH_ROOT . '/language/de-DE/de-DE.com_eventgallery.ini',
            JPATH_ROOT . '/administrator/language/en-GB/en-GB.com_eventgallery.ini',
            JPATH_ROOT . '/administrator/language/en-GB/en-GB.com_eventgallery.sys.ini'
        );

        foreach($folders as $folder) {
            if (JFolder::exists($folder)) {
                JFolder::delete($folder);
            }
        }

        foreach($files as $file) {
            if (JFolder::exists($file)) {
                JFolder::delete($file);
            }
        }

        $this->_copyCliFiles($parent);
    }   

    /**
     * Copies the CLI scripts into Joomla!'s cli directory
     *
     * @param JInstaller $parent
     */
    private function _copyCliFiles($parent)
    {
        $src = $parent->getParent()->getPath('source');

        if(empty($this->eventgalleryCliScripts)) {
            return;
        }

        foreach($this->eventgalleryCliScripts as $script) {
            if(JFile::exists(JPATH_ROOT.'/cli/'.$script)) {
                JFile::delete(JPATH_ROOT.'/cli/'.$script);
            }
            if(JFile::exists($src.'/cli/'.$script)) {
                JFile::move($src.'/cli/'.$script, JPATH_ROOT.'/cli/'.$script);
            }
        }
    }


    function uninstall( /** @noinspection PhpUnusedParameterInspection */$parent ) {
        // remove CLI
		foreach($this->eventgalleryCliScripts as $script) {
            if(JFile::exists(JPATH_ROOT.'/cli/'.$script)) {
                JFile::delete(JPATH_ROOT.'/cli/'.$script);
            }
        }
	}
    
    function postflight( /** @noinspection PhpUnusedParameterInspection */$type, $parent )
    {

        $db = JFactory::getDbo();

        $plugins = Array(
                Array('system', 'picasaupdater'),
                Array('installer', 'eventgallery')
        );


        foreach($plugins as $pluginData) {
            
            // Let's get the information of the update plugin
            $query = $db->getQuery(true)
                ->select('*')
                ->from($db->qn('#__extensions'))
                ->where($db->qn('folder').' = '.$db->quote($pluginData[0]))
                ->where($db->qn('element').' = '.$db->quote($pluginData[1]))
                ->where($db->qn('type').' = '.$db->quote('plugin'));               
            $db->setQuery($query);
            $plugin = $db->loadObject();
            
            // If it's missing or enabledthere's nothing else to do
            if (!is_object($plugin) || $plugin->enabled)
            {
                continue;
            }


            // Otherwise, try to enable it
            $pluginObject = (object)array(
                'extension_id'  => $plugin->extension_id,
                'enabled'       => 1
            );

            try
            {
                $db->updateObject('#__extensions', $pluginObject, 'extension_id');
            }
            catch (Exception $e)
            {
            }
        }
		
        $this->migrateTags();
        $this->createDefaultCategory();
    }

    private function getDatabaseVersion() {
        // Get the extension ID
        $db = JFactory::getDbo();

        $query = $db->getQuery(true);
        $query->select('extension_id')
            ->from('#__extensions')
            ->where($db->qn('element').' = '.$db->q('com_eventgallery'));
        $db->setQuery($query);
        $eid = $db->loadResult();

        if ($eid != null) {
            // Get the schema version
            $query = $db->getQuery(true);
            $query->select('version_id')
                ->from('#__schemas')
                ->where('extension_id = ' . $db->quote($eid));
            $db->setQuery($query);
            $version = $db->loadResult();

            return $version;
        }

        return null;
    }

    /**
     * Migrate folder tag to Joomla! tags if we're in a version below Event Gallery 3.5.0
     */
    private function migrateTags() {
        $dbVersion = $this->initialDbVersion;
        echo "<h1>" . $dbVersion . "</h1>";
        
        if ($dbVersion == null || version_compare($dbVersion, '3.5.0_2015-05-06', 'lt') == false) {
            return;
        }
        JLoader::registerPrefix('Eventgallery', JPATH_ADMINISTRATOR . '/components/com_eventgallery');
        JLoader::registerPrefix('Eventgallery', JPATH_SITE . '/components/com_eventgallery');
        JTable::addIncludePath(JPATH_ADMINISTRATOR . '/components/com_eventgallery/tables');
        include_once(JPATH_ADMINISTRATOR.'/components/com_eventgallery/controllers/migration.php');
        $controller = new EventgalleryControllerMigration();
        $controller->migrateTags(false);
    }

    /**
     * create the default category
     */
    private function createDefaultCategory()
    {
        // Initialize a new category
        /** @type  JTableCategory $category */
        $category = JTable::getInstance('Category');

        // Check if the Uncategorised category exists before adding it
        if (!$category->load(array('extension' => 'com_eventgallery', 'title' => 'Uncategorised')))
        {
            $category->extension        = 'com_eventgallery';
            $category->title            = 'Uncategorised';
            $category->description      = '';
            $category->published        = 1;
            $category->access           = 1;
            $category->params           = '{"category_layout":"","image":""}';
            $category->metadata         = '{"author":"","robots":""}';
            $category->metadesc         = '';
            $category->metakey          = '';
            $category->language         = '*';
            $category->checked_out_time = JFactory::getDbo()->getNullDate();
            $category->version          = 1;
            $category->hits             = 0;
            $category->modified_user_id = 0;
            $category->checked_out      = 0;

            // Set the location in the tree
            $category->setLocation(1, 'last-child');

            // Check to make sure our data is valid
            if (!$category->check())
            {
                JFactory::getApplication()->enqueueMessage(JText::sprintf('COM_EVENTGALLERY_ERROR_INSTALL_CATEGORY', $category->getError()));

                return;
            }

            // Now store the category
            if (!$category->store(true))
            {
                JFactory::getApplication()->enqueueMessage(JText::sprintf('COM_EVENTGALLERY_ERROR_INSTALL_CATEGORY', $category->getError()));

                return;
            }

            // Build the path for our category
            $category->rebuildPath($category->id);
        }
    }

}