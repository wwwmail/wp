<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Madd_Magazine
 */
?>

<div class="col-md-6">
    <aside id="sidebar-left" class="sidebar-wrap">
        <div class="sidebar-widget">
            <div id="recent-posts-widget-with-thumbnails-5-new" class="recent-posts-widget-with-thumbnails sidebar-widget">
                <div id="rpwwt-recent-posts-widget-with-thumbnails-5" class="rpwwt-widget sidebar-left-post">	
                    <ul>
                        <?php foreach (get_posts_by_category(2, 2) as $post) { ?>
                            <li>
                                <a class="rpwwt-post-img" href="<?php echo get_permalink($post->ID) ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                                <span class="rpwwt-post-content">
                                    <a class="post-title" href="<?php echo get_permalink($post->ID) ?>"><?php echo $post->post_title ?></a>
                                    <span class="post-description">
                                        description description description
                                    </span>
                                    <span class="rpwwt-post-date">
                                        <?php echo date("d", strtotime($post->post_date)); ?> 
                                        <?php echo getRussianMonths()[date("n", strtotime($post->post_date)) - 1]; ?> 
                                        <?php echo date("Y", strtotime($post->post_date)); ?> 

                                    </span>
                                </span>
                                
                            </li>
                        <?php } ?>
                    </ul>
                </div><!-- .rpwwt-widget -->
            </div>
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-widget'))  ?>
        </div>
    </aside>
</div><!-- #sidebar-left -->
