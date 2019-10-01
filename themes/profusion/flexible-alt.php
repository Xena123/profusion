<!-- flexible-alt.php -->
<?php while ( have_rows('flexible_template') ) : the_row();
  if( get_row_layout() == 'slider' ) {
      include(locate_template('parts/part-slider.php'));
  }
  if( get_row_layout() == 'boxes' ) {
      include(locate_template('parts/part-boxes-alt.php'));
  }
  if( get_row_layout() == 'collage' ) {
      include(locate_template('parts/part-collage.php'));
  }
  if( get_row_layout() == 'testimonials' ) {
      include(locate_template('parts/part-testimonials.php'));
  }
  if( get_row_layout() == 'textslider' ) {
      include(locate_template('parts/part-textslider.php'));
  }
  if( get_row_layout() == 'partners' ) {
      include(locate_template('parts/part-partners.php'));
  }
  if( get_row_layout() == 'download' ) {
      include(locate_template('parts/part-download.php'));
  }
  if( get_row_layout() == 'guides' ) {
      include(locate_template('parts/part-guides.php'));
  }
  if( get_row_layout() == 'info' ) {
      include(locate_template('parts/part-info.php'));
  }
  if( get_row_layout() == 'text' ) {
      include(locate_template('parts/part-text.php'));
  }
  if( get_row_layout() == 'features' ) {
      include(locate_template('parts/part-features.php'));
  }
  if( get_row_layout() == 'values' ) {
      include(locate_template('parts/part-values.php'));
  }
  if( get_row_layout() == 'vacancies' ) {
      include(locate_template('parts/part-vacancies.php'));
  }
  if( get_row_layout() == 'stories_alt' ) {
      include(locate_template('parts/part-stories-alt.php'));
  }
  if( get_row_layout() == 'sliderbuttons' ) {
      include(locate_template('parts/part-slider-buttons.php'));
  }
  if( get_row_layout() == 'team' ) {
      include(locate_template('parts/part-team.php'));
  }
  if( get_row_layout() == 'contentnimages' ) {
      include(locate_template('parts/part-contentnimages-alt.php'));
  }
endwhile; ?>