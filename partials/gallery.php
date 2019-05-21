<?php // Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) : ?>

    <?php if( $args[ 'post_type' ] == 'web_project' ) : ?>

        <!-- Open web gallery -->
        <div class="container project-gallery">
            <h2>Latest Web Projects</h2>
            <div class="row">

                <!-- Loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post();

                    // Web project
                    include( 'web-project.php' );    

                endwhile; wp_reset_postdata(); ?><!-- Close Loop -->

            </div>

            <!-- Browse work -->
            <?php if( is_front_page() ) : ?>
                <div class="row text-center"><a class="box-link" href="#">Browse My Work</a></div>
            <?php endif; ?>

        </div><!-- Close web gallery -->

    <?php elseif( $args[ 'post_type' ] == 'art_project' ) : ?>

        <!-- Open art gallery -->
        <div class="container project-gallery">
            <h2>Latest Art Projects</h2>
            <div class="row">

                <!-- Loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post();

                    // Web project
                    include( 'art-project.php' );    

                endwhile; wp_reset_postdata(); ?><!-- Close Loop -->

            </div>

            <!-- Browse work -->
            <?php if( is_front_page() ) : ?>
                <div class="row text-center"><a class="box-link" href="#">Browse My Work</a></div>
            <?php endif; ?>

        </div> <!-- Close web gallery -->

    <?php endif; ?>
<?php endif; ?>
