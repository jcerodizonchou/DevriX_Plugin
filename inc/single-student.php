<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
		    <?php while ( have_posts() ) : the_post(); ?>

		        <h1>Student Profile - inc/single</h1>

		        <p>Name: <span><?php the_title(); ?></span></p>
		        <p>Name: <span><?php the_title(); ?></span></p>



		    <?php endwhile; ?>
		<?php endif; ?>
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>