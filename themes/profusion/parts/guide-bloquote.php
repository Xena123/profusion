<div class="container">
	<div class="w-746 just__text">
		<?php $blq_img = get_sub_field('blq_img'); ?>
		<div class="bqPic bg__cover" style="background-image: url(<?php echo $blq_img['sizes']['blq']; ?>);">
			<div class="bqPic__inner">
				<?php the_sub_field('blq_text'); ?>
			</div>
		</div>
	</div>
</div>