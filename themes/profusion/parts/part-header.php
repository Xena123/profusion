<header class="b-header">
  <div class="container">
    <div class="b-header-inner">
      <div class="b-header-inner-elem">
        <div class="logo">
          <?php if(is_page_template( array(
            'page-blog.php'
          )) || is_singular( array( 'post' ))): ?>
            <a href="<?php bloginfo('url'); ?>" style="display:inline-block; vertical-align: top; max-width:115px;">
              <img src="<?php echo get_template_directory_uri(); ?>/img/blog-logo.svg" alt="">
            </a>
          <?php else: ?>
            <?php if($sitelogo = get_field('site_logo', 'options')):?>
              <a href="<?php bloginfo('url'); ?>">
                <img src="<?php echo $sitelogo;?>" alt="">
              </a>
            <?php endif;?>
          <?php endif; ?>

            
        </div>
      </div>

      <div class="b-header-inner-elem">
        <div class="hamburger-out">
          <a href="#my-menu" class="hamburger hamburger--collapse">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </a>
        </div>
        <nav class="navigation" id="my-menu">
          <?php 
            wp_nav_menu([
               'menu'            => 'headermenu',
               'theme_location'  => 'headermenu',
               'container'       => false,
               'container_id'    => '',
               'container_class' => '',
               'menu_id'         => false,
               'menu_class'      => 'navigation-list',
               'depth'           => 2,
               // 'fallback_cb'     => 'bs4navwalker::fallback',
               // 'walker'          => new bs4navwalker()
            ]);             
          ?>             
        </nav>
      </div>
    </div>
  </div>
</header>