<?php

/**
 * ProductCategory form.
 *
 * @package    simple-site
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductCategoryForm extends BaseProductCategoryForm {

    public function configure() {

        $this->getWidgetSchema()->setLabels(array(
            'name' => 'nombre',
            'description' => 'Descripcion'
        ));

        unset($this['image']);
    }

}
