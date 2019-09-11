<div class="gray-bg">
	<div class="container">
		<div class="tac section-b">
			<div class="section-b-720">
				<h3><?php the_sub_field('vacancies_title'); ?></h3>
			</div>
			<?php if($relatedjobs = get_sub_field('relatedjobs')): ?>
			<div class="row b-10">
				<?php foreach( $relatedjobs as $post ): ?>
                <?php setup_postdata($post); ?>
	                <div class="col-xl-3 col-lg-4 col-md-6 b10">
						<div class="opening__box">
							<h4><?php the_title(); ?></h4>
							<p><?php do_excerpt(get_the_excerpt(), 30); ?></p>
							<a href="<?php the_permalink(); ?>" class="main-btn main-blue-btn">Find out more</a>
						</div>
					</div>
                <?php endforeach; wp_reset_postdata();?>			
			</div>
			<?php endif; ?>
			<div class="tac for-center-btn">
				<?php if($vac_btn = get_sub_field('vac_btn')): ?>
					<a href="<?php echo $vac_btn['url']; ?>" class="main-btn main-blue-btn" target="<?php echo $vac_btn['target']; ?>"><?php echo $vac_btn['title']; ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>