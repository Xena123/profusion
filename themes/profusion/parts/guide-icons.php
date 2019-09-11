<div class="gray-bg">
	<div class="container">
		<div class="tac section-b">
			<div class="section-b-720">
				<?php the_sub_field('home_trio_text'); ?>
			</div>
		</div>
		<div class="row justify-content-center t-guide-icons" >
			<?php if( have_rows('home_trio') ): ?>
				<?php while ( have_rows('home_trio') ) : the_row(); 
				    $ico = get_sub_field('ico');
				    $icohover = get_sub_field('icohover');
				    $text = get_sub_field('text');
				    $link = get_sub_field('link');
			 	?>
					<div class="col-12 col-sm-6 col-md-3 b30">
						<div class="data-box">
							<a href="<?php if($link){ echo $link['url'];} ?>" class="data-box-icon">
								<div class="data-box-icon-1">
									<?php if($ico): ?>
										<img src="<?php echo $ico; ?>" alt="">
									<?php endif; ?>
								</div>
								<!-- <div class="data-box-icon-2">
									<?php /*if($icohover): ?>
										<img src="<?php echo $icohover; ?>" alt="">
									<?php endif; */?>
								</div> -->
							</a>
							<div class="data-box-info">
								
								<?php echo $text; ?>
							</div>
						</div>
					</div>
			  	<?php endwhile; ?>
			<?php endif;?>
		</div>
	</div>
</div>