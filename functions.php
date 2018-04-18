<?php
if( ! function_exists( 'mh_setup') ) :
	function mh_setup() {
	remove_action('wp_head', 'wp_generator');
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	
	add_filter( 'show_admin_bar', '__return_false' );	
	
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
	add_theme_support( 'post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'));	
	
	// Enable thumbnails
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
	
	// Create custom sizes
	// This is then pulled through to your theme useing the_post_thumbnail('custombig');
	if ( function_exists( 'add_image_size' ) ) {
	}
	
	// Custom CSS for the login page
	// Create wp-login.css in your theme folder
	function wpfme_loginCSS() {
		echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/css/wp-login.css"/>';
	}
	add_action('login_head', 'wpfme_loginCSS');
}
endif;
add_action( 'after_setup_theme', 'mh_setup' );

function mh_scripts() {
	wp_enqueue_style('maaike-hogebrug', get_template_directory_uri().'/css/style.css');
	
	
	
	wp_register_script('popper', ('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js'), false, null, true);
	wp_enqueue_script('popper');
	
	wp_register_script('bootstrap', ('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'), false, null, true);
	wp_enqueue_script('bootstrap');
	
	wp_register_script('owl', ('//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js'), false, null, true);
	wp_enqueue_script('owl');
	
	wp_register_script('imagesLoaded', ('//cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js'), false, null, true);
	wp_enqueue_script('imagesLoaded');
	
	wp_register_script('masonry2', ('//cdnjs.cloudflare.com/ajax/libs/masonry/4.2.1/masonry.pkgd.min.js'), false, null, true);
	wp_enqueue_script('masonry2');
	
	wp_register_script('scrollreveal', ('//cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/3.3.6/scrollreveal.min.js'), false, null, true);
	wp_enqueue_script('scrollreveal');
	
	wp_register_script('scripts', (get_template_directory_uri().'/js/scripts.js'), false, null, true);
	wp_enqueue_script('scripts');
	
	wp_register_script('fa', (get_template_directory_uri().'/js/fontawesome.min.js#defer'));
	wp_enqueue_script('fa');
}
add_action('wp_enqueue_scripts', 'mh_scripts');

function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

function custom_wp_nav_menu($var) {
  return is_array($var) ? array_intersect($var, array(
		'current_page_item',
		'current_page_parent',
		'current_page_ancestor',
		'first',
		'last',
		'vertical',
		'horizontal'
		)
	) : '';
}
add_filter('nav_menu_css_class', 'custom_wp_nav_menu');
add_filter('nav_menu_item_id', 'custom_wp_nav_menu');
add_filter('page_css_class', 'custom_wp_nav_menu');
function current_to_active($text){
	$replace = array(
		'current_page_item' => 'active',
		'current_page_parent' => 'active',
		'current_page_ancestor' => 'active',
	);
	$text = str_replace(array_keys($replace), $replace, $text);
		return $text;
	}
add_filter ('wp_nav_menu','current_to_active');
function strip_empty_classes($menu) {
    $menu = preg_replace('/ class=""| class="sub-menu"/','',$menu);
    return $menu;
}
add_filter ('wp_nav_menu','strip_empty_classes');

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

require get_template_directory() . '/bootstrap-navwalker.php';

function register_my_menus() {
  register_nav_menus(
    array(
      'hoofdmenu-links' => __('Hoofdmenu (links)'),
      'hoofdmenu-rechts' => __('Hoofdmenu (rechts)'),
      'hoofdmenu-footer' => __('Hoofdmenu (footer)'),
      'diensten-footer' => __('Diensten (footer)'),
      'portfolio-footer' => __('Portfolio (footer)'),
      'seo-footer' => __('SEO (footer)')
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_filter('style_loader_tag', 'codeless_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'codeless_remove_type_attr', 10, 2);
	function codeless_remove_type_attr($tag, $handle){
	return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/",'', $tag);
}

function add_async_forscript($url)
{
    if (strpos($url, '#defer')===false)
        return $url;
    else if (is_admin())
        return str_replace('#defer', '', $url);
    else
        return str_replace('#defer', '', $url)."' defer='defer";
}
add_filter('clean_url', 'add_async_forscript', 11, 1);

add_filter( 'style_loader_src', 'sdt_remove_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999 );
function sdt_remove_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}

add_image_size('dkb-klein', 315, 211);
add_image_size('dkb-medium', 485, 324);
add_image_size('dkb-groot', 520, 348);