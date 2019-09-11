<div class="gray-bg">
	<div class="container">
		<section class="tac section-b">
			<div class="w-746">
				<div class="tac section-b">
					<h3><?php the_sub_field('feature_title'); ?></h3>
				</div>
				<div class="row">
					<?php while ( have_rows('list_wrap') ) : the_row();?>
					<div class="col-lg-6 styled__list equalH4__js perks__column">
						<ul>
							<?php while ( have_rows('list') ) : the_row(); 
							    $text = get_sub_field('text');
						  	?>
						  		<li><span><?php echo $text; ?></span></li>
							<?php endwhile; ?>
						</ul>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
		</section>
	</div>
</div>