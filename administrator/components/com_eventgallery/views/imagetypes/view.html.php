<?php 
/**
 * @package     Sven.Bluege
 * @subpackage  com_eventgallery
 *
 * @copyright   Copyright (C) 2005 - 2013 Sven Bluege All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;



jimport( 'joomla.application.component.view');
jimport( 'joomla.html.pagination');
jimport( 'joomla.html.html');


class EventgalleryViewImagetypes extends EventgalleryLibraryCommonView
{    

    protected $items;
    protected $pagination;
    protected $state;

    /**
     * Display the view
     * @param null $tpl
     * @return bool|mixed
     */
    public function display($tpl = null)
    {
        $this->state = $this->get('State');
        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');

        // Check for errors.
        if (count($errors = $this->get('Errors'))) {
            throw new Exception(implode("\n", $errors));
        }
        $this->addToolbar();
        EventgalleryHelpersEventgallery::addSubmenu('imagetypes');      
        $this->sidebar = JHtmlSidebar::render();
        return parent::display($tpl);
    }

    protected function addToolbar() {
        JToolbarHelper::title(   JText::_( 'COM_EVENTGALLERY_IMAGETYPES' ), 'generic.png' );            
        JToolbarHelper::addNew('imagetype.add');
        JToolbarHelper::editList('imagetype.edit');
        JToolbarHelper::publishList('imagetypes.publish');
        JToolbarHelper::unpublishList('imagetypes.unpublish');
        JToolbarHelper::deleteList('Remove all selected Events?','imagetypes.delete','Remove');
    }

}
