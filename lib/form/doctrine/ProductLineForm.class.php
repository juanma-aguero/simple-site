<?php

/**
 * ProductLine form.
 *
 * @package    simple-site
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductLineForm extends BaseProductLineForm {

    public function configure() {
        
        $this->getWidgetSchema()->setLabels(array(
            'name' => 'Nombre',
            'description' => 'Descripción'
        ));
        
    }

}
