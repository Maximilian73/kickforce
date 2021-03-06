<?php

/**
 * ProjectCategory filter form base class.
 *
 * @package    Kickforce
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProjectCategoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'public' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'slug'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'   => new sfValidatorPass(array('required' => false)),
      'public' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'slug'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('project_category_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProjectCategory';
  }

  public function getFields()
  {
    return array(
      'id'     => 'Number',
      'name'   => 'Text',
      'public' => 'Boolean',
      'slug'   => 'Text',
    );
  }
}
