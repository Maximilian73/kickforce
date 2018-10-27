<?php

/**
 * Amount filter form base class.
 *
 * @package    Kickforce
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAmountFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'project_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Project'), 'add_empty' => true)),
      'transaction_id' => new sfWidgetFormFilterInput(),
      'first_name'     => new sfWidgetFormFilterInput(),
      'last_name'      => new sfWidgetFormFilterInput(),
      'email_address'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'username'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'country'        => new sfWidgetFormFilterInput(),
      'state'          => new sfWidgetFormFilterInput(),
      'city'           => new sfWidgetFormFilterInput(),
      'address'        => new sfWidgetFormFilterInput(),
      'postal_code'    => new sfWidgetFormFilterInput(),
      'phone'          => new sfWidgetFormFilterInput(),
      'mobile_phone'   => new sfWidgetFormFilterInput(),
      'project_amount' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'site_amount'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_amount'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'user_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'project_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Project'), 'column' => 'id')),
      'transaction_id' => new sfValidatorPass(array('required' => false)),
      'first_name'     => new sfValidatorPass(array('required' => false)),
      'last_name'      => new sfValidatorPass(array('required' => false)),
      'email_address'  => new sfValidatorPass(array('required' => false)),
      'username'       => new sfValidatorPass(array('required' => false)),
      'country'        => new sfValidatorPass(array('required' => false)),
      'state'          => new sfValidatorPass(array('required' => false)),
      'city'           => new sfValidatorPass(array('required' => false)),
      'address'        => new sfValidatorPass(array('required' => false)),
      'postal_code'    => new sfValidatorPass(array('required' => false)),
      'phone'          => new sfValidatorPass(array('required' => false)),
      'mobile_phone'   => new sfValidatorPass(array('required' => false)),
      'project_amount' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'site_amount'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'total_amount'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('amount_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Amount';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'user_id'        => 'ForeignKey',
      'project_id'     => 'ForeignKey',
      'transaction_id' => 'Text',
      'first_name'     => 'Text',
      'last_name'      => 'Text',
      'email_address'  => 'Text',
      'username'       => 'Text',
      'country'        => 'Text',
      'state'          => 'Text',
      'city'           => 'Text',
      'address'        => 'Text',
      'postal_code'    => 'Text',
      'phone'          => 'Text',
      'mobile_phone'   => 'Text',
      'project_amount' => 'Number',
      'site_amount'    => 'Number',
      'total_amount'   => 'Number',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
    );
  }
}
