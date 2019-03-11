<?php if (have_posts()) : ?>
    <div class="container">
        <div class="row">
            <div class="col-md-9">


                <?php
                $x = 0;
                $y = 0;
                while (have_posts()) : the_post();

                    get_template_part('template-parts/content', 'archive');

                endwhile;
                ?>
            </div>
            <div class="col-md-3">
                <?php get_template_part('template-parts/content', 'reklama'); ?>
            </div>
            <?php
            ?>
        </div>
    </div>
    <?PHP
else :
// get_template_part('template-parts/content', 'reklama');

endif;
?>