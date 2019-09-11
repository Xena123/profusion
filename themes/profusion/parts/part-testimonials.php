<div class="transparent-bg">
	<div class="container">
		<h2><?php the_sub_field('testimonial_slider_title'); ?></h2>
		<div class="owl-carousel testimonal-caro testimon-js">
			<?php while ( have_rows('testimonial_slider') ) : the_row(); 
			    $name = get_sub_field('name');
			    $text = get_sub_field('text');
			    $position = get_sub_field('position');
		  	?>
		  	<div class="testimonal-caro-elem">
				
				<?php echo $text; ?>

				<div class="t-auth"><b><?php echo $name; ?>,</b> <?php echo $position; ?></div>
			</div>
		  	<?php endwhile; ?>
		</div>
	</div>
</div>