<?php get_header(); ?>

		<body class="blue__stylers">
		  	<div class="b-wrap">
			    <?php include 'parts/part-header.php'; ?>
				
				<main class="b-content">	
					<header class="b-content__header black">
						<div class="container">
							<h1>404</h1>
						</div>
					</header>
					<div class="container text_page">
						<div class="section-b">
							<div class="section-b-720 text-center">
								<p>Oops, something went wrong!</p>
								<p>This page has been deleted or never existed.</p>
                                <p></p>
								<a href="<?php bloginfo('url'); ?>" class="main-btn main-green-btn">Go to Home Page</a>
							</div>
						</div>
					</div>
				</main>   
<?php get_footer(); ?>