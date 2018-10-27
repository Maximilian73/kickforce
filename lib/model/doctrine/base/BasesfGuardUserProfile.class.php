<?php

/**
 * BasesfGuardUserProfile
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property string $country
 * @property string $state
 * @property string $city
 * @property string $address
 * @property string $postal_code
 * @property string $organization
 * @property string $phone
 * @property string $mobile_phone
 * @property string $description
 * @property blob $avatar
 * @property blob $image
 * @property string $facebook
 * @property string $twitter
 * @property string $youtube
 * @property string $website
 * @property sfGuardUser $User
 * 
 * @method integer            getUserId()       Returns the current record's "user_id" value
 * @method string             getCountry()      Returns the current record's "country" value
 * @method string             getState()        Returns the current record's "state" value
 * @method string             getCity()         Returns the current record's "city" value
 * @method string             getAddress()      Returns the current record's "address" value
 * @method string             getPostalCode()   Returns the current record's "postal_code" value
 * @method string             getOrganization() Returns the current record's "organization" value
 * @method string             getPhone()        Returns the current record's "phone" value
 * @method string             getMobilePhone()  Returns the current record's "mobile_phone" value
 * @method string             getDescription()  Returns the current record's "description" value
 * @method blob               getAvatar()       Returns the current record's "avatar" value
 * @method blob               getImage()        Returns the current record's "image" value
 * @method string             getFacebook()     Returns the current record's "facebook" value
 * @method string             getTwitter()      Returns the current record's "twitter" value
 * @method string             getYoutube()      Returns the current record's "youtube" value
 * @method string             getWebsite()      Returns the current record's "website" value
 * @method sfGuardUser        getUser()         Returns the current record's "User" value
 * @method sfGuardUserProfile setUserId()       Sets the current record's "user_id" value
 * @method sfGuardUserProfile setCountry()      Sets the current record's "country" value
 * @method sfGuardUserProfile setState()        Sets the current record's "state" value
 * @method sfGuardUserProfile setCity()         Sets the current record's "city" value
 * @method sfGuardUserProfile setAddress()      Sets the current record's "address" value
 * @method sfGuardUserProfile setPostalCode()   Sets the current record's "postal_code" value
 * @method sfGuardUserProfile setOrganization() Sets the current record's "organization" value
 * @method sfGuardUserProfile setPhone()        Sets the current record's "phone" value
 * @method sfGuardUserProfile setMobilePhone()  Sets the current record's "mobile_phone" value
 * @method sfGuardUserProfile setDescription()  Sets the current record's "description" value
 * @method sfGuardUserProfile setAvatar()       Sets the current record's "avatar" value
 * @method sfGuardUserProfile setImage()        Sets the current record's "image" value
 * @method sfGuardUserProfile setFacebook()     Sets the current record's "facebook" value
 * @method sfGuardUserProfile setTwitter()      Sets the current record's "twitter" value
 * @method sfGuardUserProfile setYoutube()      Sets the current record's "youtube" value
 * @method sfGuardUserProfile setWebsite()      Sets the current record's "website" value
 * @method sfGuardUserProfile setUser()         Sets the current record's "User" value
 * 
 * @package    Kickforce
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasesfGuardUserProfile extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('force_guard_user_profile');
        $this->hasColumn('user_id', 'integer', 11, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 11,
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
        $this->hasColumn('organization', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('phone', 'string', 25, array(
             'type' => 'string',
             'length' => 25,
             ));
        $this->hasColumn('mobile_phone', 'string', 25, array(
             'type' => 'string',
             'length' => 25,
             ));
        $this->hasColumn('description', 'string', 1000, array(
             'type' => 'string',
             'length' => 1000,
             ));
        $this->hasColumn('avatar', 'blob', null, array(
             'type' => 'blob',
             ));
        $this->hasColumn('image', 'blob', null, array(
             'type' => 'blob',
             ));
        $this->hasColumn('facebook', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('twitter', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('youtube', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('website', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}