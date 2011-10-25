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

        <!-- header -->
        <div id="header">
            <div id="header-main-content">
                <div class="homepage-menu">
                    <div class="homepage-menu-item">
                        <a href="<?php echo url_for("@homepage") ?>"><b>quienes</b> somos</a>
                    </div>
                    <div class="homepage-menu-item">
                        <a href="<?php echo url_for("producto/linea?id=1") ?>"><b>nuestros</b> productos</a>
                    </div>
                    <div class="homepage-menu-item">
                        <a href="<?php echo url_for("servicio/index") ?>"><b>nuestros</b> Servicios</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- content -->
        <div id="content">
            <div id="main-container">

                <div style="width: 768px;display: inline-block;">
                    <div id ="slot-title">

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
                </div>

                <!-- right side -->
                <div id="container-right">
                    <div id="promo-header">

                    </div>
                    <div id="promo-body">
                        <div id="promo-container">
                            <div class="promo-picture-container"></div>
                            <div class="promo-picture-container"></div>
                            <div class="promo-picture-container"></div>
                        </div>
                    </div>
                    <div id="promo-footer">
                        &nbsp;&nbsp;
                        <a onclick="followingPromo();">&lt;&lt;</a>
                        &nbsp;&nbsp;
                        <a onclick="playPausePromo();">&rang;</a>
                        &nbsp;&nbsp;
                        <a onclick="nextPromo();">&gt;&gt;</a>
                        <div id="promo-text">
                            <h4>Spa para 2 personas</h4>
                            Masaje relajante, mascarilla
                            <br/>
                            <br/>
                            <b>$260</b>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- footer -->
        <div id="footer">
            <div id="footer-content">
                <div id="footer-links">
                    <a href="<?php echo url_for("@homepage") ?>">Nosotros</a>
                    <a href="<?php echo url_for("product/index") ?>">Productos</a>
                    <a href="<?php echo url_for("service/index") ?>">Servicios</a>
                    <a href="<?php echo url_for("@homepage") ?>">Contacto</a>
                </div>
            </div>
        </div>
    </body>
</html>
