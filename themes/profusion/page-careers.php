<?php 

/*
Template Name: Careers 
*/

get_header(); ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

<?php $page_color = get_field('page_color'); ?>
<body class="<?php echo $page_color; ?>">
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
								<?php the_content(); ?>							
								<?php if($abutton_1 = get_field('abutton_1')): ?>
									<a href="<?php echo $abutton_1['url']; ?>" class="main-btn main-yellow-btn" target="<?php echo $abutton_1['target']; ?>"><?php echo $abutton_1['title']; ?></a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container work__area-subNavOut">
				<div class="work__area-subNav">
					<ul class="work__area-subNav-inner">
						<li class="current-menu-item"><a href="#wwd"><?php the_field('tab_title_1');?></a></li>
						<li><a href="#wwb" class="amazing__link"><?php the_field('tab_title_2');?></a></li>
						<li><a href="#hwh" class="amazing__link"><?php the_field('tab_title_3');?></a></li>
						<li><a href="#social" class="amazing__link"><?php the_field('tab_title_4');?></a></li>
					</ul>
				</div>
			</div>
			<div class="container" id="wwd">
				<div class="tac section-b">
					<div class="section-b-720">
						<?php the_field('tab_1_text'); ?>
						<?php if($tab_1_text_hidden = get_field('tab_1_text_hidden')): ?>
						<div class="hide_text_more just__text">
							<?php echo $tab_1_text_hidden; ?>
						</div>
						<a href="#" class="main-btn main-green-btn showMoreJs">Read more</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
			
			<?php if( have_rows('coach_slider_1') ): ?>
			<div class="owl-carousel main-slider main-slider__js" id="vision">
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
								
								<ul class="btn-list-onDef">
									<li>
										<?php if($button): ?>
											<a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="main-btn main-yellow-btn scrollToData"><?php echo $button['title']; ?></a>
										<?php endif; ?>
									</li>
									<li>
										<a href="#" class="main-btn main-yellow-btn main-btn-short-circle">
											<svg width="22px" height="16px" viewBox="0 0 22 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										        <g>
										            <g id="Group-5"></g>
										            <path d="M21.4914,2.8684 C21.2424,1.9294 20.5074,1.1904 19.5744,0.9394 C17.8834,0.4834 11.1034,0.4834 11.1034,0.4834 C11.1034,0.4834 4.3234,0.4834 2.6334,0.9394 C1.7004,1.1904 0.9654,1.9294 0.7164,2.8684 C0.2634,4.5704 0.2634,8.1204 0.2634,8.1204 C0.2634,8.1204 0.2634,11.6714 0.7164,13.3734 C0.9654,14.3124 1.7004,15.0514 2.6334,15.3024 C4.3234,15.7584 11.1034,15.7584 11.1034,15.7584 C11.1034,15.7584 17.8834,15.7584 19.5744,15.3024 C20.5074,15.0514 21.2424,14.3124 21.4914,13.3734 C21.9444,11.6714 21.9444,8.1204 21.9444,8.1204 C21.9444,8.1204 21.9444,4.5704 21.4914,2.8684 Z M2.1104,14.0344 L20.0964,14.0344 L20.0964,1.8384 L2.1104,1.8384 L2.1104,14.0344 Z" id="Fill-3" fill="#000000"></path>
										            <path d="M2.111,14.034 L20.097,14.034 L20.097,1.838 L2.111,1.838 L2.111,14.034 Z M8.887,4.897 L14.553,8.121 L8.887,11.344 L8.887,4.897 Z" id="Fill-6" fill="#000000"></path>
										        </g>
										    </g>
										</svg>
										</a>
									</li>
									<li>
										<a href="#" class="main-btn main-yellow-btn main-btn-short-circle">
											<svg version="1.1"
												 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
												 x="0px" y="0px" width="23.4px" height="22px" viewBox="0 0 23.4 22" style="enable-background:new 0 0 23.4 22;"
												 xml:space="preserve">
											<defs>
											</defs>
											<path class="headPhoneSv" d="M21,4.7C16.8-0.3,11.9,0,11.9,0h-0.4c0,0-4.8-0.3-9.1,4.7c-4.4,5.2-2.1,11.9,0.4,15.5c0,0,1.1,2.1,1.6,1.7
												c0.6-0.4,0.4-0.4,0.2-1.2l0,0C6.5,22.4,7.3,22,7.3,22l0.4-0.3c-4-3.8-5.4-9.6-5.4-9.6l-0.7,0.3c-0.1,0.1-0.3,1.1-0.1,2.4
												c0,0.1,0,0.1,0,0.2c-0.1-0.3-0.2-0.6-0.2-0.8c0-1-1.7-4.6,2.9-10.2c0,0,0.1,0.5,0.7,0.1C5.5,3.7,8.5,2,11.7,2h0.1
												c3.2,0,6.2,1.7,6.8,2.1c0.6,0.5,0.7-0.1,0.7-0.1c4.6,5.6,2.9,9.2,2.9,10.2c0,0.2-0.1,0.4-0.2,0.8c0-0.1,0-0.1,0-0.2
												c0.2-1.3,0-2.3-0.1-2.4l-0.6-0.4c0,0-1.5,5.8-5.5,9.6l0.4,0.3c0,0,0.8,0.4,2.6-1.2l0,0c-0.2,0.8-0.3,0.8,0.2,1.2
												c0.6,0.4,1.6-1.7,1.6-1.7C23.1,16.6,25.3,9.9,21,4.7 M18.7,11.6c-1.9,2-5.4,8.5-4.7,9.1c0.7,1,1.2,0.8,1.2,0.8s3.5-3.5,5.4-9.6
												C20.7,11.8,19.9,10.3,18.7,11.6 M2.8,11.8c1.9,6.1,5.4,9.6,5.4,9.6s0.5,0.2,1.2-0.8c0.7-0.5-2.8-7.1-4.7-9.1
												C3.5,10.3,2.8,11.8,2.8,11.8"/>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			  	<?php endwhile; ?>				
			</div>
			<?php endif; ?>


			<div class="container" id="wwb">
				<div class="tac section-b">
					<div class="section-b-720">
						<?php the_field('leader_text'); ?>
						<?php if($leader_text_hidden = get_field('leader_text_hidden')): ?>
						<div class="hide_text_more just__text">
							<?php echo $leader_text_hidden; ?>
						</div>
							<a href="#" class="main-btn main-green-btn showMoreJs">Read more</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="gray-bg" id="hwh">
				<div class="container">
					<div class="rates-caro-elem">
						<?php the_field('coach_text'); ?>
						
					</div>
				</div>
			</div>
			<div class="container">
				<div class="tac section-b">
					<div class="section-b-720">
						<?php the_field('partners_text'); ?>
					</div>
					<?php if($partnersgal = get_field('partnersgal')): ?>
					<div class="row b-30 ailgn-items-center justify-content-sm-between justify-content-center">
						<?php foreach( $partnersgal as $partner ): ?>
							<div class="col-auto b30">
								<img src="<?php echo $partner['url']; ?>" alt="">
							</div>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="gray-bg">
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
			<?php if( have_rows('coach_slider_2') ): ?>
			<div class="owl-carousel main-slider main-slider__js" id="social">
				<?php while ( have_rows('coach_slider_2') ) : the_row(); 
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
									<a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="main-btn main-yellow-btn main-yellow-btn-white"><?php echo $button['title']; ?></a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			  	<?php endwhile; ?>	
			</div>
			<?php endif; ?>
			<div class="blue-bg info_sec">
				<div class="container">
					<div class="rates-caro-elem">
						<?php the_field('info_text'); ?>
						<?php if($info_btn = get_field('info_btn')): ?>
							<a href="<?php echo $info_btn['url']; ?>" class="main-btn main-white-btn" target="<?php echo $info_btn['target']; ?>"><?php echo $info_btn['title']; ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>

		</main>          
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>