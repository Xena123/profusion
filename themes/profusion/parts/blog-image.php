<?php $blog_image = get_sub_field('blog_image'); ?>
<div class="bqPic bqPic--blog bg__cover" style="background-image: url(<?php echo $blog_image['sizes']['blog_image_cap']; ?>);">
	<div class="bqPic__inner">
		<blockquote><?php the_sub_field('blog_image_capture'); ?></blockquote>
	</div>
</div>