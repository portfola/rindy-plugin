<?php
/**
 * The Template for displaying all single Instagram posts.
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					$url = $thumb['0']; ?>
				<a href="<?php echo $thumb[0]; ?>" rel="bookmark" alt="" title=""><?php the_post_thumbnail('large'); ?></a>
		
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>