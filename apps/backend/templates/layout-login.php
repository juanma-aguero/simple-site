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
        <div id="header" style="height: 100px;">
            <div id="userbar">
                
            </div>
        </div>

        <!-- content -->
        <div id="content" style="min-height: 400px;text-align: center;">
            <div id="main-container" style="min-height: 100px;">
                <div id="container-center" style="min-height: 200px;">
                    <?php echo $sf_content ?>
                </div>
            </div>
        </div>

        <!-- footer -->
        <div id="footer">

        </div>
    </body>
</html>
