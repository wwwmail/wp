<?php

$related = get_posts(
        array(
            'category__in' => wp_get_post_categories(get_the_ID()),
            'numberposts' => 5,
            'post__not_in' => array(get_the_ID())
        )
);

if ($related) {
    ?>

    <div class="sidebar-wrap">
        <div class="sidebar-widget">
            <div id="recent-posts-widget-with-thumbnails-5" class="recent-posts-widget-with-thumbnails sidebar-widget">
                <div id="rpwwt-recent-posts-widget-with-thumbnails-5" class="rpwwt-widget">
                   
                    <ul>
                        <?php foreach ($related as $post) { ?>
                            <li>
                                <a href="<?php echo get_permalink($post->ID) ?>">
                                    <?php the_post_thumbnail(); ?>
                                    <span class="rpwwt-post-title"><?php echo $post->post_title ?></span>
                                </a>
                                <span class="rpwwt-post-date">
                                    <?php echo date("d", strtotime($post->post_date)); ?> 
                                    <?php echo getRussianMonths()[date("n", strtotime($post->post_date)) - 1]; ?> 
                                    <?php echo date("Y", strtotime($post->post_date)); ?> 

                                </span>
                            </li>
                        <?php } 
                        wp_reset_postdata();
                        ?>
                    </ul>
                </div><!-- .rpwwt-widget -->
            </div>
           
    </div>

    <?php
}
