<?php 

/*
Template Name: About 
*/

get_header(); ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

<body class="green__stylers">
  	<div class="b-wrap">
	    <?php include 'parts/part-header.php'; ?>
		
		<main class="b-content">
			<div class="owl-carousel main-slider main-slider__js">
				<div class="main-slider-elem">
					<?php $pageimg = wp_get_attachment_image_src( get_post_thumbnail_id(), 'homeslide'); if($pageimg):?>
						<img src="<?php echo $pageimg['0']; ?>" class="main-slider-img objF" alt="">
					<?php endif; ?>
					<div class="main-slider-inner">
						<div class="container">
							<div class="main-slider-info">
								<div class="page__title"><?php the_title(); ?> / people</div>
								<?php the_content(); ?>							
								<?php if($abutton_1 = get_field('abutton_1')): ?>
									<a href="<?php echo $abutton_1['url']; ?>" class="main-btn main-green-btn" target="<?php echo $abutton_1['target']; ?>"><?php echo $abutton_1['title']; ?></a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container work__area-subNavOut">
				<div class="work__area-subNav">
					<?php if( have_rows('tab_nav') ): ?>
						<ul class="work__area-subNav-inner">
						<?php while ( have_rows('tab_nav') ) : the_row(); 
							$hash = get_sub_field('hash');
							$title = get_sub_field('title');
						?>
							<li><a href="<?php echo $hash; ?>" class="amazing__link"><?php echo $title;?></a></li>
						<?php endwhile; ?>
						</ul>
					<?php endif;?>
				</div>
			</div>
			<div class="container" <?php if($hashid_1 = get_field('hashid_1')){?> id="<?php echo $hashid_1; ?>"<?php }?>>
				<div class="tac section-b">
					<div class="section-b-720">
						<?php the_field('tab_1_text'); ?>
						<?php if($tab_1_text_hidden = get_field('tab_1_text_hidden')): ?>
						<div class="hide_text_more just__text">
							<?php echo $tab_1_text_hidden; ?>
						</div>
						<a href="#" class="main-btn main-green-btn showMoreJs">Read more</a>
						<?php endif; ?>
						
						<?php if($tab_1_video = get_field('tab_1_video')): ?>
						<div class="video__el">
							<?php echo $tab_1_video; ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="gray-bg" <?php if($hashid_2 = get_field('hashid_2')){?> id="<?php echo $hashid_2; ?>"<?php }?>>
				<div class="container">
					<h2><?php the_field('testimonial_slider_title'); ?></h2>
					<div class="owl-carousel testimonal-caro testimon-js">
						<?php while ( have_rows('testimonial_slider') ) : the_row(); 
						    $name = get_sub_field('name');
						    $text = get_sub_field('text');
						    $position = get_sub_field('position');
					  	?>
					  	<div class="testimonal-caro-elem">
							
							<?php echo $text; ?>

							<div class="t-auth"><b><?php echo $name; ?>,</b> <?php echo $position; ?></div>
						</div>
					  	<?php endwhile; ?>
					</div>
				</div>
			</div>

			<div class="container" <?php if($hashid_7 = get_field('hashid_7')){?> id="<?php echo $hashid_7; ?>"<?php }?>>
				<section class="tac section-b">
					<div class="section-b-720">
						<?php the_field('leader_text_2'); ?>
					</div>
				</section>
			</div>
			
			<?php if( have_rows('coach_slider_1') ): ?>
			<div class="owl-carousel main-slider main-slider__js" <?php if($hashid_4 = get_field('hashid_4')){?> id="<?php echo $hashid_4; ?>"<?php }?>>
				<?php while ( have_rows('coach_slider_1') ) : the_row(); 
				    $img = get_sub_field('img');
				    $text = get_sub_field('text');
				    $button = get_sub_field('button');
			  	?>
			  	<div class="main-slider-elem">
			  		<?php if($img): ?>
						<img src="<?php echo $img['sizes']['homeslide']; ?>" class="main-slider-img objF" alt="">
					<?php endif; ?>
					<div class="main-slider-inner">
						<div class="container">
							<div class="main-slider-info">
								<?php echo $text; ?>
								<?php if($button): ?>
									<a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="main-btn main-green-btn scrollToData"><?php echo $button['title']; ?></a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			  	<?php endwhile; ?>				
			</div>
			<?php endif; ?>

			<div class="blue-bg info_sec" <?php if($hashid_5 = get_field('hashid_5')){?> id="<?php echo $hashid_5; ?>"<?php }?>>
				<div class="container">
					<div class="rates-caro-elem">
						<?php the_field('info_text'); ?>
						<?php if($info_btn = get_field('info_btn')): ?>
							<a href="<?php echo $info_btn['url']; ?>" class="main-btn main-white-btn" target="<?php echo $info_btn['target']; ?>"><?php echo $info_btn['title']; ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<div class="gray-bg" <?php if($hashid_6 = get_field('hashid_6')){?> id="<?php echo $hashid_6; ?>"<?php }?>>
				<div class="container">
					<section class="tac section-b">
						<div class="section-b-720">
							<?php the_field('leader_text'); ?>
						</div>
						
						<div class="caro-out-ovh">
							<div class="owl-carousel profile-carousel">
								<?php if($team = get_field('team_members')):?>
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
						<?php if( have_rows('leader_buttons') ): ?>
						<div class="tac for-center-btn">
							<?php while ( have_rows('leader_buttons') ) : the_row(); 
							    $button = get_sub_field('button');
						  	?>
						  		<a href="<?php echo $button['url']; ?>" class="main-btn main-green-btn scrollToData" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
						  	<?php endwhile; ?>
						</div>
						<?php endif;?>
					</section>
				</div>
			</div>
			<div class="container" <?php if($hashid_3 = get_field('hashid_3')){?> id="<?php echo $hashid_3; ?>"<?php }?>>
				<div class="tac section-b">
					<div class="section-b-720">
						<?php the_field('partners_text'); ?>
					</div>
					<?php if($partnersgal = get_field('partnersgal')): ?>
					<div class="b-30 partnersgal owl-carousel">
						<?php foreach( $partnersgal as $partner ): ?>
							<div class="b30">
								<img src="<?php echo $partner['url']; ?>" alt="">
							</div>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="gray-bg" <?php if($hashid_8 = get_field('hashid_8')){?> id="<?php echo $hashid_8; ?>"<?php }?>>
				<div class="container">
					<section class="tac section-b">
						<div class="section-b-720">
							<?php the_field('value_text'); ?>
						</div>
						<?php if( have_rows('values') ): ?>
						<div class="section-b-720">
							<div class="row values__area">
								<?php while ( have_rows('values') ) : the_row(); 
								    $title = get_sub_field('title');
								    $text = get_sub_field('text');
							  	?>
							  		<div class=" col-lg-4 col-md-6 values__area-elem">
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
						<?php endif;?>
					</section>
				</div>
			</div>
			<?php if($after_value_text = get_field('after_value_text')): ?>
			<div class="container" <?php if($hashid_9 = get_field('hashid_9')){?> id="<?php echo $hashid_9; ?>"<?php }?>>
				<section class="tac section-b">
					<div class="section-b-720">
						<?php echo $after_value_text; ?> 
					</div>
				</section>
			</div>
			<?php endif; ?>
			
			<div class="blue-bg info_sec" <?php if($hashid_10 = get_field('hashid_10')){?> id="<?php echo $hashid_10; ?>"<?php }?>>
				<div class="container">
					<div class="rates-caro-elem">
						<?php the_field('coach_text'); ?>
						<?php if($coach_btn = get_field('coach_btn')): ?>
							<a href="<?php echo $coach_btn['url']; ?>" class="main-btn main-white-btn" target="<?php echo $coach_btn['target']; ?>"><?php echo $coach_btn['title']; ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php if( have_rows('coach_slider_2') ): ?>
			<div class="owl-carousel main-slider main-slider__js" <?php if($hashid_11 = get_field('hashid_11')){?> id="<?php echo $hashid_11; ?>"<?php }?>>
				<?php while ( have_rows('coach_slider_2') ) : the_row(); 
				    $img = get_sub_field('img');
				    $text = get_sub_field('text');
			  	?>
			  	<div class="main-slider-elem">
			  		<?php if($img): ?>
						<img src="<?php echo $img['sizes']['homeslide']; ?>" class="main-slider-img objF" alt="">
					<?php endif; ?>
					<div class="main-slider-inner">
						<div class="container">
							<div class="main-slider-info">
								<?php echo $text; ?>
								<?php if( have_rows('buttons_list') ): ?>
								<ul class="btn-list-onDef">
									<?php while ( have_rows('buttons_list') ) : the_row(); 
									    $button = get_sub_field('button');
								  	?>
								  		<li><a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="main-btn main-green-btn"><?php echo $button['title']; ?></a></li>
								  	<?php endwhile; ?>
								</ul>
								<?php endif;?>
							</div>
						</div>
					</div>
				</div>
			  	<?php endwhile; ?>				
			</div>
			<?php endif; ?>	
		</main>          
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>