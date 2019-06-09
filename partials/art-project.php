<!-- Open art project -->
<div class="col-12 col-md-6 col-lg-4">
    <a href="<?php the_permalink(); ?>">
        <div class="project project-art">

            <!-- Image -->
            <div class="image"
                 style="background-image: url('<?php the_post_thumbnail_url(); ?>'"></div>

            <!-- Bottom -->
            <div class="info">
                <ul class="details">
                    <li class="small-text title"><?php the_title(); ?></li>
                    <li class="small-text date"><?php the_field( 'art_date_created' ); ?></li>
                </ul>
            </div>
        </div>
    </a>
</div> <!-- Close project -->