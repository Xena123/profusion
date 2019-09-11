<div class="container">
	<section class="tac section-b">
		<div class="section-b-720">
			<?php the_sub_field('guides_text'); ?>
		</div>
		
		<div class="caro-out-ovh">
			<div class="owl-carousel fusion-carousel">
				<?php if($guides = get_sub_field('set_guides')):?>
					<?php foreach( $guides as $post ): ?>
	                	<?php setup_postdata($post); ?>
	                	<div class="fusion-carousel-elem">
							<a href="<?php the_permalink(); ?>" class="fusion-box">
								<?php $guimg = wp_get_attachment_image_src( get_post_thumbnail_id(), 'guide'); ?>
								<div class="fusion-box-pic bg__cover" style="background-color: #d6d6d6; background-image: url(<?php echo $guimg['0']; ?>);">
									<div class="fusion-box-pic__ico">
									    <img src="/wp-content/uploads/2018/10/t-guide.svg" alt="">
										
									</div>
								</div>
								<div class="fusion-box-info">
									<div class="fusion-box-info-title">
										Guide
									</div>
									<p><?php the_title(); ?></p>

									<time class="f-time" datetime="<?php echo get_the_date('j-m-y'); ?>">
										<?php echo get_the_date('j.m.y'); ?> / 
										<?php 
											$term_obj_list = get_the_terms( $post->ID, 'services' );
											$terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
											echo $terms_string;
										?> 
									</time>
								</div>
							</a>
						</div>
            		<?php endforeach; ?>
				<?php endif; wp_reset_postdata();?>	
			</div>
		</div>
		<?php if($guides_btn = get_sub_field('guides_btn')): ?>
			<div class="tac for-center-btn">
				<a href="<?php echo $guides_btn['url']; ?>" class="main-btn main-red-btn" target="<?php echo $guides_btn['target']; ?>"><?php echo $guides_btn['title']; ?></a>
			</div>
		<?php endif; ?>
	</section>
</div>