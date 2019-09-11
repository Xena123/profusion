<?php 

/*
Template Name: Work 
*/

get_header(); ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

<body class="orange__stylers">

	<div class="b-wrap">
		<?php include 'parts/part-header.php'; ?>

		<main class="b-content">
			<header class="b-content__header">
				<div class="container">
					<h2><?php the_field('slogan'); ?></h2>
				</div>
			</header>
			<div class="container">
				<div class="tac section-b">
					<div class="section-b-720">
						<?php the_content(); ?>
					</div>
					<div class="filter__area">
						<ul class="filter__list">
							<li><b>Filter stories by services:</b></li>
							<li><a href="#" data-filter="*" class="is-checked">All</a></li>
							<?php 
							    $terms = get_terms('services', array('hide_empty' => false, 'order'=>'asc'));     
							    foreach( $terms as $term ) {   
							?>
							<li><a href="#" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
							<?php } ?>	
						</ul>

						<div class="row filter__area__items loadplace">
							<?php echo do_shortcode('[ajax_load_more post_type="casestudies" posts_per_page="8" repeater="template_1" scroll="false" transition="fade" transition_container="true" button_label="View more client stories"]') ?>
						</div>
						<script>
							jQuery(document).ready(function(){

								almComplete = function(alm){
									jQuery(".filter__area__items").isotope('reloadItems').resize();
								    jQuery(".filter__area__items").isotope({
							            itemSelector: ".filter__area__item"
							        });
								};
							});
						</script>
					</div>
				</div>
			</div>
			<!-- <div class="blue-bg info_sec">
				<div class="container">
					<div class="rates-caro-elem">
						<?php //the_field('info_section_text'); ?>
						<?php //if($info_section_btn = get_field('info_section_btn')): ?>
							<a href="<?php //echo $info_section_btn['url']; ?>" class="main-btn main-white-btn" target="<?php //echo $info_section_btn['target']; ?>"><?php //echo $info_section_btn['title']; ?></a>
						<?php //endif; ?>
					</div>
				</div>
			</div> -->
		</main>        
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>