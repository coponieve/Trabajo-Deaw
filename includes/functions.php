<?php

/**
 * Muestra el nombre del sitio llamando a la función config.
 */
function site_name()
{
    $var = config('name');
    echo $var;
}

/**
 * Muestra la URL del sitio llamando a la función config.
 */
function site_url()
{
    $var = config('site_url');
    echo $var;
}

/**
 * Muestra la ruta base del sitio llamando a la función config.
 */
function site_path()
{
    $var = config('path');
    echo $var;
}

/**
 * Muestra la versión del sitio llamando a la función config.
 */
function site_version()
{
    $var = config('version');
    echo $var;
}

/**
 * Genera y muestra el menú de navegación.
 * 
 * @param string $sep Separador entre los elementos del menú. Por defecto ' | '.
 */
function nav_menu($sep = ' | ')
{
    $nav_menu = '';
    $nav_items = config('nav_menu');

    // Itera sobre cada elemento del menú.
    foreach ($nav_items as $uri => $name) {
        // Obtiene la cadena de consulta y elimina 'page=' para comparar con la URI.
        $query_string = str_replace('page=', '', $_SERVER['QUERY_STRING'] ?? '');
        // Si la URI coincide con la página actual, se agrega la clase 'active'.
        $class = $query_string == $uri ? ' active' : '';
        // Construye la URL del enlace.
        $url = config('site_url') . '/' . ($uri == '' ? '' : '?page=') . $uri;
        
        // Construye el menú de navegación, concatenando cada enlace.
        $nav_menu .= '<a href="' . $url . '" title="' . $name . '" class="item ' . $class . '">' . $name . '</a>' . $sep;
    }

    // Elimina el separador final y muestra el menú.
    echo trim($nav_menu, $sep);
}

/**
 * Muestra el título de la página actual.
 * 
 * Obtiene el parámetro 'page' de la URL y lo usa para buscar el título en un array.
 * Si no se encuentra, se usa 'Home' por defecto.
 */
function page_title()
{
    // Obtiene el parámetro 'page' de la URL y aplica htmlspecialchars para evitar XSS.
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';
    // Array que mapea las páginas con sus títulos.
    $titulo = [                             
            'Home' => '>>Inicio',                 // Título para la página de inicio.
            'about-us' => '>>Acerca de',          // Título para acerca de.
            'products' => '>>Productos',          // Título para productos.
            'contact' => '>>Contacto',            // Título para contacto.
    ];  
    // Muestra el título de la página actual.
    echo  $titulo[$page];
}

/**
 * Carga y muestra el contenido de la página actual.
 * 
 * Obtiene el parámetro 'page' de la URL y carga el archivo .phtml correspondiente.
 * Si el archivo no existe, carga la página 404.
 */
function page_content()
{
    // Obtiene el parámetro 'page' de la URL, por defecto 'home'.
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    // Construye la ruta al archivo de contenido.
    $path =  config('content_path') . '/' . $page . '.phtml';
    // Si el archivo no existe, carga la página 404.
    if (! file_exists($path)) {
        $path =  config('content_path') . '/404.phtml';
    }
    // Lee y muestra el contenido del archivo.
    echo file_get_contents($path);
}

/**
 * Inicializa la aplicación cargando la plantilla principal.
 */
function init()
{
    // Incluye el archivo de plantilla principal.
    require config('template_path') . '/template.php';
}
