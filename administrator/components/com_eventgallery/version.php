<?php
/**
 * @package     Sven.Bluege
 * @subpackage  com_eventgallery
 *
 * @copyright   Copyright (C) 2005 - 2013 Sven Bluege All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */


// no direct access
defined('_JEXEC') or die('Restricted access');

if (!defined('EVENTGALLERY_VERSION')) {

	$db = JFactory::getDbo();

	$sql = $db->getQuery(true)
		->select($db->quoteName('name'))
		->from($db->quoteName('#__extensions'))
		->where($db->quoteName('type').' = '.$db->quote('package'))
		->where($db->quoteName('element').' = '.$db->quote('pkg_eventgallery_full'));
	$db->setQuery($sql);
	$result = $db->loadResult();

	$isFull = $result!=null?true:false;


	define('EVENTGALLERY_EXTENDED', $isFull);
	define('EVENTGALLERY_VERSION', '3.7.0');
	define('EVENTGALLERY_VERSION_SHORTSHA', 'e46957f');
	define('EVENTGALLERY_DATABASE_VERSION', '3.6.4_2017-02-13');
	define('EVENTGALLERY_DATE', '15/02/2017');
}