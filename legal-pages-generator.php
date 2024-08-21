<?php
/*
Plugin Name: Legalizados
Description: Plugin para generar automáticamente las páginas de "Aviso Legal" y "Política de Privacidad" basadas en un formulario unificado.
Version: 1.0
Author: Albert Navarro
Author URI: https://www.linkedin.com/in/albert-n-579261256/
*/

// Registrar los estilos del plugin
function legal_pages_generator_enqueue_styles() {
    wp_enqueue_style('legal-pages-generator-styles', plugin_dir_url(__FILE__) . 'css/style.css');
}
add_action('admin_enqueue_scripts', 'legal_pages_generator_enqueue_styles');

// Crear el menú del plugin en el dashboard de WordPress
function legal_pages_generator_menu() {
    add_menu_page(
        'Legal Pages Generator',        // Título de la página
        'Legal Pages Generator',        // Texto del menú
        'manage_options',               // Capacidad necesaria
        'legal-pages-generator',        // Slug del menú
        'legal_pages_generator_settings_page', // Función para mostrar la página
        'dashicons-admin-generic'       // Icono del menú
    );
}
add_action('admin_menu', 'legal_pages_generator_menu');

// Función para mostrar la página de configuración del plugin
function legal_pages_generator_settings_page() {
    ?>
    <div class="wrap">
        <h1>Legal Pages Generator</h1>
        <form method="post" action="admin-post.php">
            <input type="hidden" name="action" value="generate_pages">
            <?php
            // Incluir el formulario unificado
            include(plugin_dir_path(__FILE__) . 'templates/formulario-unificado.php');
            ?>
            <input type="submit" name="generate_pages" value="Crear Páginas" class="button button-primary"/>
        </form>
    </div>
    <?php
}

// Procesar los datos del formulario y crear las páginas
function legal_pages_generator_process_form() {
    if (isset($_POST['generate_pages'])) {
        // Recoger datos del formulario
        $nombre = sanitize_text_field($_POST['nombre']);
        $nif = sanitize_text_field($_POST['nif']);
        $direccion = sanitize_text_field($_POST['direccion']);
        $telefono = sanitize_text_field($_POST['telefono']);
        $correo = sanitize_email($_POST['correo']);
        $registro_mercantil = sanitize_text_field($_POST['registro_mercantil']);
        $representante_legal = sanitize_text_field($_POST['representante_legal']);
        $tipo_datos = sanitize_text_field($_POST['tipo_datos']);
        $tiempo_conservacion = sanitize_text_field($_POST['tiempo_conservacion']);
        $comparticion_datos = sanitize_text_field($_POST['comparticion_datos']);
        $medidas_seguridad = sanitize_text_field($_POST['medidas_seguridad']);
        $jurisdiccion = sanitize_text_field($_POST['jurisdiccion']);
        $enlaces_externos = sanitize_text_field($_POST['enlaces_externos']);
        $cookies = sanitize_text_field($_POST['cookies']);
        $actualizacion = sanitize_text_field($_POST['actualizacion']);

        // Crear la página de Aviso Legal
        ob_start();
        include(plugin_dir_path(__FILE__) . 'templates/aviso-legal-template.php');
        $aviso_legal_content = ob_get_clean();
        wp_insert_post(array(
            'post_title' => 'Aviso Legal',
            'post_content' => $aviso_legal_content,
            'post_status' => 'publish',
            'post_type' => 'page',
        ));

        // Crear la página de Política de Privacidad
        ob_start();
        include(plugin_dir_path(__FILE__) . 'templates/politica-privacidad-template.php');
        $politica_privacidad_content = ob_get_clean();
        wp_insert_post(array(
            'post_title' => 'Política de Privacidad',
            'post_content' => $politica_privacidad_content,
            'post_status' => 'publish',
            'post_type' => 'page',
        ));
    }
}
add_action('admin_post_generate_pages', 'legal_pages_generator_process_form');
