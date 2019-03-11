<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Madd_Magazine
 */

?>

<article id="post-<?php the_ID(); ?>" class="blog-post-wrap feed-item col-md-6">
	<div class="blog-post-inner">
		<div class="blog-post-image">
			<?php if ( has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail('madd-magazine-blog-post'); ?>
					<?php if ( has_post_format( 'video' )) : ?>
						<span class="video-label"></span>
					<?php endif; ?>
				</a>
			<?php endif; ?>
		</div>
		<div class="blog-post-content">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><span class="post-title"><?php the_title(); ?></span></a>
			<div class="post-description">post-description</div>
			<div class="date"><?php the_time('F j, Y'); ?></div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
