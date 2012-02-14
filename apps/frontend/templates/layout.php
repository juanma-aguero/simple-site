<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <meta property="fb:app_id" content="284399558270084" /> 
        <meta property="og:locale:alternate" content="es_LA" />
        <meta property="og:title" content="Romina Crugo"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="http://www.rominacrugo.com.ar/"/>
        <meta property="og:image" content="http://rominacrugo.com.ar/images/flor.png"/>
        <meta property="og:site_name" content="RominaCrugo"/>
        <meta property="fb:admins" content="1118611173,1218548504"/>
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
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=284399558270084";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <!-- header -->
        <div id="header">
            <div id="header-main-content">
                <div class="homepage-menu">
                    <div class="homepage-menu-item">
                        <a href="<?php echo url_for("@homepage") ?>">quienes somos</a>
                    </div>
                    <div class="homepage-menu-item">
                        <a href="<?php echo url_for("servicio/index") ?>">nuestros servicios</a>
                    </div>
                    <div class="homepage-menu-item">
                        <a href="<?php echo url_for("producto/linea?id=1") ?>">nuestros productos</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- content -->
        <div id="content">
            <div id="main-container">

                <div style="width: 768px;display: inline-block;">
                    <div id ="slot-title">
                        <span><?php include_slot('title') ?></span>
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
                            <div class="promo-picture-container" style="background-image: url('/images/promo-spa1.jpg');"></div>
                            <div class="promo-picture-container" style="background-image: url('/images/promo-spa2.jpg');"></div>
                            <div class="promo-picture-container" style="background-image: url('/images/promo-spa3.jpg');"></div>
                        </div>
                    </div>
                    <div id="promo-footer">
                        &nbsp;&nbsp;
                        <a onclick="followingPromo();">&lt;&lt;</a>
                        &nbsp;
                        <a onclick="playPausePromo();">||</a>
                        &nbsp;
                        <a onclick="nextPromo();">&gt;&gt;</a>
                        <div id="promo-container-text">
                            <div class="promo-text" >
                                <div class="promo-text-desc">
                                <h4>Pulido corporal +<br/>
                                    Crema para celulitis +<br/>
                                    Afirmante</h4>
                                <br/>
                                <b>$100</b>
                                </div>
                            </div>
                            <div class="promo-text" >
                                <div class="promo-text-desc">
                                <h4>Leche de limpieza +<br/>
                                    Bruma hidratante +<br/>
                                    Crema antiage</h4>
                                <br/>
                                <b>$110</b>
                                </div>
                            </div>
                            <div class="promo-text" >
                                <div class="promo-text-desc">
                                <h4>Spa eventos especiales</h4>
                                Limpieza de cutis con radiofrecuencia +<br/>
                                masaje relajante a elección + <br/>
                                mascarilla corporales y faciales +<br/>
                                belleza de manos y pies +<br/>
                                <b>x5 amigas $750</b>
                                </div>
                            </div>
                        </div>
                    </div>
<div class="fb-like-box" data-href="http://www.facebook.com/pages/Romina-Crugo/221426034604715" data-width="225" data-height="200" data-show-faces="true" data-stream="false" data-header="false"></div>
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
                <div style="float: left; width: 175px">Diseñado por broquaestudio 2011</div>
                <div style="float: left; margin-left: 25px;  width: 134px;"><a href="http://www.broquaestudio.com.ar" target="_blank">www.broquaestudio.com.ar</a></div>
                <div style="float: right;  width: 160px">Reservados todos los derechos.</div>
            </div>
        </div>
    </body>
</html>
