<?php include( 'header.php' ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <header class="container">
        <h1><?php the_title(); ?></h1>
        <p class="big-text intro"><?php the_content(); ?></p>
    </header>

    <?php if( is_front_page() ) :
        include( 'partials/page-home.php' );
    endif; ?>

<?php endwhile; endif; ?>
    
<?php include( 'footer.php' ); ?>