<div class="container">
	<div class="section-b">
		<div class="article__list">
			<?php while ( have_rows('conim_rows') ) : the_row(); 
			    $img = get_sub_field('img');
			    $text = get_sub_field('text');
			    $button = get_sub_field('button');
		  	?>
			  	<div class="row b-30 article__list-item align-items-center">
					<div class="col-md-6 b30 tac">
						<?php if($img): ?>
							<img src="<?php echo $img['url']; ?>" alt="">
						<?php endif; ?>
					</div>
					<div class="col-md-6 b30">
						<article class="just__text">
							<?php echo $text; ?>
							<?php if($button): ?>
								<a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="amazing__link"><?php echo $button['title']; ?></a>
							<?php endif; ?>
						</article>
					</div>
				</div>
		  	<?php endwhile; ?>
			
		</div>
	</div>
</div>