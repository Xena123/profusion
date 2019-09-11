<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-10690108-2', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->

  <meta charset="utf-8">
  <title>
    <?php wp_title(); ?>
  </title>
  <meta property="og:title" content="<?php bloginfo('name'); ?><?php wp_title( '|', true, 'left' ); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/oglogo.png">
  <meta name="description" content="">
  <meta content="telephone=no" name="format-detection">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <?php wp_head(); ?>
  <?php
    // on single blog post pages with comments open and threaded comments
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { 
        // enqueue the javascript that performs in-link comment reply fanciness
        wp_enqueue_script( 'comment-reply' ); 
    }
  ?>
  <style>   
    .grid-label-2+br{
      display: none;
    }
    .malpoethidden{
      opacity: 0;
      visibility: hidden;
      height: 0;
      overflow: hidden;
      margin-bottom: 0;
    }
    #checkall.active:after {
      content: '';
      width: 15px;
      height: 14px;
      background: url(/wp-content/themes/profusion/img/ch.svg) 0 0 no-repeat;
      position: absolute;
      bottom: 4px;
      left: 3px;
    }
    #checkall:before {
      content: '';
      width: 15px;
      height: 15px;
      border: 1px solid #808080;
      position: absolute;
      top: 0;
      left: 0;
    }
    #checkall {
      cursor: pointer;
      padding-left: 27px;
      position: relative;
    }
  </style>

</head>