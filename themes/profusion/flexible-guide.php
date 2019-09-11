<?php while ( have_rows('guide_content') ) : the_row();
  if( get_row_layout() == 'guide_download' ) {
      include(locate_template('parts/guide-download.php'));
  }
  if( get_row_layout() == 'guide_info' ) {
      include(locate_template('parts/guide-info.php'));
  }
  if( get_row_layout() == 'guide_text' ) {
      include(locate_template('parts/guide-text.php'));
  }
  if( get_row_layout() == 'guide_features' ) {
      include(locate_template('parts/guide-features.php'));
  }  
  if( get_row_layout() == 'guide_bloquote' ) {
      include(locate_template('parts/guide-bloquote.php'));
  }  
  if( get_row_layout() == 'guide_team' ) {
      include(locate_template('parts/guide-team.php'));
  }  

  /*==case study==*/
  if( get_row_layout() == 'guide_video' ) {
      include(locate_template('parts/guide-video.php'));
  }  
  if( get_row_layout() == 'guide_imagedesk' ) {
      include(locate_template('parts/guide-imagedesk.php'));
  }   
  if( get_row_layout() == 'guide_icons' ) {
      include(locate_template('parts/guide-icons.php'));
  }  
endwhile; ?>