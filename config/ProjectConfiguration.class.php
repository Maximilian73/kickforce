<?php

require_once dirname(__FILE__).'/../vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins(
      'sfDoctrinePlugin',
      'sfDoctrineGuardPlugin',
      'eCropPlugin',
      'sfImageTransformPlugin',
      'sfThumbnailPlugin',
      'sfJqueryReloadedPlugin',
      'svAdminBoardPlugin',
      'sfCaptchaGDPlugin',
      'sfJQueryUIPlugin',
      'isicsWidgetFormTinyMCEPlugin'
    );
  }
}
