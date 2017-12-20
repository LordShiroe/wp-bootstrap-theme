<?php

//Registra el navwalker
if ( ! file_exists( get_template_directory() . '/wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
    require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
}

//Soporte para el tema
/*try{ //Activar solo una vez.
if (isset($_GET['activated']) && is_admin()){
$menu = 'Principal';
$menu_exists = wp_get_nav_menu_object( $menu );
// Set up default menu items
if($menu_exists==false){
    $menu_id = wp_create_nav_menu($menu);
    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' =>  __('<i class="icon-home"></i> Inicio'),
        'menu-item-classes' => 'nav-item nav-link',
        'menu-item-url' => home_url( '/' ), 
        'menu-item-status' => 'pub  lish'));

    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' =>  __('<i class="icon-envelope"></i> Correo'),
        'menu-item-classes' => 'nav-item nav-link',
        'menu-item-url' => 'http://www.unipamplona.edu.co/email/', 
        'menu-item-status' => 'publish'));

    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' =>  __('<i class="icon-facebook-square"></i> Social'),
        'menu-item-classes' => 'nav-item nav-link',
        'menu-item-url' => home_url( '/social/' ), 
        'menu-item-status' => 'publish'));    

    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' =>  __('<i class="icon-git-branch"></i> Repositorio'),
        'menu-item-classes' => 'nav-item nav-link',
        'menu-item-url' => 'http://saai.unipamplona.edu.co:9880/svn/ingsistemas/trunk/', 
        'menu-item-status' => 'publish'));

    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' =>  __('<i class="icon-key"></i> Transacciones'),
        'menu-item-classes' => 'nav-item nav-link',
        'menu-item-url' => 'http://vortal.unipamplona.edu.co/unipamplona/hermesoft/vortal/iniciarSesion.jsp', 
        'menu-item-status' => 'publish')); 
}

    $menu_secundario = 'Secundario';
    $menu_exists_secondary = wp_get_nav_menu_object( $menu_secundario );
    if($menu_exists_secondary==false){
        $menu_id_secondary = wp_create_nav_menu($menu_secundario);
    }
}
}catch(Exception $e){
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}*/

function wpb_theme_setup(){
    //Theme support
    add_theme_support('post-tumbnails');
    //Menú de navegación
    register_nav_menus(array(
        'primary'=>__('Principal','SistemasBootstrap'),
        'pages'=>__('Secundario','SistemasBootstrap')
    ));
}

add_action('after_setup_theme','wpb_theme_setup');


// Widgets

function wpb_init_widgets($id){
    register_sidebar(array(
        'name'=>'Sidebar',
        'id'=>'sidebar',
        'before_widget'=>'<div class="sidebar-module">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4>',
        'after_title'=>'</h4>'
    ));
}

add_action('widgets_init', 'wpb_init_widgets');
function kriesi_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}


// programmatically create some basic pages, and then set Home and Blog
// setup a function to check if these pages exist
function the_slug_exists($post_name) {
	global $wpdb;
	if($wpdb->get_row("SELECT post_name FROM wp_posts WHERE post_name = '" . $post_name . "'", 'ARRAY_A')) {
		return true;
	} else {
		return false;
	}
}
// Crea la pagina del programa
if (isset($_GET['activated']) && is_admin()){
    $blog_page_title = 'El Programa';
    $blog_page_content = 'This is blog page placeholder. Anything you enter here will not appear in the front end, except for search results pages.';
    $blog_page_check = get_page_by_title($blog_page_title);
    $blog_page = array(
	    'post_type' => 'page',
	    'post_title' => $blog_page_title,
	    'post_content' => $blog_page_content,
	    'post_status' => 'publish',
	    'post_author' => 1,
	    'post_slug' => 'programa'
    );
    if(!isset($blog_page_check->ID) && !the_slug_exists('programa')){
        $blog_page_id = wp_insert_post($blog_page);
    }
}

//Crea página de investigación
if (isset($_GET['activated']) && is_admin()){
    $blog_page_title = 'Investigacion';
    $blog_page_content = 'This is blog page placeholder. Anything you enter here will not appear in the front end, except for search results pages.';
    $blog_page_check = get_page_by_title($blog_page_title);
    $blog_page = array(
	    'post_type' => 'page',
	    'post_title' => $blog_page_title,
	    'post_content' => $blog_page_content,
	    'post_status' => 'publish',
	    'post_author' => 1,
	    'post_slug' => 'investigacion'
    );
    if(!isset($blog_page_check->ID) && !the_slug_exists('investigacion')){
        $blog_page_id = wp_insert_post($blog_page);
    }
}

//Crea página de Comité de programa
if (isset($_GET['activated']) && is_admin()){
    $blog_page_title = 'Comité de programa';
    $blog_page_content = 'This is blog page placeholder. Anything you enter here will not appear in the front end, except for search results pages.';
    $blog_page_check = get_page_by_title($blog_page_title);
    $blog_page = array(
	    'post_type' => 'page',
	    'post_title' => $blog_page_title,
	    'post_content' => $blog_page_content,
	    'post_status' => 'publish',
	    'post_author' => 1,
	    'post_slug' => 'social'
    );
    if(!isset($blog_page_check->ID) && !the_slug_exists('social')){
        $blog_page_id = wp_insert_post($blog_page);
    }
}

//Crea página de Profesorado
if (isset($_GET['activated']) && is_admin()){
    $blog_page_title = 'Profesores';
    $blog_page_content = 'This is blog page placeholder. Anything you enter here will not appear in the front end, except for search results pages.';
    $blog_page_check = get_page_by_title($blog_page_title);
    $blog_page = array(
	    'post_type' => 'page',
	    'post_title' => $blog_page_title,
	    'post_content' => $blog_page_content,
	    'post_status' => 'publish',
	    'post_author' => 1,
	    'post_slug' => 'profesorado'
    );
    if(!isset($blog_page_check->ID) && !the_slug_exists('profesorado')){
        $blog_page_id = wp_insert_post($blog_page);
    }
}

//Crea página de Trabajo de Grado
if (isset($_GET['activated']) && is_admin()){
    $blog_page_title = 'Trabajo de grado';
    $blog_page_content = 'This is blog page placeholder. Anything you enter here will not appear in the front end, except for search results pages.';
    $blog_page_check = get_page_by_title($blog_page_title);
    $blog_page = array(
	    'post_type' => 'page',
	    'post_title' => $blog_page_title,
	    'post_content' => $blog_page_content,
	    'post_status' => 'publish',
	    'post_author' => 1,
	    'post_slug' => 'grado'
    );
    if(!isset($blog_page_check->ID) && !the_slug_exists('grado')){
        $blog_page_id = wp_insert_post($blog_page);
    }
}

//Crea página de egresados
if (isset($_GET['activated']) && is_admin()){
    $blog_page_title = 'Egresados';
    $blog_page_content = 'This is blog page placeholder. Anything you enter here will not appear in the front end, except for search results pages.';
    $blog_page_check = get_page_by_title($blog_page_title);
    $blog_page = array(
	    'post_type' => 'page',
	    'post_title' => $blog_page_title,
	    'post_content' => $blog_page_content,
	    'post_status' => 'publish',
	    'post_author' => 1,
	    'post_slug' => 'egresados'
    );
    if(!isset($blog_page_check->ID) && !the_slug_exists('egresados')){
        $blog_page_id = wp_insert_post($blog_page);
    }
}

//Crea página de Acreditación
if (isset($_GET['activated']) && is_admin()){
    $blog_page_title = 'Acreditación';
    $blog_page_content = 'This is blog page placeholder. Anything you enter here will not appear in the front end, except for search results pages.';
    $blog_page_check = get_page_by_title($blog_page_title);
    $blog_page = array(
	    'post_type' => 'page',
	    'post_title' => $blog_page_title,
	    'post_content' => $blog_page_content,
	    'post_status' => 'publish',
	    'post_author' => 1,
	    'post_slug' => 'acreditacion'
    );
    if(!isset($blog_page_check->ID) && !the_slug_exists('acreditacion')){
        $blog_page_id = wp_insert_post($blog_page);
    }
}

//Crea página de Acreditación
if (isset($_GET['activated']) && is_admin()){
    $blog_page_title = 'Social';
    $blog_page_content = 'This is blog page placeholder. Anything you enter here will not appear in the front end, except for search results pages.';
    $blog_page_check = get_page_by_title($blog_page_title);
    $blog_page = array(
	    'post_type' => 'page',
	    'post_title' => $blog_page_title,
	    'post_content' => $blog_page_content,
	    'post_status' => 'publish',
	    'post_author' => 1,
	    'post_slug' => 'social'
    );
    if(!isset($blog_page_check->ID) && !the_slug_exists('social')){
        $blog_page_id = wp_insert_post($blog_page);
        echo ("La pagina se creo");
        echo($blog_page_id);
    }
}

?>