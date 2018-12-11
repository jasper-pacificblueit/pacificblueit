<?php /* Template Name: About Us */  ?>

<?php get_header();  ?>



<?php
$the_query = new WP_Query(array('post_type'=>'page', 'pagename'=>'home'));
while ( $the_query->have_posts() ) : $the_query->the_post();
?>

<?php the_content(); ?>


<?php
endwhile; wp_reset_query();
?>


<?php get_footer();  ?>
