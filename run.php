<?php
/**
 * Ejecutar el sitio web
 * Este archivo sive para preparar el entrono del proyecto antes de ejecutar el resto del codigo
 * @version    1.0.0
 * @author     jin
 * 
 * - error_reporting(E_ALL): Sirve para que el script muestre todo los tipo de errores, avisos y advertencias
 * - ini_set('display_errors', 1): Se usa para mostrar todos los erorres directamente en la pantalla del navegador, en lugar de ocultarlos
 * - require __DIR__ . '/includes/config.php': sirve para incluir y ejecutar el archivo config.php ubicado en la carpeta includes
 * - require __DIR__ . '/includes/functions.php': sirve para incluir y ejecutar otro archibo PHP dentro de actual.
 * - init(): se usa para preparar el entrono antes de ejecutar el resto del codigo
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/includes/config.php';
require __DIR__ . '/includes/functions.php';


init();