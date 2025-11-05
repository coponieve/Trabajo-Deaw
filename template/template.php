<?php
/**
 * Plantilla principal del sitio web
 *
 * Este archivo define la estructura HTML general del sitio web.
 *
 * 
 *
 * @version    1.0.0
 * @author     jin
 * 
 * - site_name(): Sirve para mostrar nombre de sitio .
 * - site_path(): Este codigo sirve para devolver la ruta base del sitio.
 * - site_version(): Para mostrar la version de sitio.
 * - page_title(): Para mostrar el titulo de la pagina.
 * - page_content():Para mostrar el contenido dinamico de la pagian.
 * - nav_menu(): Es una funcion que puede mostrar menus personalizados en WordPress.
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
    <link href="<?php site_path(); ?>/template/style.css" rel="stylesheet" type="text/css" /> 
    
</head>
<body>
<div class="wrap">

    <header>
        <h1><?php site_name(); ?></h1>
        <nav class="menu">
            <?php nav_menu(); ?>
        </nav>
    </header>

    <article>
        <h2><?php page_title(); ?></h2>
        <?php page_content(); ?>
    </article>

    <footer>
        <small><?php echo date('Y'); ?> <?php echo "DAW2V-0613" ?>.<br><?php site_version(); ?></small>
    </footer>

</div>
</body>
</html>