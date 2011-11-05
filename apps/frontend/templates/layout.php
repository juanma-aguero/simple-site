<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <meta property="og:locale:alternate" content="es_LA" />
        <meta property="og:title" content="Romina Crugo"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="http://www.rominacrugo.com.ar/"/>
        <meta property="og:image" content="http://rominacrugo.com.ar/images/rominacrugo.png"/>
        <meta property="og:site_name" content="RominaCrugo"/>
        <meta property="fb:admins" content="1118611173"/>
        <meta property="og:description"
              content="Romina Crugo, creadora de spa y belleza es especialista en tratamientos para la piel, el cuidado de la estética facial y corporal, el relax y el bienestar."/>
              <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
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
                        &nbsp;
                        <a onclick="playPausePromo();">||</a>
                        &nbsp;
                        <a onclick="nextPromo();">&gt;&gt;</a>
                        <div id="promo-text">
                            <h4>Spa para 2 personas</h4>
                            Masaje relajante, mascarilla
                            <br/>
                            <br/>
                            <b>$260</b>
                        </div>
                    </div>
                    <div class="fb-like" data-href="http://www.rominacrugo.com.ar" data-send="false" data-layout="box_count" data-width="300" data-show-faces="true" data-font="verdana"></div>
                    <br/>
                    <br/>
                    <br/>
                </div>

            </div>
        </div>

        <!-- footer -->
        <div id="footer">
            <div id="footer-content">
                <div id="footer-links">
                    <span><a href="mailto:info@rominacrugo.com.ar" style="text-decoration: none;">info@<b>rominacrugo.</b>com.ar</a></span>
                    <span>3965.8481</span>
                    <span><b>15.5583.1887</b></span>
                </div>
            </div>
            <div id="footer-designedby">
                <span>Diseñado por broquaestudio 2011</span>
                <span>www.broquaestudio.com.ar</span>
                <span>Reservados todos los derechos.</span>
            </div>
        </div>
    </body>
</html>
