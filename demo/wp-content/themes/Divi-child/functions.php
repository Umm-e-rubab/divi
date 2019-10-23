<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

    add_shortcode( 'show_latest_posts', 'display_custom_post_type' );

    function display_custom_post_type(){
        $args = array(
            'post_type' => 'look_book',
            'posts_per_page' => 10,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'post_status' => 'publish'
        );

        $string = '';
        $query = new WP_Query( $args );
        if( $query->have_posts() ){
            $string .= '<div class="main-row">';
            while( $query->have_posts() ){
                $query->the_post();
                $string .= '<div>' . get_the_title() . '</div>';
                $string .= '<div>' . get_the_excerpt() . '</div>';
            }
            $string .= '</ul>';
        }
        wp_reset_postdata();
        return $string;
    }
?>

