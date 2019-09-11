<div class="container">
	<section class="tac section-b">
		<div class="section-b-720">
			<?php the_sub_field('values_text'); ?>
		</div>
		
		<div class="section-b-720" >
			<div class="row values__area">
				<?php while ( have_rows('values_grid') ) : the_row(); 
				    $title = get_sub_field('title');
				    $text = get_sub_field('text');
			  	?>
				  	<div class="col-lg-4 col-md-6 values__area-elem">
						<div class="value__box">
							<div class="value__box-info">
								<?php echo $title; ?>
							</div>
							<div class="value__box-hide">
								<?php echo $text; ?>
							</div>
						</div>
					</div>
			  	<?php endwhile; ?>				
			</div>
		</div>
	</section>
</div>