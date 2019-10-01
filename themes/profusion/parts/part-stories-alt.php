<!-- part-stories-alt.php -->
<div class="gray-bg">
  <div class="container">
    <section class="tac section-b">
      <div class="section-b-720 story-section">
        <h3><?php the_sub_field('section_title'); ?></h3>
      </div>
      <div class="row justify-content-center">
             <?php while ( have_rows('story') ) : the_row(); 
                
  
                $title = get_sub_field('title');
                $img = get_sub_field('img');
                $text = get_sub_field('text');
                $link = get_sub_field('link');

              
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
              ?>

              <div class="story-box col-lg-3 col-md-6 col-sml-12">
                
                <div class="hapen-box bg__cover" style="background: url(<?php echo $img['sizes']['team']; ?>) center center / cover no-repeat #d6d6d6; height:300px;">
                  <div class="hapen-box-info">
                    <b><?php echo $title; ?></b>
                    <p><?php echo $text; ?></p>
                  </div>
                  <?php if($link): ?>
                  <a href="<?php echo $link_url; ?>" target="<?php echo esc_attr($link_target); ?>" class="hapen-box-hover">
                    <div class="hapen-box-hover-inner">
                      <div class="cut_content">
                        <h3><?php echo $title; ?></h3>
                        <p><?php echo $text; ?></p>
                      </div>
                      <div class="main-btn main-white-btn"><?php echo $link_title; ?></div>
                    </div>
                  </a>
                  <?php else: ?>
                  <div class="hapen-box-hover">
                    <div class="hapen-box-hover-inner">
                      <div class="cut_content">
                        <h3><?php echo $title; ?></h3>
                        <p><?php echo $text; ?></p>
                      </div>
                    </div>
                  </div>
                  <?php endif; ?>
                </div>

              </div>

            <?php endwhile; ?>
          </div>     
        </div>
      </div>
        
    </section>
  </div>
</div>