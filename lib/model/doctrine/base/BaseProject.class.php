<?php

/**
 * BaseProject
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property integer $category_id
 * @property integer $status_id
 * @property varchar $name
 * @property varchar $logo
 * @property string $description
 * @property string $idea
 * @property string $market
 * @property string $team
 * @property integer $target
 * @property integer $percent
 * @property datetime $started_at
 * @property datetime $ended_at
 * @property sfGuardUser $User
 * @property ProjectStatus $Status
 * @property ProjectCategory $Category
 * @property Doctrine_Collection $Amount
 * 
 * @method integer             getUserId()      Returns the current record's "user_id" value
 * @method integer             getCategoryId()  Returns the current record's "category_id" value
 * @method integer             getStatusId()    Returns the current record's "status_id" value
 * @method varchar             getName()        Returns the current record's "name" value
 * @method varchar             getLogo()        Returns the current record's "logo" value
 * @method string              getDescription() Returns the current record's "description" value
 * @method string              getIdea()        Returns the current record's "idea" value
 * @method string              getMarket()      Returns the current record's "market" value
 * @method string              getTeam()        Returns the current record's "team" value
 * @method integer             getTarget()      Returns the current record's "target" value
 * @method integer             getPercent()     Returns the current record's "percent" value
 * @method datetime            getStartedAt()   Returns the current record's "started_at" value
 * @method datetime            getEndedAt()     Returns the current record's "ended_at" value
 * @method sfGuardUser         getUser()        Returns the current record's "User" value
 * @method ProjectStatus       getStatus()      Returns the current record's "Status" value
 * @method ProjectCategory     getCategory()    Returns the current record's "Category" value
 * @method Doctrine_Collection getAmount()      Returns the current record's "Amount" collection
 * @method Project             setUserId()      Sets the current record's "user_id" value
 * @method Project             setCategoryId()  Sets the current record's "category_id" value
 * @method Project             setStatusId()    Sets the current record's "status_id" value
 * @method Project             setName()        Sets the current record's "name" value
 * @method Project             setLogo()        Sets the current record's "logo" value
 * @method Project             setDescription() Sets the current record's "description" value
 * @method Project             setIdea()        Sets the current record's "idea" value
 * @method Project             setMarket()      Sets the current record's "market" value
 * @method Project             setTeam()        Sets the current record's "team" value
 * @method Project             setTarget()      Sets the current record's "target" value
 * @method Project             setPercent()     Sets the current record's "percent" value
 * @method Project             setStartedAt()   Sets the current record's "started_at" value
 * @method Project             setEndedAt()     Sets the current record's "ended_at" value
 * @method Project             setUser()        Sets the current record's "User" value
 * @method Project             setStatus()      Sets the current record's "Status" value
 * @method Project             setCategory()    Sets the current record's "Category" value
 * @method Project             setAmount()      Sets the current record's "Amount" collection
 * 
 * @package    Kickforce
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProject extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('force_project');
        $this->hasColumn('user_id', 'integer', 11, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 11,
             ));
        $this->hasColumn('category_id', 'integer', 11, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 11,
             ));
        $this->hasColumn('status_id', 'integer', 11, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 11,
             ));
        $this->hasColumn('name', 'varchar', 255, array(
             'type' => 'varchar',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('logo', 'varchar', 255, array(
             'type' => 'varchar',
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 600, array(
             'type' => 'string',
             'length' => 600,
             ));
        $this->hasColumn('idea', 'string', 2147483647, array(
             'type' => 'string',
             'length' => 2147483647,
             ));
        $this->hasColumn('market', 'string', 2147483647, array(
             'type' => 'string',
             'length' => 2147483647,
             ));
        $this->hasColumn('team', 'string', 2147483647, array(
             'type' => 'string',
             'length' => 2147483647,
             ));
        $this->hasColumn('target', 'integer', 11, array(
             'type' => 'integer',
             'length' => 11,
             ));
        $this->hasColumn('percent', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             ));
        $this->hasColumn('started_at', 'datetime', null, array(
             'type' => 'datetime',
             'notnull' => true,
             ));
        $this->hasColumn('ended_at', 'datetime', null, array(
             'type' => 'datetime',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'owningSide' => true));

        $this->hasOne('ProjectStatus as Status', array(
             'local' => 'status_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('ProjectCategory as Category', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('Amount', array(
             'local' => 'id',
             'foreign' => 'project_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'unique' => true,
             'fields' => 
             array(
              0 => 'name',
             ),
             'canUpdate' => true,
             ));
        $this->actAs($timestampable0);
        $this->actAs($sluggable0);
    }
}