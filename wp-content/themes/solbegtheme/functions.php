<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */

add_theme_support('title-tag');

register_nav_menus(array(
	'top' => 'Top',
	'bottom' => 'Bottom'
));

add_theme_support('post-thumbnails');
set_post_thumbnail_size(300, 200);

if (!function_exists('pagination')) {
	function pagination() {
		global $wp_query;
		$big = 999999999;
		$links = paginate_links(array(
			'base' => str_replace($big,'%#%',esc_url(get_pagenum_link($big))),
			'format' => '?paged=%#%',
			'current' => max(1, get_query_var('paged')),
			'type' => 'array',
			'prev_text'    => __('Back', 'solberg'),
	    	'next_text'    => __('Forward', 'solberg'),
			'total' => $wp_query->max_num_pages,
			'show_all'     => false,
			'end_size'     => 2,
			'mid_size'     => 2,
			'add_args'     => false,
			'add_fragment' => '',
			'before_page_number' => '',
			'after_page_number' => ''
		));
	 	if( is_array( $links ) ) {
		    echo '<ul class="pagination">';
		    foreach ( $links as $link ) {
		    	if ( strpos( $link, 'current' ) !== false ) echo "<li class='active'>$link</li>";
		        else echo "<li>$link</li>"; 
		    }
		   	echo '</ul>';
		 }
	}
}

add_action('wp_footer', 'add_scripts');
if (!function_exists('add_scripts')) {
	function add_scripts() {
	    if(is_admin()) return false;
	    wp_deregister_script('jquery');
	    wp_enqueue_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js','','',true);
        wp_enqueue_script( 'my-filter', get_template_directory_uri(). '/js/filter.js', [], true );
        wp_enqueue_script( 'my-render', get_template_directory_uri(). '/js/render.js', [], true );


        wp_add_inline_script( 'my-filter', 'const PHPDATA = ' . json_encode( [
            'ajaxUrl' => admin_url( 'admin-ajax.php' ),
            'security' => wp_create_nonce('my-filter-nonce'),
        ] ), 'before' );
	}
}



add_action('wp_print_styles', 'add_styles');
if (!function_exists('add_styles')) {
	function add_styles() {
	    if(is_admin()) return false;
		wp_enqueue_style( 'main', get_template_directory_uri().'/style.css' );
	}
}

function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}

add_action( 'wp_ajax_filter', 'filter_handler' );
add_action( 'wp_ajax_nopriv_filter', 'filter_handler' );
 
function filter_handler(){
    
    if( !empty(clean($_POST['security'])) && ! wp_verify_nonce( $_POST['security'], 'my-filter-nonce') )
	    die('We are have a security problem here.');

    if (!empty(clean($_POST['slug']))) {
        $params = [
            'orderby' => 'title',
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => $_POST['slug']
                )
            )
        ];
    
        
        $my_query = new WP_Query($params);

        if ($my_query->have_posts()) {
            while($my_query->have_posts()) {
                $my_query->the_post();
                $html += get_template_part('loop');
            }
        }
        echo $html;
        die();
    } 
    
    die('We are have a security problem here.');
	
}


add_action('wp_insert_post', function ($post_id) {
    if ( get_post_type($post_id) == 'post' ) {
        add_post_meta($post_id, 'solbeg', 'Additional task', true);
    }
    return true;
});