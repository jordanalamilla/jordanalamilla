<?php include( 'header.php' ); ?>

<header class="container">
    <h1>Hi, I’m Jordan Alamilla.</h1>
    <p class="big-text intro">
        I’m a web developer living and working in Newmarket, Ontario at <a href="https://rcdesign.com/">RC Design</a>. I’m also a traditional and digital art hobbyist. Whether I’m building a website or creating new artwork, the same care and attention to detail goes into all of my projects. Welcome to my portfolio.
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
                
                    // Set the theme
                    $tech   = get_field( 'web_tech' );
                    $theme  = 'light';
                    if( $tech == 'PHP' ) { $theme = 'dark'; } ?>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="<?php echo $theme; ?> project-code">

                            <!-- Image -->
                            <div class="image"
                                 style="background-image: url('<?php the_post_thumbnail_url(); ?>'"></div>

                            <!-- Details -->
                            <div class="details">
                                <div class="info">
                                    <h3 class="title"><?php the_title(); ?></h3>
                                    <div class="description"><?php the_field( 'web_description' ); ?></div>
                                </div>

                                <!-- Bottom -->
                                <div class="container bottom-area">
                                    <div class="row">
                                        <div class="col-10 small-text buttons">
                                            <a href="<?php the_field( 'web_live_link' ); ?>" class="btn-code-primary">Live Site</a>
                                            <a href="<?php the_field( 'web_repo_link' ); ?>" class="btn-code-secondary">View Code</a>
                                        </div>
                                        <div class="col-2 language">
                                            <p class="small-text"><?php echo $tech; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Close project -->
                <?php endwhile; ?> <!-- Close Loop -->
            </div>

        <?php wp_reset_postdata(); endif; ?>

</div> <!-- Close gallery -->
    
<?php include( 'footer.php' ); ?>