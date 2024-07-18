<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('child_theme_configurator_css')) :
    function child_theme_configurator_css()
    {
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('chld_thm_cfg_child', trailingslashit(get_stylesheet_directory_uri()) . 'style.css', array('parent-style'));
    }
endif;
add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 10);

// ------------------------------------------------------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------    HEADER     -----------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------------------------------

// GESTION AFFICHAGE LIEN " admin " SI UTILISATEUR CONNECTE :
function ajout_lien_admin_au_header($items, $args)
{
    if (is_user_logged_in() && $args->menu == 'test') {
        $items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a class="hfe-menu-item" href="' . get_admin_url() . '">Admin</a></li>';
    }
    return $items;
}

add_filter('wp_nav_menu_items', 'ajout_lien_admin_au_header', 10, 2);


// ------------------------------------------------------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------    FOOTER     ----------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------------------------------

// CREATION BANDEAU DE 16 CANETTES :
function disposition_images_footer()
{
    $image_url = "http://planty.local/wp-content/uploads/2024/07/Planty6-1.png";
    $decalage_vertical = [0, -20, 0, 20, 0, -20, 20, 0, -20, 0, 20, 0, -20, 0, 20, 0]; // offsets verticaux pour effet de vague

    if (!is_page(46)) { // PAGE ID 46 = page COMMANDER
        if (is_page(41)) { // PAGE ID 41 = page NOUS RENCONTRER
            echo '<div class="ajust-compo-footer" style="background-color: #ECE2DA;">';
            foreach ($decalage_vertical as $index => $decalage) {
                echo '<div class="image-footer" style="top: ' . $decalage . 'px;">'; // positionnement des 16 images avec offsets verticaux
                echo '<img src="' . $image_url . '" alt="Planty Image">';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo '<div class="ajust-compo-footer">';
            foreach ($decalage_vertical as $index => $decalage) {
                echo '<div class="image-footer" style="top: ' . $decalage . 'px;">'; // positionnement des 16 images avec offsets verticaux
                echo '<img src="' . $image_url . '" alt="Planty Image">';
                echo '</div>';
            }
            echo '</div>';
        }
    }
    // Affichage des mentions légales
    echo '<a class="mentions-legales-footer" href="http://planty.local/mentions-legales/" style="position: relative;background-color: #FFFFFF;">Mentions légales</a>';
}

add_action('wp_footer', 'disposition_images_footer');


// ------------------------------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------- PAGE " NOUS RENCONTRER " -------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------------------------------

// CHARGEMENT POLICES DE CARACTERES "SYNE" :

function charger_police_syne()
{
    wp_enqueue_style('syne-font', 'https://fonts.googleapis.com/css2?family=Syne:wght@400;700&display=swap', array(), null);
}

add_action('wp_enqueue_scripts', 'charger_police_syne');
