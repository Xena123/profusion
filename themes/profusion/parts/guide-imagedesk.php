<div class="container">
	<div class="w-746 just__text">
		<figure>
			<?php if($imde_img = get_sub_field('imde_img')): ?>
				<img src="<?php echo $imde_img['sizes']['imagedesk']; ?>" alt="">
			<?php endif; ?>
			<?php if($imde_text = get_sub_field('imde_text')): ?>
			<figcaption>
				<?php the_sub_field('imde_text'); ?>
			</figcaption>
			<?php endif; ?>
		</figure>
	</div>
</div>