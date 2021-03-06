<?php

/**
 * BaseAmount
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property integer $project_id
 * @property varchar $transaction_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email_address
 * @property string $username
 * @property string $country
 * @property string $state
 * @property string $city
 * @property string $address
 * @property string $postal_code
 * @property string $phone
 * @property string $mobile_phone
 * @property decimal $project_amount
 * @property decimal $site_amount
 * @property decimal $total_amount
 * @property sfGuardUser $User
 * @property Project $Project
 * 
 * @method integer     getUserId()         Returns the current record's "user_id" value
 * @method integer     getProjectId()      Returns the current record's "project_id" value
 * @method varchar     getTransactionId()  Returns the current record's "transaction_id" value
 * @method string      getFirstName()      Returns the current record's "first_name" value
 * @method string      getLastName()       Returns the current record's "last_name" value
 * @method string      getEmailAddress()   Returns the current record's "email_address" value
 * @method string      getUsername()       Returns the current record's "username" value
 * @method string      getCountry()        Returns the current record's "country" value
 * @method string      getState()          Returns the current record's "state" value
 * @method string      getCity()           Returns the current record's "city" value
 * @method string      getAddress()        Returns the current record's "address" value
 * @method string      getPostalCode()     Returns the current record's "postal_code" value
 * @method string      getPhone()          Returns the current record's "phone" value
 * @method string      getMobilePhone()    Returns the current record's "mobile_phone" value
 * @method decimal     getProjectAmount()  Returns the current record's "project_amount" value
 * @method decimal     getSiteAmount()     Returns the current record's "site_amount" value
 * @method decimal     getTotalAmount()    Returns the current record's "total_amount" value
 * @method sfGuardUser getUser()           Returns the current record's "User" value
 * @method Project     getProject()        Returns the current record's "Project" value
 * @method Amount      setUserId()         Sets the current record's "user_id" value
 * @method Amount      setProjectId()      Sets the current record's "project_id" value
 * @method Amount      setTransactionId()  Sets the current record's "transaction_id" value
 * @method Amount      setFirstName()      Sets the current record's "first_name" value
 * @method Amount      setLastName()       Sets the current record's "last_name" value
 * @method Amount      setEmailAddress()   Sets the current record's "email_address" value
 * @method Amount      setUsername()       Sets the current record's "username" value
 * @method Amount      setCountry()        Sets the current record's "country" value
 * @method Amount      setState()          Sets the current record's "state" value
 * @method Amount      setCity()           Sets the current record's "city" value
 * @method Amount      setAddress()        Sets the current record's "address" value
 * @method Amount      setPostalCode()     Sets the current record's "postal_code" value
 * @method Amount      setPhone()          Sets the current record's "phone" value
 * @method Amount      setMobilePhone()    Sets the current record's "mobile_phone" value
 * @method Amount      setProjectAmount()  Sets the current record's "project_amount" value
 * @method Amount      setSiteAmount()     Sets the current record's "site_amount" value
 * @method Amount      setTotalAmount()    Sets the current record's "total_amount" value
 * @method Amount      setUser()           Sets the current record's "User" value
 * @method Amount      setProject()        Sets the current record's "Project" value
 * 
 * @package    Kickforce
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAmount extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('force_amount');
        $this->hasColumn('user_id', 'integer', 11, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 11,
             ));
        $this->hasColumn('project_id', 'integer', 11, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 11,
             ));
        $this->hasColumn('transaction_id', 'varchar', 255, array(
             'type' => 'varchar',
             'length' => 255,
             ));
        $this->hasColumn('first_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('last_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('email_address', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('username', 'string', 128, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 128,
             ));
        $this->hasColumn('country', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('state', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('city', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('address', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('postal_code', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('phone', 'string', 25, array(
             'type' => 'string',
             'length' => 25,
             ));
        $this->hasColumn('mobile_phone', 'string', 25, array(
             'type' => 'string',
             'length' => 25,
             ));
        $this->hasColumn('project_amount', 'decimal', 10, array(
             'type' => 'decimal',
             'notnull' => true,
             'length' => 10,
             ));
        $this->hasColumn('site_amount', 'decimal', 10, array(
             'type' => 'decimal',
             'notnull' => true,
             'length' => 10,
             ));
        $this->hasColumn('total_amount', 'decimal', 10, array(
             'type' => 'decimal',
             'notnull' => true,
             'length' => 10,
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

        $this->hasOne('Project', array(
             'local' => 'project_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'owningSide' => true));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}