<?php

/**
 * sfGuardUserProfile form base class.
 *
 * @method sfGuardUserProfile getObject() Returns the current form's model object
 *
 * @package    Kickforce
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesfGuardUserProfileForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'      => new sfWidgetFormInputHidden(),
      'country'      => new sfWidgetFormInputText(),
      'state'        => new sfWidgetFormInputText(),
      'city'         => new sfWidgetFormInputText(),
      'address'      => new sfWidgetFormInputText(),
      'postal_code'  => new sfWidgetFormInputText(),
      'organization' => new sfWidgetFormInputText(),
      'phone'        => new sfWidgetFormInputText(),
      'mobile_phone' => new sfWidgetFormInputText(),
      'description'  => new sfWidgetFormTextarea(),
      'avatar'       => new sfWidgetFormTextarea(),
      'image'        => new sfWidgetFormTextarea(),
      'facebook'     => new sfWidgetFormInputText(),
      'twitter'      => new sfWidgetFormInputText(),
      'youtube'      => new sfWidgetFormInputText(),
      'website'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'user_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('user_id')), 'empty_value' => $this->getObject()->get('user_id'), 'required' => false)),
      'country'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'state'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'city'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'address'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'postal_code'  => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'organization' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'phone'        => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'mobile_phone' => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'description'  => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'avatar'       => new sfValidatorString(array('required' => false)),
      'image'        => new sfValidatorString(array('required' => false)),
      'facebook'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'twitter'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'youtube'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'website'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_user_profile[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardUserProfile';
  }

}
