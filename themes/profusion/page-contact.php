<?php 

/*
Template Name: Contact 
*/

get_header(); ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

<body class="green__stylers">
    <div class="b-wrap">
      <?php include 'parts/part-header.php'; ?>
    
    <main class="b-content">
      <header class="b-content__header">
        <div class="container">
          <?php the_content(); ?>
        </div>
      </header>
      <?php if( have_rows('addresses') ): ?>
      <div class="l-contact">
        <div class="l-contact--part">
          <div class="">
            <div class="b-30">
              <?php $i = 1; while ( have_rows('addresses') ) : the_row(); 
                  $img = get_sub_field('img');
                  $title = get_sub_field('title');
                  $time = get_sub_field('time');
                  $directions = get_sub_field('directions');
                  $mail = get_sub_field('mail');
                  $tel = get_sub_field('tel');
                  $addr = get_sub_field('addr');
                  $descr = get_sub_field('descr');
              ?>
              <div class="b30 contact-col-p">
                <div class="address__box address__l">
                  
                  <div class="address__box_info">
                    <div class="address__box_info-grid">
                      <div class="address__box_info-grid__elem">
                        <div class="title"><?php echo $title; ?></div>
                        <div class="time" id="time-<?php echo $i;?>"><?php //echo $time; ?></div>
                      </div>
                      <div class="address__box_info-grid__elem tar black__links">
                        <?php if($directions): ?>
                          <a href="<?php echo $directions; ?>" class="directions__elem" target="_blank">Get directions ></a>
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="address__box_info-grid">
                      <div class="address__box_info-grid__elem">
                        <?php if($mail): ?>
                          <a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a> 
                        <?php endif; ?>
                        <br>
                        <p><?php echo $tel; ?></p>
                        <br>
                        <?php echo $addr; ?>
                      </div>
                      <div class="address__box_info-grid__elem map">
                        <?php echo $descr; ?>
                      </div>
                    </div>
                    <div class="address__box_info-grid">
                      <!-- <div class="address__box_info-grid__elem">
                        <ul class="btn-list-onDef">
                          <li>
                            <?php if($mail): ?>
                            <a href="malto:<?php echo $mail; ?>" class="main-btn main-black-btn main-btn-short-circle">
                              
                              <svg class="svMail" width="25.6px" height="17.3px" viewBox="0 0 25.6 17.3" style="enable-background:new 0 0 25.6 17.3;"
                                               xml:space="preserve">
                                              <path class="mailbox" d="M12.5,9.7L1.1,0h23.4L13.1,9.7C12.9,9.8,12.7,9.8,12.5,9.7z"/>
                                              <polygon class="mailbox" points="2.1,14.4 0,16.2 0,1.1 8.9,8.7  "/>
                                              <path class="mailbox" d="M21.5,14.7l3.1,2.6H1.1l3.4-2.9l5.6-4.7l1.5,1.2l0.9,0.8c0.2,0.1,0.4,0.1,0.6,0l0.9-0.8l1.5-1.3L21.5,14.7z"/>
                                              <polygon class="mailbox" points="25.6,1.1 25.6,16.1 24,14.7 16.8,8.6  "/>
                                            </svg>
                            </a>
                            <?php endif; ?>
                          </li>
                          <li>
                            <a href="#" class="main-btn main-black-btn main-btn-short-circle">
                              <svg class="wrct"  width="22.8px" height="26px" viewBox="0 0 22.8 26" style="enable-background:new 0 0 22.8 26;"
                                 xml:space="preserve">
                                <path class="writeIco" d="M17.9,22.8c0,0.9-0.7,1.6-1.6,1.6h-13c-0.9,0-1.6-0.7-1.6-1.6V3.2c0-0.9,0.7-1.6,1.6-1.6h8.4
                                  c0.4,0,0.8,0.2,1.1,0.5l4.6,4.6c0.3,0.3,0.5,0.7,0.5,1.1v2.9l1.6-1.6V7.8c0-0.9-0.3-1.7-1-2.3L14,1c-0.6-0.6-1.4-1-2.3-1H3.2
                                  C1.5,0,0,1.5,0,3.2v19.5C0,24.5,1.5,26,3.2,26h13c1.8,0,3.2-1.5,3.2-3.2v-9.1l-1.6,1.6V22.8z"/>
                                <polygon class="writeIco" points="13,17.9 14.7,17.3 22.8,9.3 21.6,8.1 13.6,16.2   "/>
                                <rect  x="3.2" y="9.8" class="writeIco" width="8.1" height="0.8"/>
                                <rect x="3.2" y="12.2" class="writeIco" width="8.1" height="0.8"/>
                                <rect x="3.2" y="14.6" class="writeIco" width="8.1" height="0.8"/>
                                <rect x="3.2" y="17.1" class="writeIco" width="8.1" height="0.8"/>
                                <rect x="3.2" y="19.5" class="writeIco" width="8.1" height="0.8"/>
                              </svg>
                            </a>
                          </li>
                        </ul>
                      </div> -->
                      <div class="address__box_info-grid__elem">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php $i++; endwhile; ?>            
            </div>
          </div>
        </div>
        <?php endif;?>
        <div class="gray-bg l-contact--part">
          <div class="container">
            <div class="w980 section-b t_contact_form">
              <?php echo do_shortcode('[contact-form-7 id="19" title="Contact form 1"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </main>          
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>