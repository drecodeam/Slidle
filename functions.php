<?php
if ( function_exists('register_sidebar') )
register_sidebar(array(
'before_widget' => '<div class="side_widget">',
'after_widget' => '</div>',
'before_title' => '<div class="widget_title">',
'after_title' => '</div>',
));
?>