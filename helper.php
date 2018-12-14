<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_banners
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

class CategoryListing
{ 
    public static function getAccordianCat($catid,$tagid,$limit){ 
		$db=JFactory::getDBO();  
		$where = '';
		if($catid){ $where .= " AND p.catid = ".$catid; }
		if($tagid){ $where .= " AND m.tag_id = ".$tagid; }
		
		$query = "SELECT *  FROM #__advportfolio_projects AS p 
		JOIN #__contentitem_tag_map AS m ON p.id = m.content_item_id   
		WHERE 1=1 ".$where." GROUP BY p.id ORDER BY p.created DESC LIMIT ".$limit;  
		$db->setQuery($query); 
		$category=$db->loadobjectlist();
		return $category;
    }
	
}

