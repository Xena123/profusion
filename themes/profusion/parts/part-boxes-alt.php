<div class="set_background gray-bg">
	<div class="container">
		<section class="tac section-b">
        	<?php if($home_trio_text = get_sub_field('home_trio_text')): ?>
			<div class="section-b-720">
				<?php the_sub_field('home_trio_text'); ?>
			</div>
            <?php endif; ?>

			<div class="row b-30 justify-content-center" id="data-area">
				<?php if( have_rows('home_trio') ): ?>
					<?php while ( have_rows('home_trio') ) : the_row(); 
					    $ico = get_sub_field('ico');
					    $icohover = get_sub_field('icohover');
					    $text = get_sub_field('text');
					    $button = get_sub_field('button');
					  ?>
					  	<div class="col-lg-4 col-md-6 b30">
							<div class="data-box">
							    <?php if($button): ?>
    								<a href="<?php echo $button['url']; ?>" class="data-box-icon">
    									<div class="data-box-icon-1">
    										<?php if($ico): ?>
    											<img src="<?php echo $ico; ?>" alt="">
    										<?php endif; ?>
    									</div>
    									<div class="data-box-icon-2">
    										<?php if($icohover): ?>
    											<img src="<?php echo $icohover; ?>" alt="">
    										<?php endif; ?>
    									</div>
    								</a>
								<?php else: ?>
								    <div class="data-box-icon">
                      <div class="data-box-icon-1">
                        <?php if($ico): ?>
                          <img src="<?php echo $ico; ?>" alt="">
                        <?php endif; ?>
                      </div>
                      <div class="data-box-icon-2">
                        <?php if($icohover): ?>
                          <img src="<?php echo $icohover; ?>" alt="">
                        <?php endif; ?>
                      </div>
                    </div>
								<?php endif; ?>
								<div class="data-box-info">
									<?php echo $text; ?>
									<?php if($button): ?>
										<a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="main-btn main-green-btn"><?php echo $button['title']; ?></a>
									<?php endif; ?>
								</div>
							</div>
						</div>
					  <?php endwhile; ?>
					<?php endif;?>
				
			</div>
		</section>
	</div> 
</div>