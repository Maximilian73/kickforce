<?php

/**
 * Project form base class.
 *
 * @method Project getObject() Returns the current form's model object
 *
 * @package    Kickforce
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProjectForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'user_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => false)),
      'category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => false)),
      'status_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Status'), 'add_empty' => false)),
      'name'        => new sfWidgetFormInputText(),
      'logo'        => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormTextarea(),
      'idea'        => new sfWidgetFormTextarea(),
      'market'      => new sfWidgetFormTextarea(),
      'team'        => new sfWidgetFormTextarea(),
      'target'      => new sfWidgetFormInputText(),
      'percent'     => new sfWidgetFormInputText(),
      'started_at'  => new sfWidgetFormInputText(),
      'ended_at'    => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'slug'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'))),
      'category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Category'))),
      'status_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Status'))),
      'name'        => new sfValidatorPass(),
      'logo'        => new sfValidatorPass(array('required' => false)),
      'description' => new sfValidatorString(array('max_length' => 600, 'required' => false)),
      'idea'        => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'market'      => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'team'        => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'target'      => new sfValidatorInteger(array('required' => false)),
      'percent'     => new sfValidatorInteger(array('required' => false)),
      'started_at'  => new sfValidatorPass(),
      'ended_at'    => new sfValidatorPass(),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
      'slug'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Project', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('project[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Project';
  }

}
