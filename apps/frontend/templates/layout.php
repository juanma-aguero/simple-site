<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <!--        <link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'></link>-->
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>

        <div id="userbar">
        </div>
        <div id="shadowBody">
            <!-- header -->
            <div id="header">
                <div id="header-main-content">
                    <div class="homepage-menu">
                        <div class="homepage-menu-item">
                            <a href="<?php echo url_for("@homepage") ?>">Inicio</a>
                        </div>
                        <div class="homepage-menu-item">
                            <a href="<?php echo url_for("product/index") ?>">Productos</a>
                            <a href="<?php echo url_for("service/index") ?>">Servicios</a>
                            <a href="<?php echo url_for("home/contact") ?>">Contacto</a>
                        </div>
                        <div class="homepage-menu-item">
                            <a href="<?php echo url_for("service/index") ?>">Servicios</a>
                            <a href="<?php echo url_for("home/contact") ?>">Contacto</a>
                        </div>
                        <div class="homepage-menu-item">
                            <a href="<?php echo url_for("home/contact") ?>">Contacto</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- content -->
            <div id="content">
                <div id="main-container">
                    <div id="navigation-bar">
                        <a>inicio</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a>producto</a>
                    </div>

                    <!-- left side -->
                    <div id="container-left">
                        <?php if (!include_slot('content-left')): ?>
                            Jobeet - Your best job board
                        <?php endif ?>
                    </div>

                    <!-- center side -->
                    <div id="container-center">
                        <?php echo $sf_content ?>
                    </div>

                    <!-- right side -->
                    <div id="container-right">
<!--                        <iframe src="http://www.facebook.com/plugins/activity.php?site=www.rominabelleza.com.ar&amp;width=160&amp;height=300&amp;header=true&amp;colorscheme=default;font&amp;border_color&amp;recommendations=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:160px; height:300px; margin-top: 30px;" allowTransparency="true"></iframe>-->
                    </div>

                </div>
            </div>
        </div>
        <!-- footer -->
        <div id="footer">
            <div id="footer-links">
                <a href="<?php echo url_for("@homepage") ?>">Nosotros</a>
                <a href="<?php echo url_for("product/index") ?>">Productos</a>
                <a href="<?php echo url_for("service/index") ?>">Servicios</a>
                <a href="<?php echo url_for("@homepage") ?>">Contacto</a>
            </div>
        </div>
    </body>
</html>
