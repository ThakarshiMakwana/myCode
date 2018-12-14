<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_banners
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
// Include the banners functions only once
require_once __DIR__ . '/helper.php';
$catid = $params->get('category_list'); 
$tagid = $params->get('tags'); 
$limit = $params->get('numbe_of_project');
$show_hits = $params->get('show_hits');
$show_title = $params->get('show_title');
$show_count = $params->get('show_count');
$show_viewmore = $params->get('show_viewmore');

$categories = CategoryListing::getAccordianCat($catid,$tagid,$limit);
//echo '<pre>'; print_r($categories); echo'</pre>'; exit; 
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');
require JModuleHelper::getLayoutPath('mod_category_listing', $params->get('layout', 'default'));
