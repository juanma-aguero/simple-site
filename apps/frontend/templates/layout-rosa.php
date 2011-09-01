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

            </div>
            <div id="header-main-content">
                <div class="homepage-logo">
                    <a href="<?php echo url_for("@homepage") ?>">
                        <img src="/images/homepage-logo.jpg" alt="homepage-logo" width="65%" height="90%"/>
                    </a>
                </div>
                <div class="homepage-banner">
                    <span><?php echo $sf_user->getAttribute("site-name") ?></span>
                </div>
                <div class="homepage-menu">
                    <h1>Panel de Control</h1>
                </div>
            </div>

        </div>

        <!-- content -->
        <div id="content">
            <div id="main-container">
                
                <div id="container-left">
                    
                </div>
                
                <div id="container-center">
                    <?php echo $sf_content ?>
                </div>
                
                <div id="container-right">
                    
                </div>
            </div>
        </div>

        <!-- footer -->
        <div id="footer">

        </div>
    </body>
</html>
