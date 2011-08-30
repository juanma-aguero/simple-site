<?php

/**
 * BaseUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $username
 * @property string $password
 * @property integer $user_type_id
 * @property UserType $UserType
 * 
 * @method string   getUsername()     Returns the current record's "username" value
 * @method string   getPassword()     Returns the current record's "password" value
 * @method integer  getUserTypeId()   Returns the current record's "user_type_id" value
 * @method UserType getUserType()     Returns the current record's "UserType" value
 * @method User     setUsername()     Sets the current record's "username" value
 * @method User     setPassword()     Sets the current record's "password" value
 * @method User     setUserTypeId()   Sets the current record's "user_type_id" value
 * @method User     setUserType()     Sets the current record's "UserType" value
 * 
 * @package    simple-site
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user');
        $this->hasColumn('username', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('password', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('user_type_id', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('UserType', array(
             'local' => 'user_type_id',
             'foreign' => 'id'));
    }
}