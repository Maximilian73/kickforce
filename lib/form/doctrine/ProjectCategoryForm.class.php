<?php

/**
 * ProjectCategory form.
 *
 * @package    Kickforce
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProjectCategoryForm extends BaseProjectCategoryForm
{
  public function configure()
  {
    unset($this['slug']);
    $this->widgetSchema['name']->setAttribute('style','width:500px; padding: 5px;');	  
  }
}
