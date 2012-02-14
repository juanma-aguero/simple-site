<?php

/**
 * Product filter form base class.
 *
 * @package    simple-site
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'product_line_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProductLine'), 'add_empty' => true)),
      'product_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProductCategory'), 'add_empty' => true)),
      'name'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description_short'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'size'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'image'               => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'product_line_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ProductLine'), 'column' => 'id')),
      'product_category_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ProductCategory'), 'column' => 'id')),
      'name'                => new sfValidatorPass(array('required' => false)),
      'description_short'   => new sfValidatorPass(array('required' => false)),
      'size'                => new sfValidatorPass(array('required' => false)),
      'image'               => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('product_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Product';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'product_line_id'     => 'ForeignKey',
      'product_category_id' => 'ForeignKey',
      'name'                => 'Text',
      'description_short'   => 'Text',
      'size'                => 'Text',
      'image'               => 'Text',
    );
  }
}
