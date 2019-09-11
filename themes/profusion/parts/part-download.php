<div class="gray-bg">
	<div class="container">
		<section class="tac section-b">
			<div class="section-b-720">
				<?php the_sub_field('download_text_1'); ?>
			</div>

			<div class="white-bg art-quest">
				<div class="row b-30 justify-content-between align-items-center">
					<div class="col-xl-8 col-12 b30 tac">
						
						<?php if($image = get_sub_field('download_image')): ?>
							<img src="<?php echo $image; ?>" alt="">
						<?php endif; ?>
					</div>
					<div class="col-xl-auto col-12 b30">
						<article class="prf-article">
							<?php the_sub_field('download_text_2'); ?>
							<div class="row b-30 no-gutters">
								<div class="col-5 b30">
									<div class="row no-gutters fbt-out">
										<div class="col-auto fbt">
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
										</div>
										<div class="col-auto fbt">
											
											<!-- <a href="<?php echo $download_file; ?>" class="main-btn main-red-btn main-btn-short-circle">
												
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
											</a> -->
											
												<a href="javascript:;" class="main-btn main-red-btn main-btn-short-circle dw_js">
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
														<?php if($download_file = get_sub_field('download_file')): ?>
														<li>															
															<a href="<?php echo $download_file; ?>" target="_blank" download><img src="<?php echo get_template_directory_uri(); ?>/img/mac.svg" alt=""></a>
														</li>
														<?php endif; ?>
														<?php if($download_file_mob = get_sub_field('download_file_mob')): ?>
														<li>
															<a href="<?php echo $download_file_mob; ?>" target="_blank" download><img src="<?php echo get_template_directory_uri(); ?>/img/tablet.svg" alt=""></a>
														</li>
														<?php endif; ?>
													</ul>
													
												</div>
										</div>
									</div>
								</div>
								<div class="col-7 b30 tar">
									<?php if($button = get_sub_field('download_button')): ?>
										<a href="<?php echo $button['url']; ?>" class="main-btn main-red-btn" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
									<?php endif; ?>
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>