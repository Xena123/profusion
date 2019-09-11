<div class="blue-bg">
	<div class="container text_slider">
		<h2><?php the_sub_field('textslider_title'); ?></h2>
		<div class="owl-carousel rates-caro rates-js">
			<?php while ( have_rows('textslider') ) : the_row(); 
			    $text = get_sub_field('text');
			    $button = get_sub_field('button');
		  	?>
		  	<div class="rates-caro-elem">							
				<?php echo $text; ?>
				<?php if($button): ?>
					<a href="<?php echo $button['url']; ?>" class="main-btn main-white-btn" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
				<?php endif; ?>
			</div>
		  	<?php endwhile; ?>
		</div>
	</div>
</div>