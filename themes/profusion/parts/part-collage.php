<div class="blue-bg blue-bg__hap">
	<div class="container">
		<div class="row no-gutters happensOut">
			<div class="col-lg-6 col-md-6 order_special">
				<div class="center-hp">
					<div class="center-hp-inner">
						<h4>We make it happen</h4>
						<a href="<?php echo get_permalink('589'); ?>" class="main-btn main-green-btn">Reveal it</a>
					</div>
				</div>
			</div>
			<?php $i = 1; while ( have_rows('collage_rows') ) : the_row(); 
			    $img = get_sub_field('img');
			    $title = get_sub_field('title');
			    $sixword = get_sub_field('sixword');
			    $sixword_hover = get_sub_field('sixword_hover');
			    $button = get_sub_field('button');
		  	?>
		  		<div class="col-xl-3 col-md-6 order_<?php echo $i;?>">
 					<div class="hapen-box bg__cover" style="background-image: url(<?php echo $img['sizes']['contact']; ?>);">
						<div class="hapen-box-info">
							<b><?php echo $title; ?></b>
							<p><?php echo $sixword; ?></p>
						</div>
						<a href="<?php echo $button; ?>" class="hapen-box-hover">
							<div class="hapen-box-hover-inner">
								<div class="cut_content_2">
									<h3><?php echo $title; ?></h3>
									<?php echo $sixword_hover; ?>
								</div>
								<div class="main-btn main-white-btn">Read more</div>
							</div>
						</a>
					</div>
				</div>
		  	<?php $i++; endwhile; ?>
			<?php /*if($cases = get_sub_field('cases')):?>
				<?php $i = 1; foreach( $cases as $post ): ?>
                <?php setup_postdata($post); ?>
	                <div class="col-xl-3 col-md-6 order_<?php echo $i;?>">
	                	<?php $caseimg = wp_get_attachment_image_src( get_post_thumbnail_id(), 'contact'); ?>
						<div class="hapen-box bg__cover" style="background-image: url(<?php echo $caseimg['0']; ?>);">
							<div class="hapen-box-info">
								<b><?php the_title(); ?></b>
								<p><?php the_field('six_word_headline'); ?></p>
							</div>
							<div class="hapen-box-hover">
								<div class="hapen-box-hover-inner">
									<div class="cut_content_2">
										<h3><?php the_title(); ?></h3>
										<?php the_content(); ?>
									</div>
									<a href="<?php the_permalink(); ?>" class="main-btn main-white-btn">Reveal it</a>
								</div>
							</div>
						</div>
					</div>
                <?php $i++; endforeach; ?>
			<?php endif; wp_reset_postdata();*/?>			
		</div>
	</div>
</div>