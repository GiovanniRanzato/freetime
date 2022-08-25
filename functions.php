<?php
define ('TEMPLATE_URI', get_template_directory_uri()."/");

// Funzione che inserisce stili e script nel sito
function cs_load_script () {
    //wp_enqueue_style( handle: nome del file, src: percorso del file, deps: dipendenze del file, vers: versione, media: indica se il foglio di stile è indicato solo per alcuni media )
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500;600&family=Source+Code+Pro:wght@200;400;600&display=swap' );
    wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/b2fa7f74dd.js', false, '', true );
    wp_enqueue_style( 'bootstrap', TEMPLATE_URI.'css/bootstrap.min.css' );
    wp_enqueue_style( 'hamburger', TEMPLATE_URI.'css/hamburgers.min.css' );
    wp_enqueue_style( 'my-style', TEMPLATE_URI.'css/style.css' );
    wp_enqueue_style( 'hamburger-custom', TEMPLATE_URI.'css/hamburger-custom.css' );
    
    // Prima di importare jquery bisogna deregistrare la versione in unso da WP
    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', TEMPLATE_URI.'js/jquery-3.6.0.min.js', false, '3.6.0', true );
    wp_enqueue_script( 'owl-carusel', TEMPLATE_URI.'js/owl.carousel.min.js', false, '', true );
    wp_enqueue_script( 'fancy-box', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js', false, '', true );
    wp_enqueue_script( 'my-scripts', TEMPLATE_URI.'js/app.js', false, '1.0', true );


    // carica una libreria esterna che permette il float dei commenti quando si risponde a un commento
    if(is_single()){
        wp_enqueue_script("comment-reply");
    }

}

add_action("wp_enqueue_scripts", "cs_load_script");

// Aggiungiamo il supporto per i menu Wordpress
// add_theme_support("menues");

// registriamo i menu del sito
register_nav_menus( array(
    "primary" => 'Menu principale',
    "category" => 'Menu categorie',
    "social" => 'Menu social',
) );

// Abilita l'impostazione dell'immagine in evidenza sul tema
add_theme_support('post-thumbnails');

function gr_excerpt_length() {
    return 15;
}
function gr_excerpt_more() {
    return " <a href=".get_the_permalink().">continua ...</a>";
}
add_filter( 'excerpt_length', 'gr_excerpt_length', 999 );
add_filter( 'excerpt_more', 'gr_excerpt_more', 999 );

function gr_post_link( $html ){
    $html = str_replace( '<a ', '<a class="cs-btn cs-btn-inverse" ', $html );
    return $html;
}
add_filter( 'next_post_link', 'gr_post_link' );
add_filter( 'previous_post_link', 'gr_post_link' );

// abilito i widgets
add_theme_support('widgets');

// creiamo l'area per inserire la sidebar
register_sidebar(array(
    "name" => "Main sidebar widgets",
    "id" => "sidebar-widgets",
    "description" => "Widgets per la sidebar",
    "before_widget" => "<div class='cs-widgets-container'>",
    "after_widget" => "</div>",
    "class" => "cs-nav-footer",
));

register_sidebar(array(
    "name" => "Footer Widgets",
    "id" => "footer-widgets",
    "description" => "Widgets per il footer",
));

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

// aggiungo Prittier per la textarea con l'editor per contact form 7
function vf_html_syntax_cf7()
{
    $settings = wp_enqueue_code_editor( array( 'type' => 'text/html' ) );
    if( $settings === false )
    {
        return;
    }

    // Abilito il code editor per il il form
    wp_add_inline_script(
        'code-editor',
        sprintf( 'jQuery( function() { wp.codeEditor.initialize( "wpcf7-form", %s ); } );', wp_json_encode( $settings ) )
    );
}
add_action( 'admin_print_styles-toplevel_page_wpcf7', 'vf_html_syntax_cf7');
add_filter( 'wpcf7_autop_or_not', '__return_false' );

// Supporto per immagini in evidenza
add_theme_support('post-thumbnails');
// Setto le dimensioni delle immagini in evidenza dei post
// USARE IL PLUGIN REGENERATE THUMBNAILS PER RENDERE RETROATTIVA LA FUNZIONE
set_post_thumbnail_size(830, 400, true);