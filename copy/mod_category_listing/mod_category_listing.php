<?php
defined('_JEXEC') or die;
// Include the banners functions only once
require_once __DIR__ . '/helper.php';
$catid = $params->get('category_list'); 
$tagid = $params->get('tags'); 
$limit = $params->get('numbe_of_project');

$categories = CategoryListing::getAccordianCat($catid,$tagid,$limit);
//echo '<pre>'; print_r($categories); echo'</pre>'; exit; 
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');
require JModuleHelper::getLayoutPath('mod_category_listing', $params->get('layout', 'default'));
