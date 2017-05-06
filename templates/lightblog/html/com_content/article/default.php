<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

// Create shortcuts to some parameters.
$params		= $this->item->params;
$images = json_decode($this->item->images);
$urls = json_decode($this->item->urls);
$canEdit	= $this->item->params->get('access-edit');
$user		= JFactory::getUser();

?>
<div class="item-page<?php echo $this->pageclass_sfx?>">
<?php if ($params->get('show_title')) : ?>
	<h1 class="item-page-title<?php echo $this->pageclass_sfx?>"><?php if ($params->get('link_titles') && !empty($this->item->readmore_link)) : ?><a href="<?php echo $this->item->readmore_link; ?>"><?php echo $this->escape($this->item->title); ?></a><?php else : ?><?php echo $this->escape($this->item->title); ?><?php endif; ?></h1>
<?php endif; ?>

<?php $useDefList = (($params->get('show_author')) or ($params->get('show_category')) or ($params->get('show_parent_category')) or ($canEdit) or ($params->get('show_print_icon')) or ($params->get('show_email_icon'))
	or ($params->get('show_create_date')) or ($params->get('show_modify_date')) or ($params->get('show_publish_date'))
	or ($params->get('show_tags')) or ($params->get('show_hits'))); ?>

<?php if ($useDefList) : ?>
<div class="iteminfo">
<?php endif; ?>
<?php if ($params->get('show_parent_category') && $this->item->parent_slug != '1:root') : ?>
	<span class="category"><i class="icon-folder-open"></i>
	<?php	$title = $this->escape($this->item->parent_title); $url = '<a href="'.JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->parent_slug)).'">'.$title.'</a>';?>
	<?php if ($params->get('link_parent_category') AND $this->item->parent_slug) : ?>
		<?php echo JText::sprintf('COM_CONTENT_PARENT', $url); ?>
	<?php else : ?>
		<?php echo JText::sprintf('COM_CONTENT_PARENT', $title); ?>
	<?php endif; ?>
	</span>
<?php endif; ?>
<?php if ($params->get('show_category')) : ?>
	<span class="sub-category"><i class="icon-folder-open"></i>
	<?php 	$title = $this->escape($this->item->category_title); $url = '<a href="'.JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->catslug)).'">'.$title.'</a>';?>
	<?php if ($params->get('link_category') AND $this->item->catslug) : ?>
		<?php echo JText::sprintf('COM_CONTENT_CATEGORY', $url); ?>
	<?php else : ?>
		<?php echo JText::sprintf('COM_CONTENT_CATEGORY', $title); ?>
	<?php endif; ?>
	</span>
<?php endif; ?>
<?php if ($params->get('show_create_date')) : ?>
	<span class="create"><i class="icon-calendar"></i>
	<?php echo JText::sprintf('COM_CONTENT_CREATED_DATE_ON', JHtml::_('date',$this->item->created, JText::_('DATE_FORMAT_LC1'))); ?>
	</span>
<?php endif; ?>
<?php if ($params->get('show_modify_date')) : ?>
	<span class="modified"><i class="icon-edit"></i>
	<?php echo JText::sprintf('COM_CONTENT_LAST_UPDATED', JHtml::_('date',$this->item->modified, JText::_('DATE_FORMAT_LC1'))); ?>
	</span>
<?php endif; ?>
<?php if ($params->get('show_publish_date')) : ?>
	<span class="published"><i class="icon-tasks"></i>
	<?php echo JText::sprintf('COM_CONTENT_PUBLISHED_DATE_ON', JHtml::_('date',$this->item->publish_up, JText::_('DATE_FORMAT_LC1'))); ?>
	</span>
<?php endif; ?>
<?php if ($params->get('show_author') && !empty($this->item->author )) : ?>
	<span class="createdby"><i class="icon-user"></i>
	<?php $author = $this->item->created_by_alias ? $this->item->created_by_alias : $this->item->author; ?>
	<?php if (!empty($this->item->contactid) && $params->get('link_author') == true): ?>
	<?php
		$needle = 'index.php?option=com_contact&view=contact&id=' . $this->item->contactid;
		$item = JSite::getMenu()->getItems('link', $needle, true);
		$cntlink = !empty($item) ? $needle . '&Itemid=' . $item->id : $needle;
	?>
		<?php echo JText::sprintf('COM_CONTENT_WRITTEN_BY', JHtml::_('link', JRoute::_($cntlink), $author)); ?>
	<?php else: ?>
		<?php echo JText::sprintf('COM_CONTENT_WRITTEN_BY', $author); ?>
	<?php endif; ?>
	</span>
<?php endif; ?>

<?php if ($params->get('show_tags', 1) && !empty($this->item->tags->itemTags)) : ?>
        <span class="tagi">
        <i class="icon-tags"></i>
		<?php $this->item->tagLayout = new JLayoutFile('joomla.content.tags'); ?>
		<?php echo $this->item->tagLayout->render($this->item->tags->itemTags); ?>
		</span>
<?php endif; ?>

	<?php if (!$this->print) : ?>
		<?php if ($params->get('show_print_icon')) : ?>
			<span class="jt-print"><?php echo JHtml::_('icon.print_popup',  $this->item, $params); ?></span>
		<?php endif; ?>
		<?php if ($params->get('show_email_icon')) : ?>
        	<span class="jt-mail"><?php echo JHtml::_('icon.email',  $this->item, $params); ?></span>
		<?php endif; ?>
		<?php if ($canEdit) : ?>
			<span class="jt-edit"><?php echo JHtml::_('icon.edit', $this->item, $params); ?></span>
		<?php endif; ?>
	<?php endif; ?>

<?php if ($useDefList) : ?>
	</div>
<?php endif; ?>

<?php if (isset ($this->item->toc)) : ?>
	<?php echo $this->item->toc; ?>
<?php endif; ?>

<?php if (isset($urls) AND ((!empty($urls->urls_position) AND ($urls->urls_position=='0')) OR  ($params->get('urls_position')=='0' AND empty($urls->urls_position) ))
		OR (empty($urls->urls_position) AND (!$params->get('urls_position')))): ?>
<?php echo $this->loadTemplate('links'); ?>
<?php endif; ?>

<?php if ($params->get('access-view')):?>
<?php  if (isset($images->image_fulltext) and !empty($images->image_fulltext)) : ?>
<?php $imgfloat = (empty($images->float_fulltext)) ? $params->get('float_fulltext') : $images->float_fulltext; ?>
<div class="thumbnail pull-<?php echo htmlspecialchars($imgfloat); ?>">
<img
	<?php if ($images->image_fulltext_caption):
		echo ' title="' .htmlspecialchars($images->image_fulltext_caption) .'"';
	endif; ?>
	src="<?php echo htmlspecialchars($images->image_fulltext); ?>" alt="<?php echo htmlspecialchars($images->image_fulltext_alt); ?>"/>
</div>
<?php endif; ?>
<?php
if (!empty($this->item->pagination) AND $this->item->pagination AND !$this->item->paginationposition AND !$this->item->paginationrelative):
	echo $this->item->pagination;
 endif;
?>
<?php echo $this->item->text; ?>
<?php if ($params->get('show_hits')) : ?>
	<span class="hits"><i class="icon-signal"></i>
	<?php echo JText::sprintf('COM_CONTENT_ARTICLE_HITS', $this->item->hits); ?>
	</span>
<?php endif; ?>
<?php
if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND!$this->item->paginationrelative):
	 echo $this->item->pagination;?>
<?php endif; ?>

<?php if (isset($urls) AND ((!empty($urls->urls_position)  AND ($urls->urls_position=='1')) OR ( $params->get('urls_position')=='1') )): ?>
<?php echo $this->loadTemplate('links'); ?>
<?php endif; ?>
	<?php //optional teaser intro text for guests ?>
<?php elseif ($params->get('show_noauth') == true and  $user->get('guest') ) : ?>

	<?php  if (isset($images->image_intro) and !empty($images->image_intro)) : ?>
	<?php $imgfloat = (empty($images->float_intro)) ? $params->get('float_intro') : $images->float_intro; ?>
	<div class="pull-<?php echo htmlspecialchars($imgfloat); ?> thumbnail"> <img
			<?php if ($images->image_intro_caption):
				echo ' title="' .htmlspecialchars($images->image_intro_caption) .'"';
			endif; ?>
			src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/> </div>
	<?php endif; ?>
	<?php if (!$params->get('show_intro')) : ?>
	<?php echo $this->item->event->afterDisplayTitle; ?>
	<?php endif; ?>
	<?php echo $this->item->event->beforeDisplayContent; ?>
    <?php echo $this->item->introtext; ?>
    
	<?php //Optional link to let them register to see the whole article. ?>
	<?php if ($params->get('show_readmore') && $this->item->fulltext != null) :
		$link1 = JRoute::_('index.php?option=com_users&view=login');
		$link = new JURI($link1);?>
		<p class="readmore">
		<a href="<?php echo $link; ?>">
		<?php $attribs = json_decode($this->item->attribs);  ?>
		<?php
		if ($attribs->alternative_readmore == null) :
			echo JText::_('COM_CONTENT_REGISTER_TO_READ_MORE');
		elseif ($readmore = $this->item->alternative_readmore) :
			echo $readmore;
			if ($params->get('show_readmore_title', 0) != 0) :
			    echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
			endif;
		elseif ($params->get('show_readmore_title', 0) == 0) :
			echo JText::sprintf('COM_CONTENT_READ_MORE_TITLE');
		else :
			echo JText::_('COM_CONTENT_READ_MORE');
			echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
		endif; ?></a>
		</p>
	<?php endif; ?>
<?php endif; ?>

<?php
if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND $this->item->paginationrelative):
	 echo $this->item->pagination;?>
<?php endif; ?>

<?php echo $this->item->event->afterDisplayContent; ?>
</div>
