<?php

/**
 * BaseProjectStatus
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property varchar $name
 * @property Doctrine_Collection $Project
 * 
 * @method varchar             getName()    Returns the current record's "name" value
 * @method Doctrine_Collection getProject() Returns the current record's "Project" collection
 * @method ProjectStatus       setName()    Sets the current record's "name" value
 * @method ProjectStatus       setProject() Sets the current record's "Project" collection
 * 
 * @package    Kickforce
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProjectStatus extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('force_project_status');
        $this->hasColumn('name', 'varchar', 20, array(
             'type' => 'varchar',
             'notnull' => true,
             'length' => 20,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Project', array(
             'local' => 'id',
             'foreign' => 'status_id'));

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