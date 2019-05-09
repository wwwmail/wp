<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Madd_Magazine
 */
?>

<div class="col-md-12">

    <aside id="sidebar-right" class="sidebar-wrap">
        <div class="sidebar-widget">
            <div id="recent-posts-widget-with-thumbnails-5" class="recent-posts-widget-with-thumbnails sidebar-widget"><div id="rpwwt-recent-posts-widget-with-thumbnails-5" class="rpwwt-widget">	
                    <div class="row">
                        <?php foreach (get_posts_by_category(3, 5) as $post) { ?>
                            <div class="col-md-3">
                                <div class="sidebar-wrap-grid-list">
                                    <a class="sidebar-wrap-grid-list-img" href="<?php echo get_permalink($post->ID) ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                    <div class="rpwwt-post-info">
                                        <a href="<?php echo get_permalink($post->ID) ?>">
                                            <span class="post-title"><?php echo $post->post_title ?></span>
                                        </a>
                                        <span class="post-description"><?php echo mb_substr ( wp_strip_all_tags( $post->post_content ), 0, 200);?></span>
                                        <span class="rpwwt-post-date">
                                            <?php echo date("d", strtotime($post->post_date)); ?> 
                                            <?php echo getRussianMonths()[date("n", strtotime($post->post_date)) - 1]; ?> 
                                            <?php echo date("Y", strtotime($post->post_date)); ?> 

                                        </span>
                                    </div> 
                                </div>                                                 
                            </div>
                        <?php } ?>
                    </div>
                </div><!-- .rpwwt-widget -->
            </div>
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-widget2'))  ?>
        </div>
    </aside>
</div><!-- #sidebar-right -->
