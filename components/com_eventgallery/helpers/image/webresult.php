<?php

/**
 * @package     Sven.Bluege
 * @subpackage  com_eventgallery
 *
 * @copyright   Copyright (C) 2005 - 2013 Sven Bluege All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
jimport('joomla.error.log');
require_once JPATH_ROOT.'/components/com_eventgallery/config.php';
require_once JPATH_ROOT.'/components/com_eventgallery/library/common/logger.php';

/**
 * Holds a result including update status.
 *
 * Class EventgalleryHelpersImageWebresult
 */
class EventgalleryHelpersImageWebresult
{
    private $_cachefilename = null;
    private $_isDataUpdated = null;

    public function __construct($isDataUpdated, $cachefilename) {
        $this->_isDataUpdated = $isDataUpdated;
        $this->_cachefilename = $cachefilename;
    }

    public function getCacheFileName() {
        return $this->_cachefilename;
    }

    public function isDataUpdated() {
        return $this->_isDataUpdated;
    }

    /**
     * Read the content of the cache file.
     *
     * @return string
     */
    public function getFileContent() {
        return file_get_contents($this->getCacheFileName());
    }

    /**
     * Tries to convert the content of the result into an object by assuming that it's a JSON string
     *
     * @return mixed
     */
    public function getFileContentAsJson() {
        return json_decode($this->getFileContent(), true);
    }

    /**
     * tries to fetch the content from a given url. It uses CURL to get the content
     * in the first place and falls back to return file_get_contents($url) if CURL is unavailable.
     *
     * @param $url
     * @return string the content body provided by the given URL
     */
    public static function url_get_contents ($url) {
        if (function_exists('curl_init')) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_USERAGENT, "{$_SERVER['SERVER_NAME']}");
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            $output = curl_exec($ch);
            curl_close($ch);
            return $output;
        }

        return @file_get_contents($url);
    }

}