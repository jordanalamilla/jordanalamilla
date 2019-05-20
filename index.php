<?php include( 'header.php' ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <header class="container">
        <h1><?php the_title(); ?></h1>
        <p class="big-text intro">
            <?php the_content(); ?>
        </p>
    </header>

    <div class="container code-projects">

        <!-- Args -->
        <?php $args = [
            'post_type'         => 'web_project',
            'posts_per_page'    => 3,
        ];

        // Query
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) : ?>

            <div class="row">

                <!-- Loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post();

                    // Web project
                    include( 'partials/web-project.php' );    

                endwhile; ?> <!-- Close Loop -->
            </div>

        <?php wp_reset_postdata(); endif; ?>

    </div> <!-- Close gallery -->

<?php endwhile; endif; ?>
    
<?php include( 'footer.php' ); ?>