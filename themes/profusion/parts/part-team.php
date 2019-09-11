<div class="gray-bg" id="leadership">
	<div class="container">
		<section class="tac section-b">
			<div class="section-b-720">
				<?php the_sub_field('team_text'); ?>
			</div>
			
			<div class="caro-out-ovh">
				<div class="owl-carousel profile-carousel">
					<?php if($team = get_sub_field('team_members')):?>
					<?php foreach( $team as $post ): ?>
	                	<?php setup_postdata($post); ?>
	                	<div class="profile-box">
	                		<?php $teamimg = wp_get_attachment_image_src( get_post_thumbnail_id(), 'team'); ?>
							<div class="profile-box__image bg__cover" style="background-image: url(<?php echo $teamimg['0']; ?>);">
								
							</div>
							<?php if(get_field('linkedin') || get_field('headphone_link')): ?>
							<div class="profile-box__social">
								<?php if($linkedin = get_field('linkedin')): ?>
								<a href="<?php echo $linkedin; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/pr-In.svg" alt=""></a>
								<?php endif; ?>
								<?php if($headphone_link = get_field('headphone_link')): ?>
								<a href="<?php echo $headphone_link; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/headPhone.svg" alt=""></a>
								<?php endif; ?>
							</div>
							<?php endif; ?>
							<div class="profile-box__info">
								<div class="profile__name"><?php the_title(); ?></div>
								<div class="profile__j"><?php the_field('posiion'); ?></div>
								<?php the_content(); ?>
								
							</div>
						</div>
	                	<?php endforeach; ?>
					<?php endif; wp_reset_postdata();?>	
				</div>
			</div>
			<?php if( have_rows('team_buttons') ): ?>
			<div class="tac for-center-btn">
				<?php while ( have_rows('team_buttons') ) : the_row(); 
				    $button = get_sub_field('button');
			  	?>
			  		<?php if($button): ?>
			  			<a href="<?php echo $button['url']; ?>" class="main-btn main-blue-btn" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
			  		<?php endif; ?>
			  	<?php endwhile; ?>
			</div>
			<?php endif;?>
		</section>
	</div>
</div>