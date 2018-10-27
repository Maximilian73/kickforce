<?php

/**
 * BaseArticle
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property varchar $name
 * @property string $description
 * @property boolean $public
 * 
 * @method varchar getName()        Returns the current record's "name" value
 * @method string  getDescription() Returns the current record's "description" value
 * @method boolean getPublic()      Returns the current record's "public" value
 * @method Article setName()        Sets the current record's "name" value
 * @method Article setDescription() Sets the current record's "description" value
 * @method Article setPublic()      Sets the current record's "public" value
 * 
 * @package    Kickforce
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseArticle extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('force_article');
        $this->hasColumn('name', 'varchar', 255, array(
             'type' => 'varchar',
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 2147483647, array(
             'type' => 'string',
             'length' => 2147483647,
             ));
        $this->hasColumn('public', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
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