<?php // Set the theme
$tech   = get_field( 'web_tech' );
$theme  = 'light';
if( $tech == 'PHP' ) { $theme = 'dark'; } ?>

<!-- Open project -->
<div class="col-12 col-md-6 col-lg-4">
    <div class="<?php echo $theme; ?> project project-code">

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