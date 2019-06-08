<?php /* Template Name: Web Gallery */
include( 'header.php' ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<header class="container">
		<h1><?php the_title(); ?></h1>
		<p class="big-text intro"><?php the_content(); ?></p>
	</header>

    <?php $args = [
        'post_type'         => 'web_project',
        'posts_per_page'    => -1,
    ];

    include( 'partials/gallery.php' ); ?>

<?php endwhile; endif; ?>

<?php include( 'footer.php' ); ?>