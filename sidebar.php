 

<div id="side">
	<div id="arrow"></div>
        <div class="side_content">

            <div id="side_logo">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/logo.png">
            </div>

            <div id="side_title">
                <div class="sub_head"><?php bloginfo('name'); ?> </div>
                <p><?php bloginfo('description'); ?> </p>
            </div>
    	    
            <p id="subscribe"><a href="http://feeds.feedburner.com/drecodeam">Subscribe | RSS feed</a></p>
		
	    <div id="sidebar">
               <?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar() ) : ?>  

		<div id="side_pages">
		    <?php wp_list_pages('title_li='); ?>
		</div>

        
		<div id="side_cat">
		    <div class="sub_head">|CATEGORIES|</div><br>
		    <?php wp_list_cats(); ?>
		</div>
		<?php endif; ?>
	   </div>     
	</div>
	
	<div class="popover">
	</div>
</div>
</div>
        

