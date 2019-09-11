<?php 

/*
Template Name: Text Page 
*/

get_header(); ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

<body class="blue__stylers">
  	<div class="b-wrap">
	    <?php include 'parts/part-header.php'; ?>
		
		<main class="b-content">	
			<header class="b-content__header black">
				<div class="container">
					<h1><?php the_title(); ?></h1>
				</div>
			</header>
			<div class="container text_page">
				<div class="section-b">
					<div class="section-b-720">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</main>          
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>



