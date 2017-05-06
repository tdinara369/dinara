<?php
/*------------------------------------------------------------------------
# com_authorlist - Author List
# ------------------------------------------------------------------------
# author    Jesús Vargas Garita
# copyright Copyright (C) 2013 www.joomlahill.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.joomlahill.com
# Technical Support:  Forum - http://www.joomlahill.com/forum
-------------------------------------------------------------------------*/

defined('_JEXEC') or die;

class JHtmlIcono
{
	static function edit($author, $params, $attribs = array())
	{
		$user	= JFactory::getUser();
		$userId	= $user->get('id');
		$uri	= JFactory::getURI();

		JHtml::_('behavior.tooltip');

		$url	= 'index.php?option=com_authorlist&task=author.edit&a_id='.$author->id.'&return='.base64_encode($uri);		
		$text = '<i class="hasTip icon-edit tip" title="'.JText::_('COM_AUTHORLIST_AUTHOR_EDIT').'"></i> '.JText::_('JGLOBAL_EDIT');

		$output = JHtml::_('link', JRoute::_($url), $text);

		return $output;
	}
}
