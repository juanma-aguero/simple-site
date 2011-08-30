<?php

require_once dirname(__FILE__) . '/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration {

    public function setup() {

        sfConfig::set('sf_thumbnail_dir', sfConfig::get('sf_upload_dir') . '/thumbnails');

        $this->enablePlugins('sfDoctrinePlugin');
        $this->enablePlugins('sfThumbnailPlugin');
    }

}
