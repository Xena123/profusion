<?php 
	$services = get_the_terms( $post->ID, 'services' );
	$service = join(' ', wp_list_pluck($services, 'slug'));
    $postype = get_post_type();
	//$guides = get_the_terms( $post->ID, 'guide_category' );
	//$guide = join(' ', wp_list_pluck($guides, 'slug'));
?> 
<div class="col-xl-3 col-lg-4 col-sm-6 filter__area__item <?php echo $service; ?> <?php echo $postype; ?>">
	<a href="<?php the_permalink(); ?>" class="fusion-box">
		<?php $guimg = wp_get_attachment_image_src( get_post_thumbnail_id(), 'guide'); ?>
		<div class="fusion-box-pic bg__cover" style="background-color: #cecece; background-image: url(<?php echo $guimg['0']; ?>);">
			<div class="fusion-box-pic__ico">
            <?php if($postype == 'casestudies'):?>
            	<img src="/wp-content/uploads/2018/10/guide-case.svg" alt="">
            <?php endif;?>	
            <?php if($postype == 'guides'):?>
            	<img src="/wp-content/uploads/2018/10/t-guide.svg" alt="">

            <?php endif;?>
            <?php if($postype == 'company'):?>
            	<img src="/wp-content/uploads/2018/10/guide-case.svg" alt="">
            
            <?php endif;?>
				<?php /*
					$terms = wp_get_post_terms(get_the_ID(), 'guide_category', array("fields" => "all"));
					foreach( $terms as $term ) {   
            	?>
            		<?php $ico = get_field('icon', $term->taxonomy.'_'.$term->term_id); ?>
            			<img src="<?php echo $ico; ?>" alt="">
            	<?php } ?>
            <?php endif;*/?>
			</div>
		</div>
		<div class="fusion-box-info">
			<div class="fusion-box-info-title">
            	<?php if($postype == 'casestudies'):?>
                	Case Study
            	<?php endif;?>	
            	<?php if($postype == 'guides'):?>
                	Guide
            	<?php endif;?>
            	<?php if($postype == 'company'):?>
                	Leadership Vision
            	<?php endif;?>
				<?php /*
					$field = get_field_object('guide_type');
					$value = $field['value'];
					echo $value;
				?>
            <?php 
  				$term_obj_list = get_the_terms( $post->ID, 'guide_category' );
  				$terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
  				echo $terms_string;*/
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