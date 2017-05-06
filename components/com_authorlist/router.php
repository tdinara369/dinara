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

class AuthorlistRouter extends JComponentRouterBase
{
	public function build(&$query)
	{
		$segments = array();
		$app	= JFactory::getApplication();
		$menu	= $app->getMenu();
	
		if (empty($query['Itemid'])) {
			$menuItem = $menu->getActive();
		} else {
			$menuItem = $menu->getItem($query['Itemid']);
		}
		$mView	= (empty($menuItem->query['view'])) ? null : $menuItem->query['view'];
		$mId	= (empty($menuItem->query['id'])) ? null : $menuItem->query['id'];
		
		if (isset($query['layout']) && $query['layout'] != 'edit') {
			unset($query['layout']);
		}	
		
		if (isset($query['view']))
		{
			$view = $query['view'];
			if (empty($query['Itemid'])) {
				$segments[] = $view;
				unset($query['view']);
			}
		} else {
			return $segments;	
		}
		
		if ($view == 'author') {
			if ($mId != intval($query['id']) || $mView != $view) {
				if (isset($query['id'])) {
					$id = $query['id'];
				}
				$segments[] = $id;
			}
		} else {
			return $segments;	
		}
		
		if (isset($query['view']) && ($mView == $query['view']) and (isset($query['id'])) and ($mId == intval($query['id']))) {
			unset($query['view']);
			unset($query['id']);
	
			return $segments;
		}
		
		unset($query['view']);
		unset($query['id']);
		
		return $segments;
	}
	
	public function parse(&$segments)
	{
		$app	= JFactory::getApplication();
		$menu	= $app->getMenu();
		$item	= $menu->getActive();
	
		$count = count($segments);
			
		if (!isset($item)) {
			$vars['view']	= $segments[0];
			$vars['id']		= $segments[$count - 1];
	
			return $vars;
		}
	
		$vars['view'] = 'author';
		$vars['id'] = $segments[$count - 1];
	
		return $vars;
	}
}
