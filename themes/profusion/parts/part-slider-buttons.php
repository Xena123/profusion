
<div class="owl-carousel main-slider main-slider__js">
	<?php while ( have_rows('coach_slider_2') ) : the_row(); 
	    $img = get_sub_field('img');
	    $text = get_sub_field('text');
  	?>
  	<div class="main-slider-elem">
  		<?php if($img): ?>
			<img src="<?php echo $img['sizes']['homeslide']; ?>" class="main-slider-img objF" alt="">
		<?php endif; ?>
		<div class="main-slider-inner">
			<div class="container">
				<div class="main-slider-info">
					<?php echo $text; ?>
					<?php if( have_rows('buttons_list') ): ?>
					<ul class="btn-list-onDef">
						<?php while ( have_rows('buttons_list') ) : the_row(); 
						    $button = get_sub_field('button');
					  	?>
					  		<li><a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="main-btn main-blue-btn"><?php echo $button['title']; ?></a></li>
					  	<?php endwhile; ?>
					</ul>
					<?php endif;?>
				</div>
			</div>
		</div>
	</div>
  	<?php endwhile; ?>				
</div>
