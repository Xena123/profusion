<!-- page.php -->
<?php get_header(); ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

<body class="<?php the_field('page_color'); ?> for-serv-bg">
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
								<a href="#" class="main-btn main-blue-btn scrollToData">Find out more</a>
							</div>
						</div>
					</div>
				</div>
			</div>		
			<?php include 'flexible.php'; ?>
		</main>          
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>