<?php include( 'header.php' ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <header class="container">
        <div class="row">
            <div class="col-12">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p class="big-text intro"><?php the_content(); ?></p>
            </div>
            <div class="col-12 col-sm-6">
                <img style="max-width: 100%;" src="<?php echo the_post_thumbnail_url(); ?>">
            </div>
        </div>
    </header>

<?php endwhile; endif; ?>

<?php include( 'footer.php' ); ?>