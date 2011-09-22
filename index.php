<?php get_header(); ?>
    <body>
    <div id="side">
        <div id="arrow">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/arrow.png" width="30px;">
        </div>
        <div id="arrow_close">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/arrow_close.png" width="30px;">
        </div>
        
        <div class="side_content">
        <div id="side_logo">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/logo.png">
        </div>
        <div id="side_title">
                <div class="sub_head"><?php bloginfo('name'); ?> </div><p><?php bloginfo('description'); ?> </p></div>
    <p id="subscribe"><a href="http://feeds.feedburner.com/drecodeam">Subscribe | RSS feed</a></p>

        <div id="side_cat">
            <div class="sub_head">|CATEGORIES|</div><br>
            <?php wp_list_cats(); ?>
        </div>
        </div>
        </div>
    
    <div id="header">
        <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?> </a></div>

    <div class="header_desc">
    <?php bloginfo('description'); ?></div>
    </div>
        
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <!-- Post Time Info , Category and Comments Start-->
                        <div class="post_info">
                            <div class="post_date">
                                <?php the_time('j') ?>/
                                <?php the_time(' n ') ?>
                            </div>
                        
                            <div class="post_category">
                                <?php the_category(', ') ?>
                            </div>
                        
                            <div class="post_comment" >             
                                <?php comments_popup_link('0', '1', '%'); ?>
                            </div>
                            <div class="post_tweet">
                             <img src="<?php bloginfo('stylesheet_directory'); ?>/twitter.png" height="40px">
                            <a href="http://twitter.com/share?url=<?php echo urlencode(the_permalink()); ?>&amp;text=<?php echo urlencode(the_title()); ?>&amp;via=drecodeam&amp;related=drecodeam">Tweet This</a>
                            </div>
        </div>
                        <!-- Post Time Info , Category, Tags End-->
                        
                        <div class="post_entry">
                        <!-- Title Start-->       
                        <div class="post_title"><a  href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                        <?php the_title(); ?>
                        </a> </div>
                        <!-- Title End-->

                        <!-- Text Start-->
                        <div class="post_text">
<?php the_content( $more_link_text, $strip_teaser ); ?>
                        </div>
                        <div id="read_more">
                           <a  href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"> read more ...</a>
                        </div>
                        </div>
                        <!-- Text End-->


    
<?php endwhile;?>
<?php endif;?>
</div>
    <?php get_footer(); ?>