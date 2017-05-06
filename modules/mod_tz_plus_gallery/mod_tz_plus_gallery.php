<?php
/*------------------------------------------------------------------------

# TZ Extension

# ------------------------------------------------------------------------

# author    DuongTVTemPlaza

# copyright Copyright (C) 2012 templaza.com. All Rights Reserved.

# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

# Websites: http://www.templaza.com

# Technical Support:  Forum - http://templaza.com/Forum

-------------------------------------------------------------------------*/

defined('_JEXEC') or die();

require_once dirname(__FILE__) . '/helper.php';

$title_album = $params->get('album_title');
$tztype = $params->get('tztype');
$facebook_id = $params->get('fb_id');
$flickr_id = $params->get('flickr_id');
$instagram_id = $params->get('instagram_id');
$google_plus_id = $params->get('gplus_id');
$fb_type_album = $params->get('fb_type_album');
$fk_type_album = $params->get('fk_type_album');
$gl_type_album = $params->get('gl_type_album');
$fb_album_id = $params->get('fb_album_id');
$fk_album_id = $params->get('fk_album_id');
$gl_album_id = $params->get('gl_album_id');


$fb_in_album_id = str_replace(' ', '', $params->get('fb_in_album_id'));
$fb_ex_album_id = str_replace(' ', '', $params->get('fb_ex_album_id'));


$fk_in_album_id = str_replace(' ', '', $params->get('fk_in_album_id'));
$fk_ex_album_id = str_replace(' ', '', $params->get('fk_ex_album_id'));

$gl_in_album_id = str_replace(' ', '', $params->get('gl_in_album_id'));
$gl_ex_album_id = str_replace(' ', '', $params->get('gl_ex_album_id'));


$fb_photo_limit = $params->get('fb_photo_limit');
$fb_album_limit = $params->get('fb_album_limit');

$fk_photo_limit = $params->get('fk_photo_limit');
$fk_album_limit = $params->get('fk_album_limit');

$gl_photo_limit = $params->get('gl_photo_limit');
$gl_album_limit = $params->get('gl_album_limit');

$it_photo_limit = $params->get('it_photo_limit');

$instagram_data_access_token = $params->get('instagram_data_access_token', '');
$album_desc = $params->get('album_desc');
$tz_columns = $params->get('tz_columns');
$tz_padding = $params->get('tz_padding');
$tz_show_title_album = $params->get('tz_show_title_album');
$tz_show_desc_album = $params->get('tz_show_desc_album');
$tz_color_box = $params->get('tz_color_box');

$load_more_nav = $params->get('tz_use_load_more');
if ($load_more_nav) {
    $nav_hide = '';
} else {
    $nav_hide = ' nav_hide';
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_tz_plus_gallery', $params->get('layout', 'default'));
