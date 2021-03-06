<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Madd_Magazine
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <?php
                        while (have_posts()) : the_post();

                            get_template_part('template-parts/content', get_post_type());
                            get_template_part('template-parts/social-single');
                            // If comments are open or we have at least one comment, load up the comment template.
                            if (comments_open() || get_comments_number()) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>
                    </div>
                    <?php
                   
                    get_template_part('template-parts/sidebar-single');
                    ?>
                </div>
            </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
