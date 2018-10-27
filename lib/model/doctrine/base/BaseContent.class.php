<?php

/**
 * BaseContent
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property varchar $name
 * @property string $description
 * 
 * @method varchar getName()        Returns the current record's "name" value
 * @method string  getDescription() Returns the current record's "description" value
 * @method Content setName()        Sets the current record's "name" value
 * @method Content setDescription() Sets the current record's "description" value
 * 
 * @package    Kickforce
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseContent extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('force_content');
        $this->hasColumn('name', 'varchar', 255, array(
             'type' => 'varchar',
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 2147483647, array(
             'type' => 'string',
             'length' => 2147483647,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'unique' => true,
             'fields' => 
             array(
              0 => 'name',
             ),
             'canUpdate' => true,
             ));
        $this->actAs($sluggable0);
    }
}