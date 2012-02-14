<?php

/**
 * BaseService
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $description
 * 
 * @method string  getName()        Returns the current record's "name" value
 * @method string  getDescription() Returns the current record's "description" value
 * @method Service setName()        Sets the current record's "name" value
 * @method Service setDescription() Sets the current record's "description" value
 * 
 * @package    simple-site
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseService extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('service');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 1000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 1000,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}