<?php /* Template Name: Home */  ?>

<?php get_header();  ?>


<?php
	$the_query = new WP_Query(array('post_type'=>'page', 'pagename'=>'home'));
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>

	<?php the_content(); ?>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto beatae commodi, possimus quae voluptas quibusdam facere repellat omnis illum iste praesentium quis nostrum fuga provident placeat! Vitae magni, magnam.</p>

<?php
	endwhile; wp_reset_query();
?>


<?php get_footer();  ?>
