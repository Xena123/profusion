<?php
/*
Template Name: Blog 
*/
get_header(); ?>
  <body class="blog-page">
    <div class="b-wrap">
      <?php include 'parts/part-header.php'; ?>
      <main class="b-content">
        <?php if($banner = wp_get_attachment_image_src( get_post_thumbnail_id(), 'homeslide')): ?>
        <div class="owl-carousel main-slider main-slider__js">          
          <div class="main-slider-elem">            
              <img src="<?php echo $banner['0']; ?>" class="main-slider-img objF" alt="">            
            <div class="main-slider-inner">
              <div class="container">
                <div class="main-slider-info blog_banner">
                <?php if(have_posts()) : ?>
                  <?php while(have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                  
                    <?php if($abutton_1 = get_field('abutton_1')): ?>
                      <a href="<?php echo $abutton_1['url']; ?>" class="main-btn main-green-btn" target="<?php echo $abutton_1['target']; ?>"><?php echo $abutton_1['title']; ?></a>
                    <?php endif; ?>
                  <?php endwhile; ?>
                <?php endif; ?>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <?php endif; ?>
        
        
        <div class="container">
          <section class="blog__area section-b">
            <header class="blog__area--head">
              <h4 class="blog__area--head-title">Discover more postings on:</h4>

              <ul class="list blog__area-filter-list button-group" id="filters">
                <li><a href="#" class="is-checked" data-filter="*">Everything</a></li>
                <?php 
                    $terms = get_terms('category', array('hide_empty' => false, 'order'=>'asc'));     
                    foreach( $terms as $term ) {   
                ?>
                <li><a href="#" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
                <?php } ?>  
              </ul>
              <input type="text" placeholder="Search" class="blog-search" id="quicksearch">
            </header>
            
            <div class="row b-30 blog-area-row" id="grid">
              <?php echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="8" repeater="template_2" scroll="false" transition="fade" transition_container="true" button_label="More postings"]') ?>
            </div>
            <div class="afterbox"></div>
            <style>
              /*.blog__elem-info {
                height: 300px;
                overflow: hidden;
              }*/
            /* .blog-area-row-elem.col-lg-12 {display: none;}*/
            </style>
            <script> 
              
            jQuery(window).load(function () { 
              almComplete = function(alm){
                 
                  jQuery("#grid").isotope('reloadItems').resize();
                  jQuery("#grid").isotope({
                      itemSelector: ".blog-area-row-elem"
                  });

                  jQuery('img').load(function(){

                      jQuery("#grid").isotope({
                              itemSelector: ".blog-area-row-elem"
                          });
                    });
                  };
            });
            jQuery(document).ready(function(){
                
                almComplete = function(alm){
                  
                  jQuery("#grid").isotope('reloadItems').resize();
                  var $grid = jQuery('#grid').isotope({
                    itemSelector: '.blog-area-row-elem',
                    layoutMode: 'masonry',
                    filter: function() {
                      var $this = jQuery(this);
                      var searchResult = qsRegex ? $this.text().match( qsRegex ) : true;
                      var buttonResult = buttonFilter ? $this.is( buttonFilter ) : true;
                      return searchResult && buttonResult;
                    }
                  });
                };  

                almDone = function(){
                   
                  jQuery("#grid").isotope('reloadItems').resize();
                  var $grid = jQuery('#grid').isotope({
                    itemSelector: '.blog-area-row-elem',
                    layoutMode: 'masonry',
                    filter: function() {
                      var $this = jQuery(this);
                      var searchResult = qsRegex ? $this.text().match( qsRegex ) : true;
                      var buttonResult = buttonFilter ? $this.is( buttonFilter ) : true;
                      return searchResult && buttonResult;
                    }
                  });
                }; 
                
                // quick search regex
                var qsRegex;
                var buttonFilter;

                // init Isotope
                var $grid = jQuery('#grid').isotope({
                  itemSelector: '.blog-area-row-elem',
                  layoutMode: 'masonry',
                  filter: function() {
                    var $this = jQuery(this);
                    var searchResult = qsRegex ? $this.text().match( qsRegex ) : true;
                    var buttonResult = buttonFilter ? $this.is( buttonFilter ) : true;
                    return searchResult && buttonResult;
                  }
                });

                jQuery('#filters').on( 'click', 'a', function() {
                  buttonFilter = jQuery( this ).attr('data-filter');
                  $grid.isotope();
                });

                // use value of search field to filter
                var $quicksearch = jQuery('#quicksearch').keyup( debounce( function() {
                  qsRegex = new RegExp( $quicksearch.val(), 'gi' );
                  $grid.isotope();
                }) );


                  // change is-checked class on buttons
                jQuery('.button-group').each( function( i, buttonGroup ) {
                  var $buttonGroup = jQuery( buttonGroup );
                  $buttonGroup.on( 'click', 'a', function(e) {
                    e.preventDefault();
                    $buttonGroup.find('.is-checked').removeClass('is-checked');
                    jQuery( this ).addClass('is-checked');
                  });
                });
                  

                // debounce so filtering doesn't happen every millisecond
                function debounce( fn, threshold ) {
                  var timeout;
                  threshold = threshold || 100;
                  return function debounced() {
                    clearTimeout( timeout );
                    var args = arguments;
                    var _this = this;
                    function delayed() {
                      fn.apply( _this, args );
                    }
                    timeout = setTimeout( delayed, threshold );
                  };
                }
              });
            </script>

          </section>
        </div>
      </main>

<?php get_footer(); ?>