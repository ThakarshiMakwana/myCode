<?php
defined('_JEXEC') or die;
?>
<div class="category-listing">
	<ul>
		<?php foreach ($categories as $cat){ ?>
		<li>
			<img src="<?php echo JURI::base(); ?>/images/advportfolio/images/<?php echo $cat->thumbnail; ?>">
			<div class="boxdata <?php echo $cat->projectcolor; ?>">
				<h4><?php echo $cat->title; ?></h4> 
			</div>
		</li>
		<?php } ?>	
	</ul>
</div>
				