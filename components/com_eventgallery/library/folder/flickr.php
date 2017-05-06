<?php

/**
 * @package     Sven.Bluege
 * @subpackage  com_eventgallery
 *
 * @copyright   Copyright (C) 2005 - 2013 Sven Bluege All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();


class EventgalleryLibraryFolderFlickr extends EventgalleryLibraryFolder
{

    /**
     * @var bool defines if we already updated this album during the request.
     */
    private $_photoSet_updated = false;

    /**
     * @param int $limitstart
     * @param int $limit
     * @param int $imagesForEvents if true load the main images at the first position
     * @return array
     */
    public function getFiles($limitstart = 0, $limit = 0, $imagesForEvents = 0, $sortAttribute='', $sortDirection='ASC') {

        $this->updatePhotoSet();

        return parent::getFiles($limitstart, $limit, $imagesForEvents, $sortAttribute, $sortDirection);
    }

    /**
     * returns the photoset id
     *
     * @return string
     */
    public function getPhotoSetId() {
        return $this->_foldername;
    }

    /**
     * Updates the photoset;
     *
     * @return
     */
    public function updatePhotoSet() {
        if ($this->_photoSet_updated === false) {
            $this->_photoSet_updated = true;

            EventgalleryHelpersImageFlickr::updatePhotoSet($this->getPhotoSetId());
        }
    }

    public static function syncFolder($foldername, $use_htacces_to_protect_original_files) {
        return ['status' => EventgalleryLibraryManagerFolder::$SYNC_STATUS_NOSYNC];
    }

    public static function addNewFolders() {
        return Array();
    }

    public static function getFileFactory() {
        return EventgalleryLibraryFactoryFileFlickr::getInstance();
    }

    public function isSortable() {
        return false;
    }

    public function supportsFileUpload() {
        return false;
    }

    public function supportsFileDeletion() {
        return false;
    }

    public function supportsImageDataEditing() {
        return false;
    }
}
