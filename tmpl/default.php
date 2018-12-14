<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_banners
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
$itemid= 157;
defined('_JEXEC') or die;
?>
<div class="category-listing">
	<ul>
		<?php foreach ($categories as $cat){ ?>
		<li>
			<a href="/rose/index.php?option=com_advportfolio&view=projects&Itemid=157">
				<img src="<?php echo JURI::base(); ?>/images/advportfolio/images/<?php echo $cat->thumbnail; ?>">
			</a>
			<?php if($show_hits == 1){ ?>
			<div class="boxdata <?php echo $cat->projectcolor; ?>">
				<?php if ($show_title == 1){ ?><h4><?php echo $cat->title; ?></h4> <?php } ?>
				<span class="boxhits"><a href="javascript:void(0)" class="vote" id="<?php echo $cat->id; ?>" name="up"><i class="fa fa-heart-o">&nbsp;</i><?php if($show_count==1){ echo $cat->up; } ?></a></span>
			</div>
			<?php } ?>
		</li>
		<?php } ?>	
	</ul>
</div>
<?php if ($show_viewmore == 1){ ?>
	<div class="box1"><div class='aerrow' ><?php //echo $msg; ?><a href="<?php JURI::base(); ?>/rose/index.php?option=com_advportfolio&view=projects&Itemid=<?php echo $itemid; ?>">View More <i class="fa fa-arrow-circle-right">&nbsp;</i></a></div></div>
<?php } ?>				