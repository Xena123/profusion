<div class="container">
	<section class="tac section-b">
		<div class="section-b-720">
			<?php the_sub_field('partners_text'); ?>
		</div>

		<?php if( have_rows('new_partnersgal') ): ?>
			<div class="b-30 partnersgal owl-carousel">
				<?php while ( have_rows('new_partnersgal') ) : the_row(); 
				    $image = get_sub_field('image');
				    $url = get_sub_field('url');
			  	?>
					<div class="b30">
						<a href="<?php echo $url;?>"><img src="<?php echo $image; ?>" alt=""></a>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</section>
</div>