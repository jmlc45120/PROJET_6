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

// AJOUT DES STYLES POUR LES BOUTONS DU HEADER :
function my_custom_button_styles()
{
    echo '<style>
            .bouton-nous-rencontrer:hover {
                font-size: 13px;
                font-weight: 700;
            }
            .bouton-commander {
                height : 80px !important;
            }
            .bouton-commander:hover {
                height: 80px !important;
            }
          </style>';
}
add_action('wp_head', 'my_custom_button_styles');

// AJOUT DE LA FONCTION POUR AFFICHER LE LIEN ADMIN SI UTILISATEUR CONNECTE
function add_admin_button_to_header() {
    if (is_user_logged_in()) {
        echo '<a href="' . admin_url() . '" class="admin-button">Admin</a>';
    }
}
add_action('wp_head', 'add_admin_button_to_header');

// Ajouter des styles pour le bouton d'administration
function custom_admin_button_styles() {
    echo '<style>
        .admin-button {
            display: inline-block;
            padding: 20px 20px;
            color: black;
            Font-size: 16px;
            font-weight: 400;
            text-decoration: none;
            
        }
        .admin-button:hover {
            Font-size: 13px;
            font-weight: 700;
        }
    </style>';
}
add_action('wp_head', 'custom_admin_button_styles');

