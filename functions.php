<?php

add_theme_support('post-formats');
add_theme_support('post-thumbnails');
add_theme_support('menus');



add_filter('get_twig', 'add_to_twig');
add_filter('timber_context', 'add_to_context');

add_action('wp_enqueue_scripts', 'load_scripts');
add_filter('show_admin_bar', '__return_false'); //REMOVE WP ADMIN BAR

define('THEME_URL', get_template_directory_uri());
function add_to_context($data){
    /* this is where you can add your own data to Timber's context object */
    $data['qux'] = 'I am a value set in your functions.php file';
    $data['menu'] = new TimberMenu();
    return $data;
}

function add_to_twig($twig){
    /* this is where you can add your own fuctions to twig */
    $twig->addExtension(new Twig_Extension_StringLoader());
    $twig->addFilter('myfoo', new Twig_Filter_Function('myfoo'));
    return $twig;
}

function myfoo($text){
    $text .= ' bar!';
    return $text;
}

function load_scripts(){
    wp_enqueue_script('jquery');
}

/* esta function cria um segundo botão para o comment com a class=button para o foundation, precisa de apagar o outro botão no CSS */
function so_comment_button() {

  echo '<input name="submit" class="button tiny" type="submit" value="' . __( 'Post Comment', 'textdomain' ) . '" />';

}

add_action( 'comment_form', 'so_comment_button' );

/*----------EDITOR STYLE------------*/

function my_theme_add_editor_styles() {
    $font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Source+Sans+Pro|Oxygen' );
    add_editor_style( $font_url );
}
add_action( 'after_setup_theme', 'my_theme_add_editor_styles' );

add_editor_style();
/*-----------------------------------*/


function arphabet_widgets_init() {
    register_sidebar( array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
));
    register_sidebar( array(
    'name' => 'Footer',
    'id' => 'footer',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
));
}

add_action( 'widgets_init', 'arphabet_widgets_init' );


/*----------COSTUMIZER------------*/

function crac_customize_register( $wp_customize ) {

}
add_action( 'customize_register', 'crac_customize_register' );

$args = array(
  'flex-width'    => false,
  'width'         => 1067,
  'flex-height'    => false,
  'height'        => 300,
  'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );
