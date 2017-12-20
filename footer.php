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
                    <ul class="list-unstyled align-middle">
                        <li><a target="_blank" href="http://www.unipamplona.edu.co/unipamplona/portalIG/home_1/recursos/universidad/consejo_academico/acuerdos/2017/junio/23062017/acuerdo_051.pdf">Calendario Academico</a></li>
                        <li><a target="_blank" href="http://www.unipamplona.edu.co/unipamplona/portalIG/home_1/recursos/universidad/consejo_superior/acuerdos/2014/febrero/17022014/reglamento_academico_pregrado.pdf">Reglamento Estudiantil</a></li>
                        <li><a target="_blank" href="http://www.unipamplona.edu.co/unipamplona/portalIG/home_9/recursos/general/documentos/circular/22052013/acuerdo_130.pdf">Estatuto Docente</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <h3 class="font-weight-bold">Sitios de Interés</h3>
                    <ul class="list-unstyled align-middle">
                        <li><a target="_blank" href="http://www.unipamplona.edu.co/unipamplona/portalIG/home_21/recursos/bienestar2014/04042014/servicios.jsp">Servicios de Bienestar</a></li>
                        <li><a target="_blank" href="http://www.unipamplona.edu.co/unipamplona/portalIG/home_77/recursos/01general/04082014/asociaciones.jsp">Asociaciones</a></li>
                        <li><a target="_blank" href="http://www.unipamplona.edu.co/unipamplona/portalIG/home_77/recursos/01general/04082014/revistas.jsp">Revistas Científicas</a></li>
                        <li><a target="_blank" href="http://www.unipamplona.edu.co/unipamplona/portalIG/home_13/recursos/01_general/23112009/mapa_de_procesos.jsp">Documentos SIG</a></li>
                        <li><a target="_blank" href="http://www.unipamplona.edu.co/unipamplona/portalIG/home_1/recursos/corporativo/15022011/descargas_unipamplona.jsp">Imagen Institucional</a></li>
                        <li><a target="_blank" href="http://www.unipamplona.edu.co/unipamplona/portalIG/home_77/recursos/01general/25072013/admin.jsp">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <h3 class="font-weight-bold">Entidades Relacionadas</h3>
                    <ul class="list-unstyled align-middle">
                        <li><a target="_blank" href="http://www.sena.edu.co/es-co/Paginas/default.aspx">SENA</a></li>
                        <li><a target="_blank" href="http://www.colciencias.gov.co/">COLCIENCIAS</a></li>
                        <li><a target="_blank" href="https://portal.icetex.gov.co/portal">Icetex</a></li>
                        <li><a target="_blank" href="http://www.unipamplona.edu.co">Universidad de Pamplona</a></li>
                    </ul>
                </div>
            </div>

            <p>Academic for <a href="https://getbootstrap.com">Bootstrap</a> by Carlos Angarita</a>.</p>
            <p>
                <a>Copyright &copy; <?php echo Date('Y');?>, Caos Software</a>
            </p>
        </div>
    </footer>
    <?php wp_footer()?>


    <script src="<?php bloginfo('template_url');?>/js/jquery-slim.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/popper.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
</body>

</html>