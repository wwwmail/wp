
    <div id="post-<?php the_ID(); ?>" class="infinity_scrol_item blog-post-more-wrap feed-item">
        <div class="blog-post-more-inner">
            
                <?php if (has_post_thumbnail()) : ?>
                    <a class="blog-post-more-image" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail('madd-magazine-blog-post'); ?>
                        <?php if (has_post_format('video')) : ?>
                            <span class="video-label"></span>
                        <?php endif; ?>
                    </a>
                <?php endif; ?>
          
            <div class="blog-post-more-content">
                <h2>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h2>
                <div class="blog-post-more-description">
                    test testets test 
                </div>  
                <div class="date"><?php the_time('F j, Y'); ?></div>
                <div class="categories-wrap">
                    <?php the_category(); ?>
                </div>
            </div>
        </div>
    </div>
