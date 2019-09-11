<?php 

/*
Template Name: Knowledge 
*/

get_header(); ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

<body class="red__stylers">

	<div class="b-wrap">
		<?php include 'parts/part-header.php'; ?>

		<main class="b-content">
			<div class="owl-carousel main-slider main-slider__js">
				<?php while ( have_rows('home_slider') ) : the_row(); 
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
									<a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="main-btn main-green-btn scrollToData"><?php echo $button['title']; ?></a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			  	<?php endwhile; ?>	
			</div>
			<div class="container">
				<section class="tac section-b">
					<div class="section-b-720">
						<h3><?php the_field('filter_title'); ?><!-- Knowledge – resources to support your journey --></h3>
					</div>

					<div class="filter__area">
						<ul class="filter__list">
							<li><b><?php the_field('filter_title_text'); ?><!-- I want to discover resources relating to these services: --></b></li>
							<li><a href="#" data-filter="*" class="is-checked">All</a></li>
							<?php 
							    $terms = get_terms('services', array('hide_empty' => false, 'order'=>'asc'));     
							    foreach( $terms as $term ) {   
							?>
								<li><a href="#" data-filter=".<?php echo $term->slug; ?>" id="<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
							<?php } ?>	
						</ul>
						<div class="filter__list__sub t_checkboxes">
							<li>Show:</li>
							<li>
								<label>
									<input type="checkbox" value="*" checked id="allcheck"> 
									<span>All</span>
								</label>
							</li>
							<?php /*
							    $terms2 = get_terms('guide_category', array('hide_empty' => false, 'order'=>'asc'));     
							    foreach( $terms2 as $term2 ) {   
							?>
								<li>
									<label>
										<input type="checkbox" value=".<?php echo $term2->slug; ?>">
										<span><?php echo $term2->name; ?></span>
									</label>
								</li>
							<?php } ?>
							<?php
							foreach ( get_post_types( '', 'names' ) as $post_type ) {?>
								<li>
									<label>
										<input type="checkbox" value=".<?php echo $post_type; ?>">
										<span><?php echo $post_type; ?></span>
									</label>
								</li>	
							<?php } */?>
							<li>
								<label>
									<input type="checkbox" value=".casestudies" id="casestudies">
									<span>Case Studies</span>
								</label>
							</li>
							<li>
								<label>
									<input type="checkbox" value=".guides" id="guides">
									<span>Guides</span>
								</label>
							</li>
                            <li>
								<label>
									<input type="checkbox" value=".company" id="tribe-talk">
									<span>Tribe talk</span>
								</label>
							</li>

						</div>


						<div class="row filter__area__items loadplace">
							<?php /*
							$custom_args = array(
							  'post_type' => 'guides',
							  'posts_per_page' => 10,
							  // 'order' => ASC,
							);
							$custom_query = new WP_Query( $custom_args ); ?>
							<?php if ( $custom_query->have_posts() ) : ?>
							<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
								<?php 
									$services = get_the_terms( $post->ID, 'services' );
									$service = join(' ', wp_list_pluck($services, 'slug'));

									$guides = get_the_terms( $post->ID, 'guide_category' );
									$guide = join(' ', wp_list_pluck($guides, 'slug'));
								?> 
								<div class="col-xl-3 col-lg-4 col-sm-6 filter__area__item <?php echo $service; ?> <?php echo $guide; ?>">
									<a href="<?php the_permalink(); ?>" class="fusion-box">
										<?php $guimg = wp_get_attachment_image_src( get_post_thumbnail_id(), 'guide'); ?>
										<div class="fusion-box-pic bg__cover" style="background-image: url(<?php echo $guimg['0']; ?>);">
											<div class="fusion-box-pic__ico">
												<img src="<?php echo get_template_directory_uri(); ?>/img/t_resource.svg" alt="">
											</div>
										</div>
										<div class="fusion-box-info">
											<div class="fusion-box-info-title">
												<?php 
													$field = get_field_object('guide_type');
													$value = $field['value'];
													echo $value;
												?>
											</div>
											<p><?php the_title(); ?></p>

											<time class="f-time" datetime="<?php echo get_the_date('j-m-y'); ?>">
												<?php echo get_the_date('j.m.y'); ?> / 
												<?php 
													$term_obj_list = get_the_terms( $post->ID, 'services' );
													$terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
													echo $terms_string;
												?> 
											</time>
										</div>
									</a>
								</div>
							<?php endwhile; ?>
							<?php endif; wp_reset_postdata();*/ ?> 
							<?php echo do_shortcode('[ajax_load_more post_type="guides, casestudies, company" posts_per_page="20" scroll="false" transition="fade" transition_container="true" button_label="View more"]') ?>
						</div>
					</div>
				</section>
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
			<div class="blue-bg info_sec">
				<div class="container">
					<div class="rates-caro-elem">
						<?php the_field('info_section_text'); ?>
						<?php if($info_section_btn = get_field('info_section_btn')): ?>
							<a href="<?php echo $info_section_btn['url']; ?>" class="main-btn main-white-btn" target="<?php echo $info_section_btn['target']; ?>"><?php echo $info_section_btn['title']; ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</main>         
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>