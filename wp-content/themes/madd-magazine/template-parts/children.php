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

    <aside id="sidebar-center" class="sidebar-wrap">
        <div class="sidebar-widget">
            <div id="recent-posts-widget-with-thumbnails-5" class="recent-posts-widget-with-thumbnails sidebar-widget"><div id="rpwwt-recent-posts-widget-with-thumbnails-5" class="rpwwt-widget">	
                    <div class="row">
                        <div class="col-md-2 small-news">
                            <div class="small-news-title">Title</div>
                            <ul>                               
                                <?php foreach (get_posts_by_category(3, 5, 2) as $post) { ?>
                                <li class="wrap-flex">
                                    <span class="marker-wrap wrap-flex"><span class="marker"></span></span>  
                                    <a class="small-news-item-title" href="<?php echo get_permalink($post->ID) ?>">
                                                                            
                                        <?php echo $post->post_title ?>
                                    </a>  
                                </li>                                           
                               <?php } ?>                           
                            </ul>
                        </div>
                        <div class="col-md-10 big-news">
                            <div class="row">
                                <?php foreach (get_posts_by_category(3, 2) as $post) { ?>
                                <div class="col-md-5">
                                    <div class="sidebar-wrap-grid-list">
                                        <a class="sidebar-wrap-grid-list-img" href="<?php echo get_permalink($post->ID) ?>">
                                            <?php the_post_thumbnail(); ?>
                                        </a>
                                        <div class="rpwwt-post-info">
                                            <a href="<?php echo get_permalink($post->ID) ?>">
                                                <span class="post-title"><?php echo $post->post_title ?></span>
                                            </a>
                                            <span class="post-description">Google — американская транснациональная публичная корпорация, реорганизованная 2 октября 2015 года в международный конгломерат Alphabet Inc.</span>
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
                        </div>                       
                    </div>
                </div><!-- .rpwwt-widget -->
            </div>
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-widget2'))  ?>
        </div>
    </aside>
</div><!-- #sidebar-center -->
