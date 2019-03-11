<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Madd_Magazine
 */
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="page-content">
            <div class="health">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <?php get_template_part('template-parts/content', 'slider'); ?>



                            <?php if (is_home() && !is_front_page()) : ?>
                                <header>
                                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                </header>
                            <?php endif; ?>

                        </div>
                        <?php
                        get_sidebar();
                        ?>
                    </div>
                </div>	
            </div>
            <div class="sidebar-wrap-grid fashion">
                <div class="container">
                    <div class="row">
                        <?php
                        get_template_part('template-parts/sidebar', 'right');
                        ?>
                    </div>
                </div>	
            </div>
            <div class="sidebar-wrap-grid children">	
                <div class="container">
                    <div class="row">
                        <?php
                        get_template_part('template-parts/children');
                        ?>
                    </div>
                </div>
            </div>
            <div class="sidebar-wrap-grid recipe">	
                <div class="container">
                    <div class="row">
                        <?php
                        get_template_part('template-parts/recipe');
                        ?>
                    </div>
                </div>
            </div>
            <div class="sidebar-wrap-grid relations">	
                <div class="container">
                    <div class="row">
                        <?php
                        get_template_part('template-parts/relations');
                        ?>
                    </div>
                </div>
            </div>
            <div class="sidebar-wrap-grid people">	
                <div class="container">
                    <div class="row">
                        <?php
                        get_template_part('template-parts/people');
                        ?>
                    </div>
                </div>
            </div>
            <div class="block_4">	
                <div class="container">
                    <div class="row infinity" id="infinity-home-page">
                        <div class="col-md-9 add-content">
                            <?php get_infinity_posts(); ?>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
