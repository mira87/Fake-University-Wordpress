<?php



if ( ! function_exists( 'myfirsttheme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function myfirsttheme_setup() {
     
        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );
     
        /**
         * Add default posts and comments RSS feed links to <head>.
         */
        add_theme_support( 'automatic-feed-links' );
     
        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support( 'post-thumbnails' );
     
        /**
         * Add support for two custom navigation menus.
         */
        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
            'secondary' => __('Secondary Menu', 'myfirsttheme' )
        ) );
     
        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );


        
      
        function university_files(){
            // for the scripts enqueue wp wants to know where to look for file then if it depends on another file if doesnt can just put NULL then the vs can just put 1.0 then if want to load at bottom of document can say true or false true for yes
            wp_enqueue_script('find-the-scripts-girl',get_theme_file_uri('/js/scripts-bundled.js'),NULL, '1.0',true);
            wp_enqueue_style('get_those_fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
            wp_enqueue_style('font-awesomeness','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
            wp_enqueue_style( 'style', get_stylesheet_uri());
        }
       


    }
    add_action('wp_enqueue_scripts','university_files');



    endif; // myfirsttheme_setup
    add_action( 'after_setup_theme', 'myfirsttheme_setup' );

    function myCreatedFunction(){
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme','myCreatedFunction');

    // add_action('type of instruction','name of function to run')
   
    // add_action tells wp to do something
    // add_theme_support tells it to enable a feature for a theme

?>