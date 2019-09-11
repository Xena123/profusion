<?php get_header(); ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

<body class="blue__stylers">
  	<div class="b-wrap">
	    <?php include 'parts/part-header.php'; ?>
		
		<main class="b-content">
			<header class="b-content__header">
				<div class="container">
					<h2><?php the_field('career_sigle_slogan'); ?></h2>
				</div>
			</header>
			<div class="container">
				<div class="section-b">
					<div class="section-b-720 just__text">
						<h2><?php the_title(); ?></h2>
						<p><b>Location:</b> <?php the_field('career_sigle_location'); ?><br>
						<b>Posted: </b><?php the_date('j.m.y'); ?></p>
						<?php the_content(); ?>
						
						<ul class="btn-list-onDef">
							<li><a href="mailto:recruitment@profusion.com" class="main-btn main-blue-btn">Apply now</a></li>
							<li><a href="<?php echo get_permalink('355'); ?>" class="main-btn main-blue-btn">View other vacancies</a></li>
						</ul>
					</div>
				</div>
			</div>
			<?php include 'flexible.php'; ?> 
		</main>

		         
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>