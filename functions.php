<?php


    //Cuando se activa el theme
    function chopitea_setup() {

        //Habilitación de imagenes destacadas
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'chopitea_setup');



    // Menus de navegación, agregar más utilizando el array
    function chopitea_menus() {
        register_nav_menus(array(
            'menu-principal' => __( "Menu Principal", 'chopitheme' )
        ));
    }

    add_action('init', 'chopitea_menus');


    // Scripts y Styles
    function chopitea_scripts_styles() {
        // Hoja de estilos principal
        wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
    }
    add_action('wp_enqueue_scripts', 'chopitea_scripts_styles');

    //Customize excerpt
    function end_with_sentence( $excerpt ) {

        if ( ( $pos = mb_strpos( $excerpt, '.' ) ) !== false ) {
            $excerpt = substr( $excerpt, 0, $pos + 1 );
        }

        return $excerpt;
    }
    add_filter( 'the_excerpt', 'end_with_sentence' );

    //Add dependencies
    function launch_scripts_and_styles() {
	    global $wp_styles;
        if (!is_admin()) {

            wp_register_script( 'slick', get_stylesheet_directory_uri() . '/assets/js/slick-carousel/slick.min.js', array('jquery'), '', true );
            wp_register_script( 'google-maps', "https://maps.googleapis.com/maps/api/js?key=AIzaSyC33lbvpJIzMraQsmXX5vdoGznqfcGrBSw", array('jquery'), '', true );		
            wp_register_style( 'slick', get_stylesheet_directory_uri() . '/assets/js/slick-carousel/slick.css', array(), '', 'all' );

            if ( is_single() ) {
                wp_enqueue_style( 'slick' );
                wp_enqueue_script( 'slick' );
                wp_enqueue_script( 'google-maps' );
            }
        }
    }
    add_action( 'wp_enqueue_scripts', 'launch_scripts_and_styles' );


    function chopitea_words_limit( $length ) {
        if ( is_admin() ) {
          return $length;
        }
        return 15;
      }
      add_filter( 'excerpt_length', 'chopitea_words_limit', 99 );



      function estilos_login(){
        wp_enqueue_style('login-css', site_url().'/wp-content/themes/chopitheme/assets/css/login.css', array(), '1.0');
    }
    add_action('login_head', 'estilos_login');



?>