<div class="col-sm-4 offset-sm-1 blog-sidebar">
               <?php 
                if(is_active_sidebar('sidebar')):
                    dynamic_sidebar('sidebar');
                endif;
               ?>
            </div>
            <!-- /.blog-sidebar -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    <footer class="blog-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <h3 class="font-weight-bold">Documentos</h3>
                    <?php
                    wp_nav_menu( array(
                        'menu'              => 'Footer1',
                        'theme_location'    => 'footer',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'menu-footer',
                        'container_id'      => 'footer-1',
                        'menu_class'        => 'list-unstyled align-middle',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker())
                    ); 
                    ?>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <h3 class="font-weight-bold">Sitios de Interés</h3>
                    <?php
                    wp_nav_menu( array(
                        'menu'              => 'Footer2',
                        'theme_location'    => 'footer',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'menu-footer',
                        'container_id'      => 'footer-2',
                        'menu_class'        => 'list-unstyled align-middle',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker())
                    ); 
                    ?>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <h3 class="font-weight-bold">Entidades Relacionadas</h3>
                    <?php
                    wp_nav_menu( array(
                        'menu'              => 'Footer3',
                        'theme_location'    => 'footer',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'menu-footer',
                        'container_id'      => 'footer-3',
                        'menu_class'        => 'list-unstyled align-middle',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker())
                    ); 
                    ?>
                </div>
            </div>

            <p>Academic for <a href="https://getbootstrap.com">Bootstrap</a> by Carlos Angarita</a>.</p>
            <p>
                <a>Copyright &copy; <?php echo Date('Y');?>, Caos Software</a>
            </p>
        </div>
    </footer>



    <script src="<?php bloginfo('template_url');?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/popper.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
    <?php wp_footer()?>
</body>

</html>