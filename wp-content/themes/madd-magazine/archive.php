<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Madd_Magazine
 */
$category = get_category(get_query_var('cat'));
$cat_id = $category->cat_ID;
get_header();
?>

<?php ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="page-content" data-attr-category="<?php echo $cat_id ?>">
            <div class="container">
                <div class="row category-content">
                    <div class="col-md-9">
                        <div class="row">
                            <?php if (have_posts()) : ?>

                                <?php if (is_home() && !is_front_page()) : ?>
                                    <header>
                                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                    </header>
                                <?php endif; ?>

                                <?php
                                $x = 0;
                                $y = 0;
                                while (have_posts()) : the_post();
                                    $y++;
                                    if ($y < 13) {
                                        get_template_part('template-parts/content', 'archive');
                                    }
//								

                                endwhile;

                            else :
                                get_template_part('template-parts/content', 'none');

                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="col-md-3">

                        <?php get_template_part('template-parts/content', 'reklama'); ?>

                        <div class="popular-posts-list">
                            <?php
                            $args = array(
                                'limit' => 5,
                                'excerpt_length' => 55,
                                'thumbnail_width' => 200,
                                'thumbnail_height' => 130,
                                'post_html' => '<li><img src={thumb_url}> <a href="{url}">{text_title}</a> {summary}</li>'
                            );

                            wpp_get_mostpopular($args);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->


<?php
get_footer();
