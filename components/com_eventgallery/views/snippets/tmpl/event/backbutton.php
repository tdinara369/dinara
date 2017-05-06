<?php
if ( $this->params->get('use_back_button', 0) == 0) {
    return;
}
    /**
 * @package     Sven.Bluege
 * @subpackage  com_eventgallery
 *
 * @copyright   Copyright (C) 2005 - 2013 Sven Bluege All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die('Restricted access');
$app = JFactory::getApplication();
/* Default Page fallback*/
$active = $app->getMenu()->getActive();
if (NULL == $active) {
    $this->params->merge($app->getMenu()->getDefault()->params);
    $active = $app->getMenu()->getDefault();
}


$entriesPerPage = $this->params->get('max_events_per_page', 12);
$filterEventsByUserGroup = $this->params->get('show_usergroup_protected_events_in_list', 0) == 0;
$model = JModelLegacy::getInstance('Events', 'EventgalleryModel');
$recursive = $this->params->get('show_items_per_category_recursive', false);
$user = JFactory::getUser();
$usergroups = JUserHelper::getUserGroups($user->id);
$entries = $model->getEntries(0, -1, $this->params->get('tags'), $this->params->get('sort_events_by'), $usergroups, $this->params->get('catid', null), $recursive, $filterEventsByUserGroup);

$pos = 0;
foreach($entries as $entry) {
    if ($entry->getId() == $this->folder->getId()) {

        break;
    }
    $pos++;
}

$limitstart = $pos - ($pos % $entriesPerPage);

$viewname = $active->query['view'];

$link = "";

if ($viewname == 'events') {

    $menuItemCatid = $active->params->get('catid', 0);
    $link = "index.php?option=com_eventgallery&Itemid=" . $this->currentItemid;

    if ($limitstart > 0 ) {
        $link .= "&limitstart=". (int)$limitstart;
    }

    $link = JRoute::_($link);
}

if ($viewname == 'categories') {

    // the categories view uses the catid as query parameter, the events view as param

    $menuItemCatid = $active->query['catid'];

    $link = "index.php?option=com_eventgallery&Itemid=" . $this->currentItemid;
    if (isset($this->category) && $this->category->id != 'root') {
        $link .= "&view=categories&catid=".$this->category->id;
    }

    if ($limitstart > 0 ) {
        $link .= "&limitstart=". (int)$limitstart;
    }

    $link = JRoute::_($link);
}



?>
<?php IF (strlen($link)>0 ) : ?>
    <a class="eventgallery-back-button" href="<?php echo $link; ?>"><?php echo JText::_('COM_EVENTGALLERY_EVENT_BACK_BUTTON_LABEL')?></a>
<?php ENDIF ?>


