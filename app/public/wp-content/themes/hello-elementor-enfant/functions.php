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
        wp_enqueue_style('chld_thm_cfg_child', trailingslashit(get_stylesheet_directory_uri()) . 'style.css', array('hello-elementor', 'hello-elementor', 'hello-elementor-theme-style', 'hello-elementor-header-footer'));
    }
endif;
add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 10);

// -------------------------------    HEADER     ---------------------------------------------------
function styles_boutons_navbar()
{
    echo '<style>
            #id-header {
                justify-content : center;
                width : auto;
                padding:0px;
            }
            .bouton-nous-rencontrer:hover {
                font-size: 13px;
                font-weight: 700;
            }
            .bouton-commander {
                background-color : #E0B9B4;
                line-height: 4.5em;
                font-height :17px;
                height : 80px;
                width : 236px;
            }
            .bouton-commander:hover {
                background-color : #C02E44;
            }
          </style>';
}
add_action('wp_head', 'styles_boutons_navbar');

// GESTION AFFICHAGE LIEN " admin " :

function add_admin_link_to_menu($items, $args)
{
    var_dump($args);
    // On vérifie si l'user est connecté, et que notre menu est bien celui ayant le nom "test"
    if (is_user_logged_in() && $args->menu == 'test') {
        // On ajoute l'élément de menu avec un lien vers la page d'administration, incluant les mêmes classes que celle d'elementor
        $items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a class="hfe-menu-item" href="' . get_admin_url() . '">Admin</a></li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);

function styles_lien_admin()
{
    echo '<style>
            .hfe-menu-item {
                box-sizing: border-box;
                padding:0px 50px 0px 50px !important;
                color : black;
                justify-content: center;
            }
            .hfe-menu-item:hover {
                box-sizing: border-box;
                padding:0px 50px 0px 41px !important;
                font-size: 16px;
                font-weight: 700;//
            }
          </style>';
}
add_action('wp_head', 'styles_lien_admin');

// -------------------------------    FOOTER     ----------------------------------------------------

// CREATION BANDEAU DE 16 CANETTES :
function disposition_images_footer()
{
    $image_url = "http://planty.local/wp-content/uploads/2024/07/Planty6-1.png";
    $decalage_vertical = [0, -20, 0, 20, 0, -20, 20, 0, -20, 0, 20, 0, -20, 0, 20, 0]; // offsets verticaux pour effet vague
    echo '<div class="ajust-compo-footer">';
    foreach ($decalage_vertical as $index => $decalage) {
        echo '<div class="image-footer" style="top: ' . $decalage . 'px;">'; // positionnement des 16 images avec offsets verticaux
        echo '<img src="' . $image_url . '" alt="Planty Image">';
        echo '</div>';
    }
    echo '</div>';
    echo '<a class="mentions-legales-footer" href="http://planty.local/mentions-legales/">Mentions légales</a>'; // Ajout du lien "Mentions légales" sous le bandeau de canettes
}
add_action('wp_footer', 'disposition_images_footer');

function styles_footer()
{
?>
    <style>
        .ajust-compo-footer {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 1440px;
            height: auto;
            position: relative;
            margin: 0 auto;
            overflow: hidden;
        }

        .ajust-compo-footer img {
            height: auto;
        }

        .image-footer {
            position: relative;
            margin-left: -40px;
            margin-right: -40px;
            height: 140px;
        }

        .mentions-legales-footer {
            display: flex;
            padding: 20px 0px;
            position: relative;
            text-align: center;
            background-color: white;
            color: black;
            justify-content: center;
        }

        .mentions-legales-footer:hover {
            font-size: 18px;
            font-weight: 700;
        }
    </style>
<?php
}
add_action('wp_footer', 'styles_footer');

//-------------------------------------- PAGE " ACCUEIL " ---------------------------------------------

// AJUSTEMENT FEUILLES SUR CANETTE DANS LOGO ACCUEIL :

function styles_logo()
{
?>
    <style>
        #feuille-gauche {
            margin-right: -125%;
        }

        #feuille-droite {
            margin-left: -125%;
        }
    </style>
<?php
}
add_action('wp_head', 'styles_logo');


//----------------------------------- PAGE " NOUS RENCONTRER " ---------------------------------------

// CHARGEMENT POLICES DE CARACTERES "SYNE" :

function enqueue_syne_font()
{
    wp_enqueue_style('syne-font', 'https://fonts.googleapis.com/css2?family=Syne:wght@400;700&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'enqueue_syne_font');

// MODIFICATION DES STYLES DU FORMULAIRE :

function styles_formulaire()
{
?>
    <style>
        .wpforms-submit-container {
            display: flex;
            justify-content: center;
        }

        .wpforms-submit {
            color: white;
            background-color: #E0B9B4 !important;
        }

        #wpforms-submit-937:hover {
            color: white;
            background-color: #C02E44 !important;
        }

        .wpforms-field-label {
            font-family: 'Syne', sans-serif !important;
            font-weight: 400 !important;
            font-size: 20px !important;
        }


        <?php
    }
    add_action('wp_head', 'styles_formulaire');

//----------------------------------- PAGE " COMMANDER " ----------------------------------------------