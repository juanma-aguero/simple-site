<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>

        <!-- header -->
        <div id="header">
            <div id="userbar">
                <a href="">Ir al Sitio</a>
            </div>
            <div id="header-main-content">
                <div class="homepage-banner">
                    <span>Panel de control</span>
                </div>
                <div class="homepage-menu">

                </div>
            </div>

        </div>

        <!-- content -->
        <div id="content">
            <div id="main-container">

                <div id="container-left">
                    <div class="category-menu">
                        <a href="<?php echo url_for("productLine/index") ?>">Líneas de productos</a>
                        <a href="<?php echo url_for("product/index") ?>">Productos</a>
                        <a href="<?php echo url_for("service/index") ?>">Servicios</a>
                        <a href="<?php echo url_for("user/index") ?>">Usuarios</a>
                    </div>

                </div>

                <div id="container-center">
                    <?php echo $sf_content ?>
                </div>
            </div>
        </div>

        <!-- footer -->
        <div id="footer">

        </div>
    </body>
</html>
