<?php
register_nav_menus(
    array('primary-menu'=>'Top menu')
);
add_theme_support('post-thumbnails');
add_theme_support('custom-header');

register_sidebar(
    array(
        'name'=> "sidebar location",
        'id'=>"sidebar"
    )
    );
    add_theme_support('custom-background');
    add_post_type_support('page','excerpt');

    // short code
    // function my_shortcode(){
    //   $message=  "<h2>hello word</h2>";
    //   return $message;
    // }
    // add_shortcode('webpenter','my_shortcode')
    // [webpenter] 
?>
