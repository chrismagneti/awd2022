<?php

//disable wp-admin file editor
define('DISALLOW_FILE_EDIT', true);

if(!defined('THEME_URL'))
	define('THEME_URL', get_bloginfo('template_directory'));

//	fix db after server move
//require_once( TEMPLATEPATH.'/library/includes/mysql-replace.php' );
//MySQL_Replace::replace('old', 'new');

//	dependicies
require_once( TEMPLATEPATH.'/library/includes/wp-header-remove.php' );

//	menus
register_nav_menus(array(
	'main-nav' => 'Main Navigation',
	'footer-nav-1' => 'Footer Navigation - Column 1',
	'footer-nav-2' => 'Footer Navigation - Column 2',
	'header-top-bar' => 'Header - Top Bar',
));

//	post thumbnails
add_theme_support( 'post-thumbnails' );

/**
 *	Add Scripts
 *	Utilizes wp_enqueue_scripts to add
 *	required scripts
 *
 *	@return void
 */
add_action( 'wp_enqueue_scripts', 'magneti_enqueue_scripts' );

function magneti_enqueue_scripts() {

	$frontEndPackageVersion = '2.1.5';
	
	if( is_admin() )
		return false;
	
	//register
    wp_register_style( 'template-stylesheet', get_theme_file_uri() . '/library/css/style.css', array(), $frontEndPackageVersion, 'all' );
    wp_register_script( 'slick', THEME_URL.'/library/js/slick/slick.min.js', array(), '1.0' );
		wp_register_script( 'lib', THEME_URL.'/library/js/lib.js', array( 'jquery' ), $frontEndPackageVersion );
		wp_register_script( 'fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array( 'jquery' ), '4.0' );
    wp_register_style( 'fancybox-styles', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css', array(), '4.0', 'all' );

	//enqueue
	wp_enqueue_style( 'template-stylesheet' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'slick' );
	wp_enqueue_script( 'lib' );

	// Fancybox
	wp_enqueue_style( 'fancybox-styles' );
	wp_enqueue_script( 'fancybox' );
	
	//localize
	/*
	wp_localize_script('lib', 'MAGNETI', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'siteurl' => get_option('siteurl')
	));
	*/
	wp_localize_script('lib', 'MAGNETI', array(
		'siteurl' => get_option('siteurl')
	));
}

/******************************************************************/
/*   Friendly Block Titles - combine nice name and module name    */
/******************************************************************/

function my_layout_title($title, $field, $layout, $i) {
	if($value = get_sub_field('layout_title')) {
		return $value . ' - ' . $title;
	} else {
		foreach($layout['sub_fields'] as $sub) {
			if($sub['name'] == 'layout_title') {
				$key = $sub['key'];
				if(array_key_exists($i, $field['value']) && $value = $field['value'][$i][$key])
					return $value;
			}
		}
	}
	return $title;
}
add_filter('acf/fields/flexible_content/layout_title', 'my_layout_title', 10, 4);


// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

// [circlequote text="message here"]
function circlequote_func( $atts ) {
	$a = shortcode_atts( array(
		'text' => 'something',
	), $atts );

	return "<div class='circle-quote'><div class='content'>{$a['text']}</div></div>";
}
add_shortcode( 'circlequote', 'circlequote_func' );

// [socialicons]
function socialicons_func( $atts ) {
	$a = shortcode_atts( array(
	), $atts );
	$socials = get_field('social_icons', 'option');

	$html = '<div class="social-icons-list"><ul class="social-icons-list-ul">';

	if(is_array($socials) && count($socials)):
		
		foreach($socials as $icon):

			$html .= '<li>';
			$html .= "<a target='_blank' class='social-icons-list-item social-icon social-icon-" . $icon['icon'] . "' href='" . $icon['url'] . "' title='DesignWealth on " . $icon['destination_name'] . "'>";
			$html .= "</a>";
			$html .= '</li>';
			
		endforeach;
	endif;
	
	
	$html .= '</ul></div>';

	return $html;
}
add_shortcode( 'socialicons', 'socialicons_func' );

// [accordion text="message here"]Content goes here[/accordion]
function awd_accordion_shortcode_func( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'title' => 'Title Goes Here',
	), $atts );

	return "<div class='awd-accordion'><h3 class='awd-accordion-title h-2xl'>{$a['title']}</h3><a href='#' class='awd-accordion-toggle'>Read More<span class='icon'></span></a><div class='awd-accordion-content'><p>{$content}</p></div></div>";
}
add_shortcode( 'accordion', 'awd_accordion_shortcode_func' );


/*
 * Register Classes post type
*/
add_action( 'init', 'awd_register_classes_post_type' );
function awd_register_classes_post_type() {
	$args = array(
		'label' => 'Classes',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'publicly_queryable' => true,
		'has_archive' => true,
		'rewrite' => [
			'slug' => 'classes',
			'pages' => true
		],
		'query_var' => true,
		'menu_icon' => 'dashicons-format-video', // See Icon --> https://developer.wordpress.org/resource/dashicons/#format-video
		'supports' => ['title', 'editor', 'thumbnail']
	);
	register_post_type( 'awd_classes', $args );
}

function getClasses($numberposts = -1, $orderBy = 'meta_value', $metaKey = 'class_date', $order = 'DESC') {
	$args = array(
		'numberposts' => $numberposts,
		'orderby' => $orderBy,
		'meta_key' => $metaKey,
		'order' => $order,
		'post_type'   => 'awd_classes'
	);
	return get_posts($args);
}


function debugArgs($arr) {
	echo "<pre style='padding: 1rem; font-size: .875rem; background-color: white; color: #333'>";
	die(print_r($arr));
}


function restrict_upload_mimes() {
	if (current_user_can( 'administrator') && !defined('ALLOW_UNFILTERED_UPLOADS')){
			define('ALLOW_UNFILTERED_UPLOADS', true);
	}
}
add_action( 'admin_init', 'restrict_upload_mimes', 1 );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

function truncateString($string, $your_desired_width) {
  $parts = preg_split('/([\s\n\r]+)/', $string, null, PREG_SPLIT_DELIM_CAPTURE);
  $parts_count = count($parts);

  $length = 0;
  $last_part = 0;
  for (; $last_part < $parts_count; ++$last_part) {
    $length += strlen($parts[$last_part]);
    if ($length > $your_desired_width) { 
			$updatedParts = array_slice($parts, 0, $last_part);
			$updatedParts[] = '...';
			$parts = $updatedParts;
			break; 
		}
  }

  return implode($parts);
}