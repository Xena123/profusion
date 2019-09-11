<?php get_header(); ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
	<?php $author_id = get_the_author_meta('ID'); ?>
<body class="blog-page">
  	<div class="b-wrap">
	    <?php include 'parts/part-header.php'; ?>
		
		<main class="b-content">
			<div class="owl-carousel main-slider main-slider__js">
				<div class="main-slider-elem">
					<?php $pageimg = wp_get_attachment_image_src( get_post_thumbnail_id(), 'homeslide'); if($pageimg):?>
						<img src="<?php echo $pageimg['0']; ?>" class="main-slider-img" alt="">
					<?php endif; ?>
					<div class="main-slider-inner">
						<div class="container">
							<div class="main-slider-info"></div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container">
				<div class="section-b">
					<div class="section-b-740">
						<div class="blog-detail just__text">
                        <ul class="list share__list blog-det-sh-01">
									<li>
										<a href="<?php echo get_permalink('1818'); ?>" class="main-btn main-black-btn main-btn-short-circle">						
											<svg width="21px" height="14px" viewBox="0 0 21 14">
											    <g class="bbl"  stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											        <path d="M4.351,9.345 L4.351,13.719 L8.264,7.683 C8.946,6.869 9.357,5.821 9.357,4.677 C9.357,2.094 7.263,0 4.678,0 C2.095,0 0,2.094 0,4.677 C0,7.151 1.92,9.178 4.351,9.345" id="Fill-5" fill="#FFFFFF"></path>
											        <path d="M15.8667,13.719 L19.7797,7.683 C20.4617,6.869 20.8727,5.821 20.8727,4.677 C20.8727,2.094 18.7787,0 16.1937,0 C13.6107,0 11.5157,2.094 11.5157,4.677 C11.5157,7.151 13.4357,9.178 15.8667,9.345 L15.8667,13.719 Z" id="Fill-7" fill="#FFFFFF"></path>
											    </g>
											</svg>
										</a>
									</li>
									<li>
										<a href="javascript:;" class="main-btn main-black-btn main-btn-short-circle share_js">					
											<svg width="23px" height="26px" viewBox="0 0 23 26" >
											    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											        <g id="ss" fill="#ffffff" fill-rule="nonzero">
											            <path d="M18.2,24.3 C16.6,24.3 15.3,23 15.3,21.4 C15.3,19.8 16.6,18.5 18.2,18.5 C19.8,18.5 21.1,19.8 21.1,21.4 C21.1,23 19.8,24.3 18.2,24.3 M4.4,15.6 C2.8,15.6 1.5,14.3 1.5,12.7 C1.5,11.1 2.8,9.8 4.4,9.8 C6,9.8 7.3,11.1 7.3,12.7 C7.3,14.3 6,15.6 4.4,15.6 M18.2,1.5 C19.8,1.5 21.1,2.8 21.1,4.4 C21.1,6 19.8,7.3 18.2,7.3 C16.6,7.3 15.3,6 15.3,4.4 C15.3,2.8 16.6,1.5 18.2,1.5 M18.2,17 C17,17 15.9,17.5 15.1,18.3 L8.5,14.5 C8.7,14 8.8,13.4 8.8,12.8 C8.8,12.2 8.7,11.7 8.5,11.2 L14.6,7 C15.4,8.1 16.7,8.8 18.2,8.8 C20.6,8.8 22.6,6.8 22.6,4.4 C22.6,2 20.6,0 18.2,0 C15.8,0 13.8,2 13.8,4.4 C13.8,4.8 13.9,5.2 14,5.6 L7.7,9.9 C6.9,9 5.7,8.4 4.4,8.4 C2,8.3 0,10.3 0,12.7 C0,15.1 2,17.1 4.4,17.1 C5.7,17.1 6.8,16.5 7.6,15.7 L14.2,19.5 C13.9,20.1 13.8,20.7 13.8,21.4 C13.8,23.8 15.8,25.8 18.2,25.8 C20.6,25.8 22.6,23.8 22.6,21.4 C22.6,19 20.6,17 18.2,17" ></path>
											        </g>
											    </g>
											</svg>
										</a>
										<div class="sub__share">
											<ul class="sub__share--list">
												<li><a href="https://api.addthis.com/oexchange/0.8/forward/email/offer?url=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/mail.svg" alt=""></a></li>
												<li><a href="https://api.addthis.com/oexchange/0.8/forward/linkedin/offer?url=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/in.svg" alt=""></a></li>
												<li><a href="https://api.addthis.com/oexchange/0.8/forward/twitter/offer?url=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/tw.svg" alt=""></a></li>
												<li><a href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg" alt=""></a></li>
											</ul>
										</div>
									</li>
									
								</ul>
							<div class="blog-detail-head">
								
								<h1><?php the_title(); ?></h1>
								<?php the_content(); ?>	
								
							</div>
							<?php while ( have_rows('flexible_blog') ) : the_row();
								if( get_row_layout() == 'blog_text' ) {
								  include(locate_template('parts/blog-text.php'));
								}
								if( get_row_layout() == 'blog_imagecap' ) {
								  include(locate_template('parts/blog-image.php'));
								}
								if( get_row_layout() == 'blog_gallery' ) {
								  include(locate_template('parts/blog-gallery.php'));
								}
								if( get_row_layout() == 'blog_singleimage' ) {
								  include(locate_template('parts/blog-singleimage.php'));
								}
							endwhile; ?>
							
							<?php echo do_shortcode('[mr_rating_form]'); ?>
							<ul class="list share__list t_icons_margin">
								<li>
									<a href="<?php echo get_permalink('1818'); ?>" class="main-btn main-black-btn main-btn-short-circle">						
										<svg width="21px" height="14px" viewBox="0 0 21 14">
										    <g class="bbl"  stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										        <path d="M4.351,9.345 L4.351,13.719 L8.264,7.683 C8.946,6.869 9.357,5.821 9.357,4.677 C9.357,2.094 7.263,0 4.678,0 C2.095,0 0,2.094 0,4.677 C0,7.151 1.92,9.178 4.351,9.345" id="Fill-5" fill="#FFFFFF"></path>
										        <path d="M15.8667,13.719 L19.7797,7.683 C20.4617,6.869 20.8727,5.821 20.8727,4.677 C20.8727,2.094 18.7787,0 16.1937,0 C13.6107,0 11.5157,2.094 11.5157,4.677 C11.5157,7.151 13.4357,9.178 15.8667,9.345 L15.8667,13.719 Z" id="Fill-7" fill="#FFFFFF"></path>
										    </g>
										</svg>
									</a>
								</li>
								<li>
									<a href="javascript:;" class="main-btn main-black-btn main-btn-short-circle share_js">					
										<svg width="23px" height="26px" viewBox="0 0 23 26" >
										    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										        <g id="ss" fill="#ffffff" fill-rule="nonzero">
										            <path d="M18.2,24.3 C16.6,24.3 15.3,23 15.3,21.4 C15.3,19.8 16.6,18.5 18.2,18.5 C19.8,18.5 21.1,19.8 21.1,21.4 C21.1,23 19.8,24.3 18.2,24.3 M4.4,15.6 C2.8,15.6 1.5,14.3 1.5,12.7 C1.5,11.1 2.8,9.8 4.4,9.8 C6,9.8 7.3,11.1 7.3,12.7 C7.3,14.3 6,15.6 4.4,15.6 M18.2,1.5 C19.8,1.5 21.1,2.8 21.1,4.4 C21.1,6 19.8,7.3 18.2,7.3 C16.6,7.3 15.3,6 15.3,4.4 C15.3,2.8 16.6,1.5 18.2,1.5 M18.2,17 C17,17 15.9,17.5 15.1,18.3 L8.5,14.5 C8.7,14 8.8,13.4 8.8,12.8 C8.8,12.2 8.7,11.7 8.5,11.2 L14.6,7 C15.4,8.1 16.7,8.8 18.2,8.8 C20.6,8.8 22.6,6.8 22.6,4.4 C22.6,2 20.6,0 18.2,0 C15.8,0 13.8,2 13.8,4.4 C13.8,4.8 13.9,5.2 14,5.6 L7.7,9.9 C6.9,9 5.7,8.4 4.4,8.4 C2,8.3 0,10.3 0,12.7 C0,15.1 2,17.1 4.4,17.1 C5.7,17.1 6.8,16.5 7.6,15.7 L14.2,19.5 C13.9,20.1 13.8,20.7 13.8,21.4 C13.8,23.8 15.8,25.8 18.2,25.8 C20.6,25.8 22.6,23.8 22.6,21.4 C22.6,19 20.6,17 18.2,17" ></path>
										        </g>
										    </g>
										</svg>
									</a>
									<div class="sub__share">
										<ul class="sub__share--list">
											<li><a href="https://api.addthis.com/oexchange/0.8/forward/email/offer?url=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/mail.svg" alt=""></a></li>
											<li><a href="https://api.addthis.com/oexchange/0.8/forward/linkedin/offer?url=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/in.svg" alt=""></a></li>
											<li><a href="https://api.addthis.com/oexchange/0.8/forward/twitter/offer?url=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/tw.svg" alt=""></a></li>
											<li><a href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg" alt=""></a></li>
										</ul>
									</div>
								</li>
								<li>
									<a href="javascript:;" class="main-btn main-black-btn main-btn-short-circle" id="gocomment">						
										<svg class="posico" width="21px" height="20.8px" viewBox="0 0 21 20.8">
											<path class="auth-text-ico" d="M10.3,16.4l-4.7,3.8v-3.8H4.3c-2.2,0-4-1.8-4-4V4.3c0-2.2,1.8-4,4-4h12.4c2.2,0,4,1.8,4,4v8.1c0,2.2-1.8,4-4,4
											H10.3z M5.4,9.5h10.3v0.8H5.4V9.5z M5.4,6.2h10.3V7H5.4V6.2z M6.5,18.5l3.6-2.9h6.7c1.8,0,3.2-1.5,3.2-3.2V4.3
											c0-1.8-1.5-3.2-3.2-3.2H4.3c-1.8,0-3.2,1.5-3.2,3.2v8.1c0,1.8,1.5,3.2,3.2,3.2h2.2V18.5z"/>
										</svg>
										</svg>
									</a>
								</li>
								<li>
									<a href="javascript:;" class="main-btn main-black-btn main-btn-short-circle" id="openrating">						
										<svg class="posico posico-s" width="23.7px" height="21.7px" viewBox="0 0 23.7 21.7">
											<polygon class="poly-star" points="11.8,1.6 14.7,8.2 22.1,8.8 16.5,13.4 18.2,20.4 11.8,16.6 5.5,20.4 7.2,13.4 1.6,8.8 9,8.2 "/>
										</svg>
										</svg>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<?php if($set_author = get_field('set_author')): ?>	
				<?php $i = 1; foreach( $set_author as $post ): 
					setup_postdata($post); 
					if($i>1){
						break;
					}
				?>			
					<div class="blog-detail-auth">
						<div class="container">
							<div class="section-b">
								<div class="section-b-740 jusr__text">
									<div class="row">
										<div class="col-12 col-md-3">
											<?php if($pageimg = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail')): ?>
												<img src="<?php echo $pageimg[0]; ?>" alt="" class="auth_image">
											<?php endif; ?>
										</div>
										<div class="col-12 col-md-9">
											<h3>Author</h3>							
											<h4><?php the_title(); ?></h4>
											<?php the_content(); ?>
											
											
											
											<p></p>
											<ul class="list social__list-footer">
												<?php if($email = get_field('email')): ?>
												<li><a href="mailto:<?php echo $email; ?>">
													<svg width="25.6px" height="17.3px" viewBox="0 0 25.6 17.3" style="enable-background:new 0 0 25.6 17.3;"
														 xml:space="preserve">
														<path class="social__icoS" d="M12.5,9.7L1.1,0h23.4L13.1,9.7C12.9,9.8,12.7,9.8,12.5,9.7z"/>
														<polygon class="social__icoS" points="2.1,14.4 0,16.2 0,1.1 8.9,8.7 	"/>
														<path class="social__icoS" d="M21.5,14.7l3.1,2.6H1.1l3.4-2.9l5.6-4.7l1.5,1.2l0.9,0.8c0.2,0.1,0.4,0.1,0.6,0l0.9-0.8l1.5-1.3L21.5,14.7z"/>
														<polygon class="social__icoS" points="25.6,1.1 25.6,16.1 24,14.7 16.8,8.6 	"/>
													</svg>
												</a></li>
                                                <?php endif; ?>
												<?php if($user_linkedin = get_field('user_linkedin')): ?>
												<li>
													<a href="<?php echo $user_linkedin; ?>" target="_blank">
														<svg width="19.3px" height="19px" viewBox="0 0 19.3 19" style="enable-background:new 0 0 19.3 19;"
															 xml:space="preserve">
														<path class="social__icoS" d="M0.3,6.3h4V19h-4V6.3z M2.3,0c1.3,0,2.3,1,2.3,2.3c0,1.3-1,2.3-2.3,2.3C1,4.6,0,3.5,0,2.3C0,1,1,0,2.3,0"/>
														<path class="social__icoS" d="M6.8,6.3h3.8V8h0.1c0.5-1,1.8-2,3.8-2c4.1,0,4.8,2.6,4.8,6V19h-4v-6.2c0-1.5,0-3.4-2.1-3.4c-2.1,0-2.4,1.6-2.4,3.2V19h-4
															V6.3z"/>
														</svg>
													</a>
												</li>
												<?php endif; ?>
												<?php if($user_twitter = get_field('user_twitter')): ?>
												<li>
													<a href="<?php echo $user_twitter; ?>" target="_blank">								<svg width="24px" height="19.3px" viewBox="0 0 24 19.3" style="enable-background:new 0 0 24 19.3;"
															 xml:space="preserve">
														<path id="XMLID_1_" class="social__icoS" d="M23.9,2.4c-0.8,0.3-1.7,0.6-2.6,0.7c1-0.6,1.7-1.4,2.1-2.5c0-0.1,0-0.1-0.1-0.1
															c-0.9,0.5-1.9,0.9-3,1.1C19.4,0.6,18.1,0,16.7,0c-2.7,0-5,2.2-5,4.9c0,0.4,0,0.8,0.1,1.1C7.8,5.8,4.1,3.9,1.7,0.9c0,0,0,0,0,0
															C1.2,1.6,1,2.5,1,3.3c0,1.7,0.8,3.1,2.1,4c0,0,0,0.1,0,0.1C2.4,7.4,1.6,7.1,1,6.8c0,0,0,0,0,0C1,7,1.1,8,1.3,8.6
															c0.6,1.5,2,2.7,3.6,3c-0.4,0.1-0.9,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0,0,0,0,0,0c0.6,1.9,2.4,3.3,4.5,3.3c0,0,0,0,0,0.1
															c-1.7,1.3-3.8,2-6.1,2c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.6,2.2c3.9,0,7-1.3,9.3-3.3c2.3-2,3.8-4.8,4.5-7.6
															c0.2-1,0.3-2,0.3-2.9c0-0.2,0-0.4,0-0.6c0.9-0.6,1.7-1.4,2.3-2.3C24,2.4,24,2.4,23.9,2.4z"/>
														</svg>
													</a>
												</li>
												<?php endif; ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php $i++; endforeach; ?>
			<?php endif; wp_reset_postdata();?>
		
			<div class="blog-detail-comments" id="comments">
				<div class="container">
					<div class="section-b">
						<div class="section-b-740">
							<div class="comments-title">
								<div class="comments-title-inner">Comments</div> <span>(<?php comments_number('0', '1' , '%'); ?>)</span>
							</div>
							<p>View more recent postings</p>
							<a href="#" class="main-btn main-green-btn add-comment">+ Add comment</a>

							<div class="coments-area">
								<?php comments_template(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php if($relatedblogs = get_field('relatedblogs')): ?>
			<div class="other__blogs">
				<div class="container">
					<div class="section-b-740 just__text">
						<h2>Related blogs</h2>
						<p><b>View more recent postings</b></p>
					</div>

					<div class="row b-30 blog-area-row">
						<?php $i = 1; foreach( $relatedblogs as $post ): ?>
                			<?php setup_postdata($post); ?>
                			<?php if(($i > 2)){
            					$class = 'col-lg-4';
                			}else{
            					$class = 'col-lg-6';
                			}?>
                			<div class="<?php echo $class; ?> col-md-6 b30 blog-area-row-elem">
								<a href="<?php the_permalink(); ?>" class="blog__elem big-blog">
			                      <div class="blog__elem-img">
			                       <?php the_post_thumbnail('blog');?>
			                      </div>
			                      <div class="blog__elem-info">
			                        <div class="blog__elem-info-inner">
			                        	<?php 
										$cats = get_the_terms( $post->ID, 'category' );
										$catslugs = join(' ', wp_list_pluck($cats, 'slug')); 
										$catnames = join(' | ', wp_list_pluck($cats, 'name')); 
										?> 
			                          <div class="blog__elem-cat_name"><?php echo $catnames; ?></div>
			                          <h3><?php the_title(); ?></h3>
			                          <?php the_excerpt(); ?>
			                        </div>
			                        <div class="blog__elem-info-footer">
			                          <p class="auth-bl"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> / <?php the_author_meta( 'display_name' ); ?></p>
			                          <div class="blog__elem-info-rait">
			                            <div class="comment_count">
			                              <i class="comment-ico"></i>
			                              <span><?php comments_number('0', '1' , '%'); ?></span>
			                            </div>
			                            <div class="star-count">
			                              <i class="star-ico"></i>
			                              <span><?php echo do_shortcode('[mr_rating_result]');?></span>
			                            </div>
			                          </div>
			                        </div>
			                      </div>
			                    </a>
							</div>
            			<?php $i++; endforeach; ?>
						
					</div>
				</div>
			</div>
			<?php endif; ?>
		</main>
		         
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>