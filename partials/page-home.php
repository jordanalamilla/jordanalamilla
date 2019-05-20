<!-- Open web gallery -->
<div class="container project-gallery">

    <!-- Args -->
    <?php $args = [
        'post_type'         => 'web_project',
        'posts_per_page'    => 3,
    ];

    // Query
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) : ?>

        <h2>Latest Web Projects</h2>
        <div class="row">

            <!-- Loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post();

                // Web project
                include( 'web-project.php' );    

            endwhile; ?> <!-- Close Loop -->
        </div><?php wp_reset_postdata(); endif; ?>

        <div class="row text-center">
            <a class="box-link" href="#">Browse My Work</a>
        </div>

</div> <!-- Close web gallery -->

<!-- Open art gallery -->
<div class="container project-gallery">

    <!-- Args -->
    <?php $args = [
        'post_type'         => 'art_project',
        'posts_per_page'    => 3,
    ];

    // Query
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) : ?>

        <h2>Latest Art Projects</h2>
        <div class="row">

            <!-- Loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post();

                // Web project
                include( 'art-project.php' );    

            endwhile; ?> <!-- Close Loop -->
        </div><?php wp_reset_postdata(); endif; ?>

        <div class="row text-center">
            <a class="box-link" href="#">Browse My Work</a>
        </div>

</div> <!-- Close web gallery -->