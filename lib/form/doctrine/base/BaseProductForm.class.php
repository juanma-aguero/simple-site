<?php

/**
 * Product form base class.
 *
 * @method Product getObject() Returns the current form's model object
 *
 * @package    simple-site
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'product_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProductCategory'), 'add_empty' => true)),
      'name'                => new sfWidgetFormInputText(),
      'description_short'   => new sfWidgetFormTextarea(),
      'description_long'    => new sfWidgetFormTextarea(),
      'price'               => new sfWidgetFormInputText(),
      'image'               => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'product_category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ProductCategory'), 'required' => false)),
      'name'                => new sfValidatorString(array('max_length' => 255)),
      'description_short'   => new sfValidatorString(array('max_length' => 500)),
      'description_long'    => new sfValidatorString(array('max_length' => 1000)),
      'price'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('product[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Product';
  }

}
