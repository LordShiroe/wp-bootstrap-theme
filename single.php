<?php get_header()?>

    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSecondary" aria-controls="navbarSecondary"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bars text-dark"></span>
            </button>
            <?php
                wp_nav_menu( array(
                    'menu'              => 'Secundario',
                    'theme_location'    => 'pages',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse justify-content-center pages-container',
                    'container_id'      => 'navbarSecondary',
                    'menu_class'        => 'nav navbar-nav ml-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker())
                ); 
                ?>
        </div>
    </nav>

    <div id="main-section" class="container my-4">

        <div class="row">

        <div class="col-sm-8 blog-main">
            <?php if(have_posts()){ ?>
                <?php while(have_posts()) : the_post() ?>
                    <?php get_template_part('content');?>
                <?php endwhile;?>
            <?php }else{ ?>
                <p><?php __('No se han encontrado posts')?></p>
            <?php } ?>
        </div>
            <!-- /.blog-main -->
           
<?php get_footer();?>