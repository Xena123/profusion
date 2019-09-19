<?php 

/*
Template Name: Landing 
*/
get_header(); ?>
<!-- page-landing -->
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

<body class="blue__stylers">
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
								<div class="page__title"><?php the_title(); ?></div>
								<?php the_content(); ?>

								<ul class="btn-list-onDef">
									<li>										
										<?php if($abutton_1 = get_field('abutton_1')): ?>
											<a href="<?php echo $abutton_1['url']; ?>" class="main-btn main-blue-btn" target="<?php echo $abutton_1['target']; ?>"><?php echo $abutton_1['title']; ?></a>
										<?php endif; ?>
									</li>
									<li>
										<?php if($videourl = get_field('videourl')): ?>
										<a href="<?php echo $videourl; ?>" class="popup-youtube main-btn main-blue-btn watch__video-btn">Click to watch our video</a>
										<?php endif; ?>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<?php if($land_text = get_field('land_text')): ?>
			<div class="container" >
				<div class="tac section-b">
					<div class="section-b-720">
						<?php the_field('land_text'); ?>
					</div>
				</div>
			</div>	
			<?php endif; ?>	
			<?php include 'flexible.php'; ?>
		</main>          
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>



