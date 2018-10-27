<?php

/**
 * sfGuardUserProfile filter form base class.
 *
 * @package    Kickforce
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasesfGuardUserProfileFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'country'      => new sfWidgetFormFilterInput(),
      'state'        => new sfWidgetFormFilterInput(),
      'city'         => new sfWidgetFormFilterInput(),
      'address'      => new sfWidgetFormFilterInput(),
      'postal_code'  => new sfWidgetFormFilterInput(),
      'organization' => new sfWidgetFormFilterInput(),
      'phone'        => new sfWidgetFormFilterInput(),
      'mobile_phone' => new sfWidgetFormFilterInput(),
      'description'  => new sfWidgetFormFilterInput(),
      'avatar'       => new sfWidgetFormFilterInput(),
      'image'        => new sfWidgetFormFilterInput(),
      'facebook'     => new sfWidgetFormFilterInput(),
      'twitter'      => new sfWidgetFormFilterInput(),
      'youtube'      => new sfWidgetFormFilterInput(),
      'website'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'country'      => new sfValidatorPass(array('required' => false)),
      'state'        => new sfValidatorPass(array('required' => false)),
      'city'         => new sfValidatorPass(array('required' => false)),
      'address'      => new sfValidatorPass(array('required' => false)),
      'postal_code'  => new sfValidatorPass(array('required' => false)),
      'organization' => new sfValidatorPass(array('required' => false)),
      'phone'        => new sfValidatorPass(array('required' => false)),
      'mobile_phone' => new sfValidatorPass(array('required' => false)),
      'description'  => new sfValidatorPass(array('required' => false)),
      'avatar'       => new sfValidatorPass(array('required' => false)),
      'image'        => new sfValidatorPass(array('required' => false)),
      'facebook'     => new sfValidatorPass(array('required' => false)),
      'twitter'      => new sfValidatorPass(array('required' => false)),
      'youtube'      => new sfValidatorPass(array('required' => false)),
      'website'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_user_profile_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardUserProfile';
  }

  public function getFields()
  {
    return array(
      'user_id'      => 'Number',
      'country'      => 'Text',
      'state'        => 'Text',
      'city'         => 'Text',
      'address'      => 'Text',
      'postal_code'  => 'Text',
      'organization' => 'Text',
      'phone'        => 'Text',
      'mobile_phone' => 'Text',
      'description'  => 'Text',
      'avatar'       => 'Text',
      'image'        => 'Text',
      'facebook'     => 'Text',
      'twitter'      => 'Text',
      'youtube'      => 'Text',
      'website'      => 'Text',
    );
  }
}
