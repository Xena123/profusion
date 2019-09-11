<div class="blue-bg info_sec">
	<div class="container">
		<div class="rates-caro-elem">
			<?php the_sub_field('info_text'); ?>
			<?php if($info_btn = get_sub_field('info_btn')): ?>
				<a href="<?php echo $info_btn['url']; ?>" class="main-btn main-white-btn" target="<?php echo $info_btn['target']; ?>"><?php echo $info_btn['title']; ?></a>
			<?php endif; ?>
		</div>
	</div>
</div>
