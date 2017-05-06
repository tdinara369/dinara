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

JLoader::register('AuthorListHelper', JPATH_ADMINISTRATOR . '/components/com_authorlist/helpers/authorlist.php');
JLoader::register('CategoryHelperAssociation', JPATH_ADMINISTRATOR . '/components/com_categories/helpers/association.php');

abstract class AuthorListHelperAssociation extends CategoryHelperAssociation
{
	public static function getAssociations($id = 0, $view = null)
	{
		jimport('helper.route', JPATH_COMPONENT_SITE);

		$app = JFactory::getApplication();
		$jinput = $app->input;
		$view = is_null($view) ? $jinput->get('view') : $view;
		$id = empty($id) ? $jinput->getInt('id') : $id;

		if ($view == 'author')
		{
			if ($id)
			{
				$associations = JLanguageAssociations::getAssociations('com_authorlist', '#__authorlist', 'com_authorlist.author', $id, 'id', '', '');
				
				$return = array();

				foreach ($associations as $tag => $item)
				{
					$author_slug  = AuthorListHelperRoute::getAuthorSlug($item->id);		
				
					$return[$tag] = AuthorListHelperRoute::getAuthorRoute($author_slug, $item->language);
				}

				return $return;
			}
		}

		return array();

	}
}
