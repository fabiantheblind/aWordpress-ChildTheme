<?php
/**
 * Template Name: GoogleMaps
 * The template for displaying maps.
 *
 * This is the template that displays all pages by default.
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<?php get_template_part( 'header','images'); ?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <div id="map_canvas"></div>
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'aWordpressChildTheme' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
          </div><!-- .entry-content -->
  <!-- maps -->
          <footer class="entry-meta">
            <?php edit_post_link( __( 'Edit', 'aWordpressChildTheme' ), '<span class="edit-link">', '</span>' ); ?>
          </footer><!-- .entry-meta -->
        </article><!-- #post -->

        <?php comments_template(); ?>
      <?php endwhile; ?>
    </div><!-- #content -->
  </div><!-- #primary -->


<?php get_footer(); ?>