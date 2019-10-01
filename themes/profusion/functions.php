<?php
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}
if (function_exists('acf_set_options_page_menu')){
    acf_set_options_page_menu('Profusion');
}

register_nav_menus( array(
    'headermenu' => 'Header Menu',
    'footermenu' => 'Footer Menu',
    'termsmenu' => 'Terms Menu',
) );


require_once "mobiledetect.php";
$detect = new Mobile_Detect;

function theme_scripts() {
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.min.css' );

    wp_enqueue_script( 'momentjs', get_template_directory_uri() . '/js/moment.js', array('jquery'), null, true );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.min.js', array(), null, true );

    wp_localize_script( 'scripts', 'ajax_obj', array( 'ajax_url' => admin_url( 'admin-ajax.php' )) );
    wp_enqueue_script( 'ajax-js', get_template_directory_uri() . '/js/ajax.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );


//comments_template();
add_theme_support('post-thumbnails');
add_image_size( 'big', 1980, 1020, true );
add_image_size( 'homeslide', 1900, 400, true );
add_image_size( 'contact', 480, 411, true );
add_image_size( 'blq', 752, 402, true );
add_image_size( 'guide', 277, 188, true );
add_image_size( 'imagedesk', 743, 395, true );
add_image_size( 'team', 448, 448, true );
add_image_size( 'blog', 530, 280, true );
add_image_size( 'blog_image_cap', 740, 396, true );
add_image_size( 'blog_gallery-1', 736, 392, true );
add_image_size( 'blog_gallery-2', 366, 386, true );
add_image_size( 'downthumb', 161, 228, true );


/*Cut posts*/
function do_excerpt($string, $word_limit) {
    $words = explode(' ', $string, ($word_limit + 1));
    if (count($words) > $word_limit)
        array_pop($words);
    echo implode(' ', $words).'';
}


//sidebar for widgets
function sidebar() {
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '',
        'after_widget'  => '',
    ) );
}
add_action( 'widgets_init', 'sidebar' );

//add class to prev-next buttons
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="main-btn main-green-btn"';
}

//Comments
comments_template();

if(session_id() == '') session_start();
//cf7
add_action('wpcf7_mail_sent', function ($cf7) {
    if($cf7->id == 1867){
        $_SESSION['send_download_form'] = 1;
    }
});
function send_mailpoet_newsletter(){
    $_SESSION['send_mailpoet_newsletter'] = 1;
    echo 1; exit;
}
add_action('wp_ajax_send_mailpoet_newsletter', 'send_mailpoet_newsletter');
add_action('wp_ajax_nopriv_send_mailpoet_newsletter', 'send_mailpoet_newsletter');

//set data to company
function on_publish_pending_post($data, $postarr){
    if($data['post_type'] === 'company'){
        $postdate = '2018-08-23 18:57:33';
        $data['post_date'] = $postdate;
    }
    return $data;
}
add_filter('wp_insert_post_data', 'on_publish_pending_post', 10, 2 );

define( 'WP_DEBUG', true );
/* ------------------------------------------------ */
/* AJAX form callbacks. */
/* ------------------------------------------------ */
/* === Subscribe form === */
add_action( 'wp_ajax_subscribe_ajax_function', 'subscribe_ajax_function' );
add_action('wp_ajax_nopriv_subscribe_ajax_function', 'subscribe_ajax_function');

function subscribe_ajax_function () {

    if (isset($_POST['subscr_data']) && ! empty($_POST['subscr_data'])
        && isset($_POST['form_name']) && ! empty($_POST['form_name'])) {
        /* get_stylesheet_directory_uri() . '/form/subscribe-short-form.php' */

        echo true;
    } else {
        echo false;
    }

    die();
}