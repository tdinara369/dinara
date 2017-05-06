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


abstract class EventgalleryLibraryFile implements EventgalleryLibraryInterfaceImage
{
    public $_blank_script_path = 'media/com_eventgallery/frontend/images/blank.gif';

    /**
     * @var string
     */
    protected $_filename = NULL;

    /**
     * @var string
     */
    protected $_foldername = NULL;

    /**
     * @var EventgalleryTableFile
     */
    protected $_file = NULL;

    /**
     * @var EventgalleryLibraryFolder
     */
    protected $_folder = NULL;

    protected $_ls_caption = NULL;

    protected $_ls_title = NULL;


    /**
     * creates the lineitem object. $dblineitem is the database object of this line item
     *
     * @param $object object
     */
    function __construct($object)
    {

        if (!is_object($object)) {
            throw new InvalidArgumentException("Can't create File Object without a valid data object.");
        }

        $this->_file = $object;
        $this->_foldername = $object->folder;
        $this->_filename = $object->file;

        /**
         * @var EventgalleryLibraryFactoryFolder $folderFactory
         */
        $folderFactory = EventgalleryLibraryFactoryFolder::getInstance();

        $this->_folder = $folderFactory->getFolder($object->folder);

        $this->_ls_title = new EventgalleryLibraryDatabaseLocalizablestring($this->_file->title);
        $this->_ls_caption = new EventgalleryLibraryDatabaseLocalizablestring($this->_file->caption);

    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->_filename;
    }

    /**
     * @return string
     */
    public function getFolderName() {
        return $this->_foldername;
    }

    /**
     * @return EventgalleryLibraryFolder
     */
    public function getFolder() {
        return $this->_folder;
    }

    /**
     * @return bool
     */
    public function isPublished()
    {
        return $this->getFolder()->isPublished() == 1 && $this->_file->published == 1;
    }


    /**
     * @return bool
     */
    public function isCommentingAllowed() {
        return $this->_file->allowcomments==1;
    }

    /**
     * checks if the image has a title to show.
     */
    public function hasTitle()
    {
        if (strlen($this->getTitle()) > 0) {
            return true;
        }

        return false;
    }

    /**
     * returns the title of an image.
     * @param bool $showImageID
     * @param bool $showExif
     * @return string
     */
    public function getTitle($showImageID = false, $showExif = false)
    {
        return $this->getLightBoxTitle($showImageID, $showExif);
    }

    public function getHeight() {
        return $this->_file->height;
    }

    public function getWidth() {
        return $this->_file->width;
    }

    /**
     *  returns a title with the following format:
     *
     *   <span class="img-caption img-caption-part1">Foo</span>[<span class="img-caption img-caption-part1">Bar</span>][<span class="img-exif">EXIF</span>]
     *
     * @param bool $showImageID
     * @param bool $showExif
     * @return string
     */
    public function getLightBoxTitle($showImageID = false, $showExif = false)
    {

        $caption = "";

        $fileTitle = $this->getFileTitle();

        if (isset($fileTitle) && strlen($fileTitle) > 0) {
            $caption .= '<span class="img-caption img-caption-part1">' . $fileTitle . '</span>';
        }

        $fileCaption = $this->getFileCaption();

        if (isset($fileCaption) && strlen($fileCaption) > 0) {
            $caption .= '<span class="img-caption img-caption-part2">' . $fileCaption . '</span>';
        }

        if ($showExif && isset($this->exif) && isset($this->exif->model)>0 && isset($this->exif->focallength)>0 && isset($this->exif->fstop)>0) {
            $exif = '<span class="img-exif">'.$this->exif->model.", ".$this->exif->focallength. "mm, f/".$this->exif->fstop.", ISO ".$this->exif->iso."</span>";
            $caption .= $exif;
        }

        if ($showImageID) {
            $caption .=  '<span class="img-id">'.JText::_('COM_EVENTGALLERY_IMAGE_ID').' '.$this->getFileName().'</span>';
  
        }


        return $caption;
    }

    public function getFullImgTag($width=104,  $height=104) {

        return '<img src="'.JUri::root().$this->_blank_script_path.'" '.
        'style="width: '.$width.'px; '.
        'height: '.$height.'px; '.
        'background-repeat:no-repeat; '.
        'background-position: 50% 50%; '.
        'background-image:url(\''.htmlspecialchars($this->getThumbUrl($width,$height,false,true), ENT_NOQUOTES, "UTF-8").'\'); '.
        '" '.
        'alt="'.$this->getAltContent().'" />';

    }

    public function getThumbImgTag($width=104,  $height=104, $cssClass="", $crop=false) {

        $newWidth = $width;
        $newHeight = $height;

        if ($crop === false) {
            $newHeight = $this->getHeight()/$this->getWidth() * $width;
        }

        return '<img src="'.JUri::root().$this->_blank_script_path.'" '.
        'style="width: '.$newWidth.'px; '.
        'height: '.$newHeight.'px; '.
        'background-repeat:no-repeat; '.
        'background-position: 50% 50%; '.
        'background-image:url(\''.htmlspecialchars($this->getThumbUrl($width,$height, true, $crop), ENT_NOQUOTES, "UTF-8").'\'); '.
        '" '.
        'alt="'.$this->getAltContent().'" '.
        'class="'.$cssClass.'"/>';
    }

    /**
     * @param int $width
     * @param int $height
     * @param string $cssClass
     * @param bool|false $crop
     * @param string $customDataAttributes a string like "data-flickr-farm"
     * @return string
     */
    public function getLazyThumbImgTag($width=104,  $height=104, $cssClass="", $crop=false, $customDataAttributes = "") {
        $imgTag = '<img class="eventgallery-lazyme '.$cssClass.'" '.
            'data-width="'.$this->_file->width.'" '.
            'data-height="'.$this->_file->height.'" '.
            $customDataAttributes.
            'longdesc="'.htmlspecialchars($this->getThumbUrl($width,$height, true, $crop), ENT_NOQUOTES, "UTF-8").'" '.
            'src="'.JUri::root().$this->_blank_script_path.'" '.
            'style=" width: '.$width.'px; '.
            'height: '.$height.'px; '.
            'background-position: 50% 50%; '.
            'background-repeat: no-repeat;" '.
            'alt="'.$this->getAltContent().'" '.
            '/>';
        return $imgTag;
    }

    public function getCartThumb($lineitem)
    {
        return '<a class="thumbnail"
    						href="' . $this->getImageUrl(NULL, NULL, true) . '"
    						title="' . htmlentities($lineitem->getImageType()!=null?$lineitem->getImageType()->getDisplayName():"n/a", ENT_QUOTES, "UTF-8") . '"
    						data-lineitem-id="' . $lineitem->getId() . '"
    						rel="cart"
    						data-eventgallery-lightbox="cart"> ' . $this->getThumbImgTag(48, 48, null, true) . '</a>';
    }

    public function getMiniCartThumb($lineitem)
    {
        return '<a class="thumbnail"
    						href="' . $this->getImageUrl(NULL, NULL, true) . '"
    						title="' . htmlentities($lineitem->getImageType()!=null?$lineitem->getImageType()->getDisplayName():"n/a", ENT_QUOTES, "UTF-8") . '"
    						data-lineitem-id="' . $lineitem->getId() . '"
    						rel="cart"
    						data-eventgallery-lightbox="cart"> ' . $this->getThumbImgTag(48, 48, null, true) . '</a>';
    }

    /**
     * returns the title of an image.
     */
    public function getPlainTextTitle()
    {

        if (strlen($this->getFileTitle()) > 0) {
            return strip_tags($this->getFileTitle());
        }

        if (strlen($this->getFileCaption()) > 0) {
            return strip_tags($this->getFileCaption());
        }

        return "";
    }


    /**
     * counts a hit on this file.
     */
    public function countHit() {
        return;
    }

    /**
     * returns the number of hits for this file
     *
     * @return int
     */
    public function getHitCount() {
        if (isset($this->_file->hits)) {
            return $this->_file->hits;
        }
        return 0;
    }

    /**
     * returns the content for the alt attribute of an img tag.
     * @return string
     */
    public function getAltContent() {
        $content = "";
        $folder = $this->getFolder();
        if (!isset($folder)) {
            //print_r($this->_file);

        }
        $folderDisplayName = $this->getFolder()->getDisplayName();
        $title = $this->getPlainTextTitle();

        if (strlen($folderDisplayName)>0) {
            $content .= $folderDisplayName;
        }

        if (strlen($content)>0 && strlen($title)>0) {
            $content .= ' - ';
        }

        $content .= $title;

        return htmlentities(strip_tags($content), ENT_QUOTES, "UTF-8");
    }

    /**
     * Returns the title of the image
     *
     * @param string $languageTag
     * @return string
     */
    public function getFileTitle($languageTag = null) {
        if (null == $this->_ls_title) {
            return "";
        }
        return $this->_ls_title->get($languageTag);
    }

    /**
     * Returns the title of the image
     *
     * @param string $languageTag
     * @return string
     */
    public function getFileCaption($languageTag = null) {
        if ($this->_ls_caption == null) {
            return "";
        }
        return $this->_ls_caption->get($languageTag);
    }

    /**
     * returns the id of the file
     * @return int
     */
    public function getId() {
        return $this->_file->id;
    }

    /**
     * Checks of the file has an url
     *
     * @return bool
     */
    public function hasUrl() {
        if (isset($this->_file->url) && strlen($this->_file->url)>0) {
            return true;
        }

        return false;
    }

    /**
     * return the url for this file
     *
     * @return string
     */
    public function getUrl() {
        if (!$this->hasUrl()) {
            return null;
        }
        return $this->_file->url;
    }

    /**
     * returns the creation date as a string with the format YYYYmmddHHiiss
     *
     * @return String
     */
    public function getCreationDateString() {
        return $this->_file->creation_date;
    }

    /**
     * @return DateTime|null
     */
    public function getCreationDate() {

        $dateStr = $this->getCreationDateString();
        if (empty($dateStr)) {
            return null;
        }

        $date = DateTime::createFromFormat('YmdHis', $dateStr);

        return $date;
    }

    /**
     * returns the ordering number of this file
     * @return int
     */
    public function getOrdering() {
        return $this->_file->ordering;
    }

    /**
     * Syncs this file with the database for example.
     */
    public function syncFile() {
        return EventgalleryLibraryManagerFolder::$SYNC_STATUS_NOSYNC;
    }

    /**
     *
     * @return boolean
     */
    public function isMainImage() {
        return $this->_file->ismainimage;
    }
}
