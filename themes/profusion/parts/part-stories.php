<div class="gray-bg">
	<div class="container">
		<section class="tac section-b">
			<div class="section-b-720">
				<h3><?php the_sub_field('stories_title'); ?></h3>
			</div>
			
			<div class="caro-out-ovh">
				<div class="owl-carousel fusion-carousel fusion-carousel-mb-btns">
					<?php if($cases = get_sub_field('case_studies')):?>
						<?php foreach( $cases as $post ): ?>
		                	<?php setup_postdata($post); ?>
		                	<div class="fusion-carousel-elem">
		                		<?php $caseimg = wp_get_attachment_image_src( get_post_thumbnail_id(), 'contact'); ?>
		                		<div class="hapen-box bg__cover" style="background-color: #d6d6d6; background-image: url(<?php echo $caseimg['0']; ?>);">
                            		<div class="hapen-box-info">
                            			<b><?php the_title(); ?></b>
                            			<p><?php the_field('six_word_headline'); ?></p>
                            		</div>
                            		<a href="<?php the_permalink(); ?>" class="hapen-box-hover">
                            			<div class="hapen-box-hover-inner">
                            				<div class="cut_content">
                                            <h3><?php the_title(); ?></h3>
                            					<?php the_content(); ?>
                            				</div>
                            				<div class="main-btn main-white-btn">Read client story</div>
                            			</div>
                            		</a>
                            	</div>

							</div>
		             	<?php endforeach; ?>
					<?php endif; wp_reset_postdata();?>	
				</div>
			</div>
			<?php if($stories_btn = get_sub_field('stories_btn')): ?>
				<div class="tac for-center-btn">
					<a href="<?php echo $stories_btn['url']; ?>" class="main-btn main-red-btn" target="<?php echo $stories_btn['target']; ?>"><?php echo $stories_btn['title']; ?></a>
				</div>
			<?php endif; ?>
		</section>
	</div>
</div>