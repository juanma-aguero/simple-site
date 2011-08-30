<?php

/**
 * Item form base class.
 *
 * @method Item getObject() Returns the current form's model object
 *
 * @package    simple-site
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseItemForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'name'             => new sfWidgetFormInputText(),
      'description'      => new sfWidgetFormTextarea(),
      'image'            => new sfWidgetFormInputText(),
      'item_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ItemCategory'), 'add_empty' => true)),
      'item_type_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ItemType'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'             => new sfValidatorString(array('max_length' => 255)),
      'description'      => new sfValidatorString(array('max_length' => 500)),
      'image'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'item_category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ItemCategory'), 'required' => false)),
      'item_type_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ItemType'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('item[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Item';
  }

}
