<?php
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
add_filter('show_admin_bar', 'remove_admin_bar');

function remove_admin_bar() {
    return false;
}
/**
 * Disable the emoji's
 */
function disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
    add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
}
add_action('init', 'disable_emojis');
/**
 * Filter function used to remove the tinymce emoji plugin.
 */
function disable_emojis_tinymce($plugins) {
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}

function disable_emojis_remove_dns_prefetch($urls, $relation_type) {
    if ('dns-prefetch' == $relation_type) {
        /** This filter is documented in wp-includes/formatting.php */
        $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');

        $urls = array_diff($urls, array($emoji_svg_url));
    }

    return $urls;
}

function my_deregister_scripts() {
    wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'my_deregister_scripts');

function page_assets_includes() {
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_register_style('owlcarousel_styles', get_template_directory_uri().
            '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all');
        wp_enqueue_style('owlcarousel_styles'); // Enqueue it!

        wp_register_style('theme_styles', get_template_directory_uri().
            '/style.css', array(), '1.0.0', 'all');
        wp_enqueue_style('theme_styles'); // Enqueue it!
        
        wp_register_script('owlcarousel', get_template_directory_uri().
            '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0'); // OwlCarousel
        wp_enqueue_script('owlcarousel'); // Enqueue it!

        wp_register_script('dotdotdot', get_template_directory_uri().
            '/assets/js/jquery.dotdotdot.min.js', array('jquery'), '1.0.0'); // dotdotdot
        wp_enqueue_script('dotdotdot'); // Enqueue it!

        wp_register_script('html5blankscripts', get_template_directory_uri().
            '/assets/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('html5blankscripts'); // Enqueue it!
    } 
}
add_action('init', 'page_assets_includes');
add_theme_support( 'post-thumbnails', array( 'post', 'page', 'goods', 'news' ) );

add_action('init', 'my_custom_init');
function my_custom_init(){
    register_post_type('goods', array(
        'labels'             => array(
            'name'               => 'Товари',
            'singular_name'      => 'Товари',
            'add_new'            => 'Додати',
            'add_new_item'       => 'Додати',
            'edit_item'          => 'Редагувати',
            'new_item'           => 'Новий запис',
            'view_item'          => 'Переглянути',
            'search_items'       => 'Шукати',
            'not_found'          => 'Не знайдено',
            'not_found_in_trash' => 'Не знайдено в кошику',
            'parent_item_colon'  => '',
            'menu_name'          => 'Товари'

        ),
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon' => 'dashicons-cart',
        'supports' => array( 'title', 'editor', 'thumbnail')
    ) );
    register_post_type('news', array(
        'labels'             => array(
            'name'               => 'Новини',
            'singular_name'      => 'Новини',
            'add_new'            => 'Додати',
            'add_new_item'       => 'Додати',
            'edit_item'          => 'Редагувати',
            'new_item'           => 'Новий запис',
            'view_item'          => 'Переглянути',
            'search_items'       => 'Шукати',
            'not_found'          => 'Не знайдено',
            'not_found_in_trash' => 'Не знайдено в кошику',
            'parent_item_colon'  => '',
            'menu_name'          => 'Новини'

        ),
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon' => 'dashicons-cart',
        'supports' => array( 'title', 'editor', 'thumbnail')
    ) );
}