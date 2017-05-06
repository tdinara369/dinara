<?php
/**
 * jSecure Lite components for Joomla!
 * jSecure Lite extention prevents access to administration (back end)
 * login page without appropriate access key.
 *
 * @author      $Author: Ajay Lulia $
 * @copyright   Joomla Service Provider - 2012
 * @package     jSecure Lite 1.0
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     $Id: install.jsecurelite.php  $
 */

	// Security check to ensure this file is being included by a parent file.
	if (!defined('_JEXEC')) die('Direct Access to this location is not allowed.');

	global $mainframe;
	jimport('joomla.filesystem.file');
	$front_live_site = rtrim(str_replace('/administrator', '', JURI::base()), '/');
	$database	= & JFactory::getDBO();
	JFolder::create(JPATH_SITE.'/'.'plugins/system/jsecurelite');
	// Installing system plugin
	$r1 = true === JFile::move( JPATH_ADMINISTRATOR. '/'.'components'.'/'.'com_jsecurelite'.'/'.'sysplugin'.'/'.'jsecurelite.php',
	JPATH_ROOT.'/'.'plugins'.'/'.'system'.'/'.'jsecurelite'.'/'.'jsecurelite.php');
	$r2 = true === JFile::move( JPATH_ADMINISTRATOR. '/'.'components'.'/'.'com_jsecurelite'.'/'.'sysplugin'.'/'.'jsecurelite.xml',
	JPATH_ROOT.'/'.'plugins'.'/'.'system'.'/'.'jsecurelite'.'/'.'jsecurelite.xml');
	$r3 = true === JFile::move( JPATH_ADMINISTRATOR. '/'.'components'.'/'.'com_jsecurelite'.'/'.'sysplugin'.'/'.'404.html',
	JPATH_ROOT.'/'.'plugins'.'/'.'system'.'/'.'jsecurelite'.'/'.'404.html');
	$r5 = true === JFile::move( JPATH_ADMINISTRATOR.'/'.'components'.'/'.'com_jsecurelite'.'/'.'sysplugin'.'/'.'language'.'/'.'en-GB.plg_system_jsecurelite.ini',
	JPATH_ADMINISTRATOR.'/'.'language'.'/'.'en-GB'.'/'.'en-GB.plg_system_jsecurelite.ini');

	if(JFolder::exists(JPATH_SITE.'/'.'plugins/system/jsecurelite/jsecurelite') ){
		JFile::delete( JPATH_ROOT.'/'.'plugins'.'/'.'system'.'/'.'jsecurelite'.'/'.'jsecurelite' );
	}

	JFolder::create(JPATH_SITE.'/'.'plugins/system/jsecurelite/jsecurelite');
	JFile::move( JPATH_ADMINISTRATOR.'/'.'components'.'/'.'com_jsecurelite'.'/'.'sysplugin'.'/'.'jsecurelite'.'/'.'jsecurelite.class.php', JPATH_ROOT.'/'.'plugins'.'/'.'system'.'/'.'jsecurelite'.'/'.'jsecurelite'.'/'.'jsecurelite.class.php');
	JFile::move( JPATH_ADMINISTRATOR.'/'.'components'.'/'.'com_jsecurelite'.'/'.'sysplugin'.'/'.'jsecurelite'.'/'.'index.html', JPATH_ROOT.'/'.'plugins'.'/'.'system'.'/'.'jsecurelite'.'/'.'jsecurelite'.'/'.'index.html');

	JFolder::create(JPATH_SITE.'/'.'plugins/system/jsecurelite/jsecurelite/css');
	JFile::move( JPATH_ADMINISTRATOR.'/'.'components'.'/'.'com_jsecurelite'.'/'.'sysplugin'.'/'.'jsecurelite'.'/'.'css'.'/'.'jsecurelite.css', JPATH_ROOT.'/'.'plugins'.'/'.'system'.'/'.'jsecurelite'.'/'.'jsecurelite'.'/'.'css'.'/'.'jsecurelite.css');
	JFile::move( JPATH_ADMINISTRATOR.'/'.'components'.'/'.'com_jsecurelite'.'/'.'sysplugin'.'/'.'jsecurelite'.'/'.'css'.'/'.'index.html', JPATH_ROOT.'/'.'plugins'.'/'.'system'.'/'.'jsecurelite'.'/'.'jsecurelite'.'/'.'css'.'/'.'index.html');

	if ($r1 && $r2 && $r3) {
		  $sql="INSERT INTO `#__extensions` ( `name`, `type`, `element`, `folder`, `client_id`, `enabled`, `access`, `protected`, `manifest_cache`, `params`, `custom_data`, `system_data`, `checked_out`, `checked_out_time`, `ordering`, `state` ) VALUES ('System - jSecure Lite', 'plugin','jsecurelite', 'system', 0,1,1,0,'', '','', '', 0, '0000-00-00 00:00:00',0,0);";
		  $database->setQuery( $sql);
		  $database->query();

		  $session    =& JFactory::getSession();
		  $session->set('jSecureAuthentication', 1);
	} else {
		if ($r1 === true) JFile::delete(JPATH_ROOT.'/'.'plugins'.'/'.'system'.'/'.'jsecurelite.php');
		if ($r2 === true) JFile::delete(JPATH_ROOT.'/'.'plugins'.'/'.'system'.'/'.'jsecurelite.xml');

		JFile::delete(JPATH_ROOT.'/'.'plugins'.'/'.'system'.'/'.'404.html'); 
		JFile::delete(JPATH_ADMINISTRATOR.'/'.'language'.'/'.'en-GB'.'/'.'en-GB.plg_system_jsecurelite.ini');
		
		deleteDir(JPATH_ROOT.'/'.'plugins'.'/'.'system'.'/'.'jsecurelite/') ;
		JError::RaiseWarning( 500, JText::_('Could not install jsecure Lite system plugin'));

	}

	if (file_exists(JPATH_ROOT.'/'.'plugins'.'/'.'system'.'/'.'jsecurelite'.'/'.'jsecurelite.php') && file_exists(JPATH_ROOT.'/'.'plugins'.'/'.'system'.'/'.'jsecurelite'.'/'.'jsecurelite'.'/'.'jsecurelite.class.php')) {
			deleteDir(JPATH_ADMINISTRATOR.'/'.'components'.'/'.'com_jsecurelite'.'/'.'sysplugin/') ;
	} else  {
		echo '<strong><font color="red">Sorry, something went wrong while installing jSecure Lite on your web site. Please try uninstalling first, then check permissions on your file system, and make sure Joomla can write to the /plugin directory. Or contact your site administrator for assistance. <br>You can also report this on our website at <a target="_blank" href="#" >our support forum.</a></font>';
	}

	function deleteDir($dir) 
	{ 
			if ($handle = opendir($dir)) 
			{ 
					$array = array(); 
						while (false !== ($file = readdir($handle))) { 
							if ($file != "." && $file != "..") { 
								if(is_dir($dir.$file)) 
								{ 
									if(!@rmdir($dir.$file)) // Empty directory? Remove it 
									{ 
										deleteDir($dir.$file.'/'); // Not empty? Delete the files inside it 
									} 
								} else  { 
									@unlink($dir.$file); 
								} 
							} 
						} 
					closedir($handle); 
				@rmdir($dir); 
			} 
	}
?>