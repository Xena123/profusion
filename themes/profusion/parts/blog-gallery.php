<?php $blog_gallery_images = get_sub_field('blog_gallery_images'); ?>
<div class="blog-photo-area">
	<div class="row no-gutters">
		<?php $i = 1; foreach( $blog_gallery_images as $image ): ?>
			<?php if($i == 1): ?>
				<div class="col-12">
					<img src="<?php echo $image['sizes']['blog_gallery-1']; ?>" alt="">
				</div>
			<?php else: ?>
				<div class="col-6">
					<img src="<?php echo $image['sizes']['blog_gallery-2']; ?>" alt="">
				</div>
			<?php endif; ?>
		<?php $i ++; endforeach; ?>
	</div>
</div>