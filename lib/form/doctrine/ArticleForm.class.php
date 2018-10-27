<?php

/**
 * Article form.
 *
 * @package    Kickforce
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ArticleForm extends BaseArticleForm
{
  public function configure()
  {
    $this->widgetSchema['name']->setAttribute('style','width:500px; padding: 5px;');	  
	  
    $this->widgetSchema['description'] = new isicsWidgetFormTinyMCE(
      array('tiny_options' => sfConfig::get('app_tiny_mce_advanced_content', array())),
		  array('style' => 'width: 600px; height: 400px;')
    );	  
  }
}
