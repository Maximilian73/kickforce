<?php

/**
 * Amount form base class.
 *
 * @method Amount getObject() Returns the current form's model object
 *
 * @package    Kickforce
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAmountForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'user_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => false)),
      'project_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Project'), 'add_empty' => false)),
      'transaction_id' => new sfWidgetFormInputText(),
      'first_name'     => new sfWidgetFormInputText(),
      'last_name'      => new sfWidgetFormInputText(),
      'email_address'  => new sfWidgetFormInputText(),
      'username'       => new sfWidgetFormInputText(),
      'country'        => new sfWidgetFormInputText(),
      'state'          => new sfWidgetFormInputText(),
      'city'           => new sfWidgetFormInputText(),
      'address'        => new sfWidgetFormInputText(),
      'postal_code'    => new sfWidgetFormInputText(),
      'phone'          => new sfWidgetFormInputText(),
      'mobile_phone'   => new sfWidgetFormInputText(),
      'project_amount' => new sfWidgetFormInputText(),
      'site_amount'    => new sfWidgetFormInputText(),
      'total_amount'   => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'))),
      'project_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Project'))),
      'transaction_id' => new sfValidatorPass(array('required' => false)),
      'first_name'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'last_name'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email_address'  => new sfValidatorString(array('max_length' => 255)),
      'username'       => new sfValidatorString(array('max_length' => 128)),
      'country'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'state'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'city'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'address'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'postal_code'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'phone'          => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'mobile_phone'   => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'project_amount' => new sfValidatorNumber(),
      'site_amount'    => new sfValidatorNumber(),
      'total_amount'   => new sfValidatorNumber(),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('amount[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Amount';
  }

}
