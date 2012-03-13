<?php
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'LeftSideBar',
'id' => 'left-sidebar',
'description' => 'The main left sliding sidebar.',
'before_widget' => '<div class="side_widget">',
'after_widget' => '</div>',
'before_title' => '<div class="widget_title">',
'after_title' => '</div>',
));

add_theme_support( 'automatic-feed-links' );

?>