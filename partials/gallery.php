<?php // Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) : ?>

    <?php if( $args[ 'post_type' ] == 'web_project' ) : ?>

        <!-- Open web gallery -->
        <div class="container project-gallery">

            <?php if( is_front_page() ) : ?>
                <h2>Latest Web Projects</h2>
            <?php endif; ?>

            <div class="row">

                <!-- Loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post();

                    // Web project
                    include( 'web-project.php' );

                wp_reset_postdata(); endwhile; ?><!-- Close Loop -->

            </div>

            <!-- Browse work -->
            <?php if( is_front_page() ) : ?>
                <div class="row text-center"><a class="box-link" href="/web">Browse My Work</a></div>
            <?php endif; ?>

        </div><!-- Close web gallery -->

    <?php elseif( $args[ 'post_type' ] == 'art_project' ) : ?>

        <!-- Open art gallery -->
        <div class="container project-gallery">

            <?php if( is_front_page() ) : ?>
                <h2>Latest Art Projects</h2>
            <?php endif; ?>

            <div class="row">

                <!-- Loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post();

                    // Art project
                    include( 'art-project.php' );

                wp_reset_postdata(); endwhile; ?><!-- Close Loop -->

            </div>

            <!-- Browse work -->
            <?php if( is_front_page() ) : ?>
                <div class="row text-center"><a class="box-link" href="/art">Browse My Art</a></div>
            <?php endif; ?>

        </div><!-- Close web gallery -->

    <?php endif; ?>
<?php endif; ?>
