<?php
    add_theme_support( 'post-thumbnails' );

    function kosabe_register_styles(){
        wp_enqueue_style('kosabe_styles', get_template_directory_uri() . "/assets/scss/style.css", array(), '1.0', 'all');
        wp_enqueue_style('kosabe_owl_styles', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css", array(), '1.0', 'all');
        wp_enqueue_style('kosabe_owl_theme_styles', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css", array(), '1.0', 'all');
    }
    add_action('wp_enqueue_scripts', 'kosabe_register_styles');


    function kosabe_scripts(){
        wp_enqueue_script('kosabe-jquery', "https://code.jquery.com/jquery-3.6.0.min.js", array(), '3.6', true);
        wp_enqueue_script('kosabe-owl-script', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js", array(), '3.6', true);
        wp_enqueue_script('kosabe-fontawe-script', "https://kit.fontawesome.com/d6c8aac0cb.js", array(), '3.6', true);
        
        wp_enqueue_script('kosabe-script', get_template_directory_uri(). "/assets/js/main.js", array(), '1.0', 'all', true);
    }
    add_action('wp_enqueue_scripts', 'kosabe_scripts');

    if (!function_exists('my_pagination')):
        function my_pagination()
    {
            global $wp_query;
            $big = 999999999; // need an unlikely integer
            echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'prev_text' => __('←'),
                'next_text' => __('→'),
                'current' => max(1, get_query_var('paged')),
                'total' => $wp_query->max_num_pages,
            ));
        }
    endif;

    
?>