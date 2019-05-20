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

                    // Web project
                    include( 'partials/web-project.php' );    

                endwhile; ?> <!-- Close Loop -->
            </div>

        <?php wp_reset_postdata(); endif; ?>

</div> <!-- Close gallery -->
    
<?php include( 'footer.php' ); ?>