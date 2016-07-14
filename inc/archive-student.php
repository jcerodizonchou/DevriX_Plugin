<?php
/*
* This to display the archive data of the student.
*
*/
get_header(); ?>

<?php

 $query = new WP_Query( array('post_type' => 'student', 'posts_per_page' => 5 ) );

 while ( $query->have_posts() ) : $query->the_post(); ?>

// Code here...
	the_content();

<?php endif; wp_reset_postdata(); ?>
<?php endwhile; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>