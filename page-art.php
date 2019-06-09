<?php /* Template Name: Art Gallery */
include( 'header.php' ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<header class="container">
		<h1><?php the_title(); ?></h1>
		<p class="big-text intro"><?php the_content(); ?></p>
	</header>

    <!-- Traditional -->
    <?php $args = [
        'post_type'         => 'art_project',
        'cat'               => 3,
        'posts_per_page'    => -1,
    ];
    include( 'partials/gallery.php' ); ?>

    <!-- Digital -->
    <?php $args = [
        'post_type'         => 'art_project',
        'cat'               => 4,
        'posts_per_page'    => -1,
    ];
    include( 'partials/gallery.php' ); ?>

    <!-- Sketchbook -->
    <?php $args = [
        'post_type'         => 'art_project',
        'cat'               => 5,
        'posts_per_page'    => -1,
    ];
    include( 'partials/gallery.php' ); ?>

<?php endwhile; endif; ?>

<?php include( 'footer.php' ); ?>