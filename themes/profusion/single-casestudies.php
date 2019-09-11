<?php get_header(); ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

<body class="orange__stylers special-case">
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
								<div class="page__title"></div>
								<?php if($altertitle = get_field('alter_title')): ?>
									<h2><?php echo $altertitle; ?></h2>
								<?php else: ?>
									<h2><?php the_title(); ?></h2>
								<?php endif; ?>
								<?php the_content(); ?>
								
								<ul class="list share__list">
									<li>
										<a href="javascript:;" class="main-btn main-red-btn main-btn-short-circle share_js">					
											<svg width="23px" height="26px" viewBox="0 0 23 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
											    <title>Slice 1</title>
											    <desc>Created with Sketch.</desc>
											    <defs></defs>
											    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											        <g id="ss" fill="#ffffff" fill-rule="nonzero">
											            <path d="M18.2,24.3 C16.6,24.3 15.3,23 15.3,21.4 C15.3,19.8 16.6,18.5 18.2,18.5 C19.8,18.5 21.1,19.8 21.1,21.4 C21.1,23 19.8,24.3 18.2,24.3 M4.4,15.6 C2.8,15.6 1.5,14.3 1.5,12.7 C1.5,11.1 2.8,9.8 4.4,9.8 C6,9.8 7.3,11.1 7.3,12.7 C7.3,14.3 6,15.6 4.4,15.6 M18.2,1.5 C19.8,1.5 21.1,2.8 21.1,4.4 C21.1,6 19.8,7.3 18.2,7.3 C16.6,7.3 15.3,6 15.3,4.4 C15.3,2.8 16.6,1.5 18.2,1.5 M18.2,17 C17,17 15.9,17.5 15.1,18.3 L8.5,14.5 C8.7,14 8.8,13.4 8.8,12.8 C8.8,12.2 8.7,11.7 8.5,11.2 L14.6,7 C15.4,8.1 16.7,8.8 18.2,8.8 C20.6,8.8 22.6,6.8 22.6,4.4 C22.6,2 20.6,0 18.2,0 C15.8,0 13.8,2 13.8,4.4 C13.8,4.8 13.9,5.2 14,5.6 L7.7,9.9 C6.9,9 5.7,8.4 4.4,8.4 C2,8.3 0,10.3 0,12.7 C0,15.1 2,17.1 4.4,17.1 C5.7,17.1 6.8,16.5 7.6,15.7 L14.2,19.5 C13.9,20.1 13.8,20.7 13.8,21.4 C13.8,23.8 15.8,25.8 18.2,25.8 C20.6,25.8 22.6,23.8 22.6,21.4 C22.6,19 20.6,17 18.2,17" ></path>
											        </g>
											    </g>
											</svg>
										</a>
										<div class="sub__share">
											<ul class="sub__share--list">
												<li><a href="https://api.addthis.com/oexchange/0.8/forward/email/offer?url=<?php the_permalink();?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/mail.svg" alt=""></a></li>
												<li><a href="https://api.addthis.com/oexchange/0.8/forward/linkedin/offer?url=<?php the_permalink();?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/in.svg" alt=""></a></li>
												<li><a href="https://api.addthis.com/oexchange/0.8/forward/twitter/offer?url=<?php the_permalink();?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/tw.svg" alt=""></a></li>
												<li><a href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=<?php the_permalink();?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg" alt=""></a></li>
											</ul>
										</div>
									</li>
									<li>
										<a href="javascript:;" class="main-btn main-red-btn main-btn-short-circle share_js">					
											<svg width="24px" height="23px" viewBox="0 0 24 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
											    <title>Slice 1</title>
											    <desc>Created with Sketch.</desc>
											    <defs></defs>
											    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											        <g id="dw" fill="#ffffff" fill-rule="nonzero">
											            <path d="M22.1,22.3 L1.6,22.3 C0.7,22.3 0,21.6 0,20.7 L0,15.6 C0,15.2 0.3,14.9 0.7,14.9 C1.1,14.9 1.4,15.2 1.4,15.6 L1.4,20.7 C1.4,20.7 1.4,20.8 1.5,20.8 L22,20.8 C22.1,20.8 22.1,20.8 22.1,20.7 L22.1,15.6 C22.1,15.2 22.4,14.9 22.8,14.9 C23.2,14.9 23.5,15.2 23.5,15.6 L23.5,20.7 C23.7,21.6 23,22.3 22.1,22.3" ></path>
											            <path d="M11.9,15.2 C11.5,15.2 11.2,14.9 11.2,14.5 L11.2,0.7 C11.2,0.3 11.5,0 11.9,0 C12.3,0 12.6,0.3 12.6,0.7 L12.6,14.4 C12.6,14.9 12.3,15.2 11.9,15.2" ></path>
											            <path d="M11.9,16.7 C11.7,16.7 11.5,16.6 11.4,16.5 L5,10.1 C4.7,9.8 4.7,9.3 4.9,9 C5.1,8.7 5.7,8.7 6,9 L11.9,14.9 L17.7,9 C18,8.7 18.5,8.7 18.8,9 C19.1,9.3 19.1,9.8 18.8,10.1 L12.4,16.5 C12.3,16.6 12.1,16.7 11.9,16.7" ></path>
											        </g>
											    </g>
											</svg>
										</a>
										<div class="sub__share">
											<ul class="sub__share--list">
												<?php if($file_to_download = get_field('file_to_download')): ?>
													<li>
														<a href="<?php echo $file_to_download; ?>" target="_blank" download><img src="<?php echo get_template_directory_uri(); ?>/img/mac.svg" alt=""></a>
													</li>
												<?php endif; ?>
												<?php if($file_to_download_mob = get_field('file_to_download_mob')): ?>
													<li>
														<a href="<?php echo $file_to_download_mob; ?>" target="_blank" download><img src="<?php echo get_template_directory_uri(); ?>/img/tablet.svg" alt=""></a>
													</li>
												<?php endif; ?>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include 'flexible-guide.php'; ?>
			<div class="container">
				<div class="w-750 w-750-flex">
					<div class="w-750-flex__elem prev_next_link">
						<?php previous_post_link('%link'); ?>  
					</div>
					<div class="w-750-flex__elem prev_next_link">
						<?php next_post_link('%link'); ?> 
					</div>


					<ul class="list share__list">
						<li>
							<a href="javascript:;" class="main-btn main-red-btn main-btn-short-circle share_js">					
								<svg width="23px" height="26px" viewBox="0 0 23 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								    <title>Slice 1</title>
								    <desc>Created with Sketch.</desc>
								    <defs></defs>
								    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        <g id="ss" fill="#ffffff" fill-rule="nonzero">
								            <path d="M18.2,24.3 C16.6,24.3 15.3,23 15.3,21.4 C15.3,19.8 16.6,18.5 18.2,18.5 C19.8,18.5 21.1,19.8 21.1,21.4 C21.1,23 19.8,24.3 18.2,24.3 M4.4,15.6 C2.8,15.6 1.5,14.3 1.5,12.7 C1.5,11.1 2.8,9.8 4.4,9.8 C6,9.8 7.3,11.1 7.3,12.7 C7.3,14.3 6,15.6 4.4,15.6 M18.2,1.5 C19.8,1.5 21.1,2.8 21.1,4.4 C21.1,6 19.8,7.3 18.2,7.3 C16.6,7.3 15.3,6 15.3,4.4 C15.3,2.8 16.6,1.5 18.2,1.5 M18.2,17 C17,17 15.9,17.5 15.1,18.3 L8.5,14.5 C8.7,14 8.8,13.4 8.8,12.8 C8.8,12.2 8.7,11.7 8.5,11.2 L14.6,7 C15.4,8.1 16.7,8.8 18.2,8.8 C20.6,8.8 22.6,6.8 22.6,4.4 C22.6,2 20.6,0 18.2,0 C15.8,0 13.8,2 13.8,4.4 C13.8,4.8 13.9,5.2 14,5.6 L7.7,9.9 C6.9,9 5.7,8.4 4.4,8.4 C2,8.3 0,10.3 0,12.7 C0,15.1 2,17.1 4.4,17.1 C5.7,17.1 6.8,16.5 7.6,15.7 L14.2,19.5 C13.9,20.1 13.8,20.7 13.8,21.4 C13.8,23.8 15.8,25.8 18.2,25.8 C20.6,25.8 22.6,23.8 22.6,21.4 C22.6,19 20.6,17 18.2,17" ></path>
								        </g>
								    </g>
								</svg>
							</a>
							<div class="sub__share">
								<ul class="sub__share--list">
									<li><a href="https://api.addthis.com/oexchange/0.8/forward/email/offer?url=<?php the_permalink();?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/mail.svg" alt=""></a></li>
									<li><a href="https://api.addthis.com/oexchange/0.8/forward/linkedin/offer?url=<?php the_permalink();?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/in.svg" alt=""></a></li>
									<li><a href="https://api.addthis.com/oexchange/0.8/forward/twitter/offer?url=<?php the_permalink();?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/tw.svg" alt=""></a></li>
									<li><a href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=<?php the_permalink();?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg" alt=""></a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="javascript:;" class="main-btn main-red-btn main-btn-short-circle share_js">					
								<svg width="24px" height="23px" viewBox="0 0 24 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								    <title>Slice 1</title>
								    <desc>Created with Sketch.</desc>
								    <defs></defs>
								    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        <g id="dw" fill="#ffffff" fill-rule="nonzero">
								            <path d="M22.1,22.3 L1.6,22.3 C0.7,22.3 0,21.6 0,20.7 L0,15.6 C0,15.2 0.3,14.9 0.7,14.9 C1.1,14.9 1.4,15.2 1.4,15.6 L1.4,20.7 C1.4,20.7 1.4,20.8 1.5,20.8 L22,20.8 C22.1,20.8 22.1,20.8 22.1,20.7 L22.1,15.6 C22.1,15.2 22.4,14.9 22.8,14.9 C23.2,14.9 23.5,15.2 23.5,15.6 L23.5,20.7 C23.7,21.6 23,22.3 22.1,22.3" ></path>
								            <path d="M11.9,15.2 C11.5,15.2 11.2,14.9 11.2,14.5 L11.2,0.7 C11.2,0.3 11.5,0 11.9,0 C12.3,0 12.6,0.3 12.6,0.7 L12.6,14.4 C12.6,14.9 12.3,15.2 11.9,15.2" ></path>
								            <path d="M11.9,16.7 C11.7,16.7 11.5,16.6 11.4,16.5 L5,10.1 C4.7,9.8 4.7,9.3 4.9,9 C5.1,8.7 5.7,8.7 6,9 L11.9,14.9 L17.7,9 C18,8.7 18.5,8.7 18.8,9 C19.1,9.3 19.1,9.8 18.8,10.1 L12.4,16.5 C12.3,16.6 12.1,16.7 11.9,16.7" ></path>
								        </g>
								    </g>
								</svg>
							</a>
							<div class="sub__share">
								<ul class="sub__share--list">
									<?php if($file_to_download = get_field('file_to_download')): ?>
									<li><a href="<?php echo $file_to_download; ?>" target="_blank" download><img src="<?php echo get_template_directory_uri(); ?>/img/mac.svg" alt=""></a></li>
									<?php endif; ?>
									<?php if($file_to_download_mob = get_field('file_to_download_mob')): ?>
									<li><a href="<?php echo $file_to_download_mob; ?>" target="_blank" download><<img src="<?php echo get_template_directory_uri(); ?>/img/tablet.svg" alt=""></a></li>
									<?php endif; ?>
								</ul>
							</div>
						</li>

					</ul>
				</div>
			</div>
			<div class="container">
				<section class="tac section-b">
					<div class="section-b-720">
						<h3><?php the_field('client_stories_title'); ?></h3>
					</div>
					
					<div class="caro-out-ovh">
						<div class="owl-carousel fusion-carousel fusion-carousel-mb-btns">
							<?php 
							$thisid = get_the_ID();
							$custom_args = array(
							  'post_type' => 'casestudies',
							  'posts_per_page' => 10,
							  'post__not_in' => array($thisid),
							  // 'order' => 'ASC',
							);
							$custom_query = new WP_Query( $custom_args ); ?>
							<?php if ( $custom_query->have_posts() ) : ?>
							<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
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
							<?php endwhile; ?>
							<?php endif; wp_reset_postdata(); ?> 
						</div>
					</div>

					<div class="tac for-center-btn">
						<a href="<?php echo get_permalink('589'); ?>#casestudies" class="main-btn main-red-btn">View more client stories</a>
					</div>
				</section>
			</div>
			<div class="blue-bg info_sec">
				<div class="container">
					<div class="rates-caro-elem">
						<?php the_field('info_section_text'); ?>
						<?php if($info_section_btn = get_field('info_section_btn')): ?>
							<a href="<?php echo $info_section_btn['url']; ?>" class="main-btn main-white-btn" target="<?php echo $info_section_btn['target']; ?>"><?php echo $info_section_btn['title']; ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
			
		</main>

	


    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>