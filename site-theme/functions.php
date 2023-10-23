<?php


function portfolio_theme_support()
{
    //add dynamic title 
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_theme_support('widgets');

}
add_action('after_setup_theme','portfolio_theme_support');

function portfolio_menu(){
    $location =array(
        'primary'=>'primary menu',
        'footer'=>'footer menu'
        
    );
    register_nav_menus($location);
    
}
add_action('init','portfolio_menu');
function portfolio_register_style()
{
    // Enqueue styles
    wp_enqueue_style('portfolio-style', get_template_directory_uri() . "asset/style/css/style.css", array(), '1.0', 'all');
    wp_enqueue_style('portfolio-fontawesome', get_template_directory_uri() . "/assets/fonts/fontawesome-free-6.4.0-web/css/all.css", array(), '1.0', 'all');
    
}
add_action("wp_enqueue_scripts", 'portfolio_register_style');

function portfolio_register_scripts()
{
    // Enqueue scripts
    wp_enqueue_script('portfolio-script-header', get_template_directory_uri() . "/assets/js/header.js", array(), '1.0.1', true);
    wp_enqueue_script('portfolio-script-footer', get_template_directory_uri() . "/assets/js/footer.js", array(), '1.0.1', true);
    wp_enqueue_script('portfolio-script-home', get_template_directory_uri() . "/assets/js/home.js", array(), '1.0', true);
}
add_action("wp_enqueue_scripts", 'portfolio_register_scripts');
include('custom-shortcodes.php');

//woocommerce style

function remove_woocommerce_styles($enqueue_styles){
        unset($enqueue_styles['woocommerce-general']);
        return $enqueue_styles; 
    }
    add_filter('woocommerce_enqueue_styles' , 'remove_woocommerce_styles');
    function wp_enqueue_woocommerce_style(){
        wp_register_style('portfolio-woocommerce', get_template_directory_uri() . "assets/style/css/woocommerce.css");
        if (class_exists('woocommerce')) {
            wp_enqueue_style('portfolio-woocommerce');
        }
    }
    add_action('wp_enqueue_scripts','wp_enqueue_woocommerce_style');
    ?>