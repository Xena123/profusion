<div class="gray-bg">
	<div class="container">
		<section class="tac section-b">
			<div class="w-746">
				<div class="row b-30">
					<?php while ( have_rows('event_feature') ) : the_row(); 
						$title = get_sub_field('title');
					?>
					<div class="col-lg-6 b30 styled__list equalH4__js">
						<h4><?php echo $title; ?></h4>
						<?php if( have_rows('event_feature_rows') ): ?>
						<ul>
							<?php while ( have_rows('event_feature_rows') ) : the_row(); 
							    $text = get_sub_field('text');
						  	?>
							<li><span><?php echo $text; ?></span></li>
							<?php endwhile; ?>
						</ul>
						<?php endif;?>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
		</section>
	</div>
</div>