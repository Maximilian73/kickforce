<?php

class RegisterForm extends sfGuardRegisterForm
{
  /**
   * @see sfForm
   */
  public function configure()
  {
    parent::configure();

    $this->setWidget('captcha', new sfWidgetCaptchaGD());
    
    $this->widgetSchema['captcha']->setAttribute('size', '8');  
    $this->setValidator('captcha', new sfCaptchaGDValidator(
      array('length' => 4),
        array('invalid' => 'Invalid field.', 'length'=>'"%value%" - does not match the number of symbols (%length%).')
    ));
    $this->widgetSchema->setLabels(array(
      'captcha' => 'Enter Captcha'
    ));
	  
  }
}
