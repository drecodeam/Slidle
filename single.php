<?php get_header(); ?>
<?php get_sidebar(); ?>

 
    
        
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <!-- Post Time Info , Category and Comments Start-->
                        <div class="post_info">
                            <div class="post_date">
                            <?php the_time('j') ?>/<?php the_time(' n ') ?>
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
                        
                        <div class="spacer"></div>
                        
                        </div>
                        <!-- Text End-->


    <div class="comments-template">
                <?php comments_template(); ?>
                
            </div>
    <ol class="commentlist">
<?php wp_list_comments(); ?>
</ol>
    
<?php endwhile;?>

<div class="navigation">
        <div class="prev"><?php previous_post_link('< %link') ?></div>
        <div class="next"><?php next_post_link(' %link >') ?></div>
        <div class="spacer"></div>
    </div>
 
<?php endif;?>

</div>
    
   <?php get_footer(); ?>

