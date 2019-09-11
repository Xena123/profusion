<?php 

/*
Template Name: Home 
*/
if ( !function_exists( 'get_header' ) ) {
    exit; // Exit if accessed directly
}
get_header(); ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

<body class="green__stylers">
  	<div class="b-wrap">
	    <?php include 'parts/part-header.php'; ?>
		
		<main class="b-content">			
			<?php include 'flexible.php'; ?>
		</main>          
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>



