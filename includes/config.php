<?php

/**
 * Constante que define la ruta base del proyecto.
 * Se utiliza para construir URLs absolutas.
 */
define("PATH","http://localhost/deaw");

/**
 * Función que centraliza la configuración del sitio.
 * 
 * @param string $key La clave de configuración que se desea obtener.
 * @return mixed El valor de la clave de configuración o null si no existe.
 */
function config($key = '')
{
    // Array que contiene toda la configuración del sitio.
    $config = [
        'path' => PATH, // Ruta base del sitio.
        'name' => 'Sitio Web realizado con PHP', // Nombre del sitio.
        'site_url' => PATH .'/run.php', // URL base del sitio.
        'nav_menu' => [ // Elementos del menú de navegación.
            '' => 'Inicio',
            'about-us' => 'Acerca de',
            'products' => 'Productos',
            'contact' => 'Contacto',
        ],
        'template_path' => $_SERVER["DOCUMENT_ROOT"].'/deaw/template', // Ruta física al directorio de plantillas.
        'content_path' => $_SERVER["DOCUMENT_ROOT"] .'/deaw/content', // Ruta física al directorio de contenidos.
        'version' => 'v3.1', // Versión del sitio.
    ];
    
    // Si la clave existe en el array de configuración, se retorna su valor, de lo contrario retorna null.
    $var = isset($config[$key]) ? $config[$key] : null;
    return $var;
}