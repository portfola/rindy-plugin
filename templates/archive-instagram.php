<?php
/**
 * The template for displaying Instagram archives.
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title">My Instagram Feed - <a href="http://instagram.com/portfola">@portfola</a></h1>
			</header><!-- .archive-header -->

			<div id="wrapper">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
					<div class="entry-thumbnail">
						<a href="<?php the_permalink(); ?>" rel="bookmark" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('insta-med'); ?></a>
					</div>
					<?php endif; ?>
					<div class="entry-meta">
						<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-meta -->
				
					<h3><?php the_title(); ?></h3>
					<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>' ) ); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>

				</article><!-- #post -->

			<?php endwhile; ?>
			</div>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>