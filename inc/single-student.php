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
				

		        <h1>Student Profile</h1>

		        <p>Name: <span><?php the_title(); ?></span></p>

		        <?php

				$student_address = get_post_meta($post->ID, 'student_address', true);

				if($student_address) {

				echo 'Student Address:' . $student_address;

				}

				?>
		        
		        <p>Message: <span><?php the_content(); ?></span></p>
		        <p>
		        	Student ID: <?php echo get_post_meta($post->ID, 'student_id', true); ?>
		        </p>




		    <?php endwhile; ?>
		<?php endif; ?>
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>