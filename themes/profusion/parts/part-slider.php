<div class="owl-carousel main-slider main-slider__js">
	<?php while ( have_rows('home_slider') ) : the_row(); 
	    $img = get_sub_field('img');
	    $text = get_sub_field('text');
	    $button = get_sub_field('button');
  	?>
  	<div class="main-slider-elem">
  		<?php if($img): ?>
			<img src="<?php echo $img['sizes']['homeslide']; ?>" class="main-slider-img objF" alt="">
		<?php endif; ?>
		<div class="main-slider-inner">
			<div class="container">
				<div class="main-slider-info">
					<?php echo $text; ?>
					<?php if($button): ?>
						<a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="main-btn main-green-btn"><?php echo $button['title']; ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
  	<?php endwhile; ?>				
</div>