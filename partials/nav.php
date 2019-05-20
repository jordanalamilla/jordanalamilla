<nav class="container">
    <div class="logo">
        <a href="/">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/site/logo.png">
        </a>
    </div>

    <?php $args = [
        'menu'          => 'main',
        'menu_class'    => 'inline-list',
    ];
    wp_nav_menu( $args ); ?>
</nav>