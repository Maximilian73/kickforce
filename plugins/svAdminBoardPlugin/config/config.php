<?php
/**
* This file is part of the svAdminBoard package
*/



if (in_array('svAdminBoard', sfConfig::get('sf_enabled_modules', array())))
{
  // the plugin module is in the enabled modules, add assets:
  $this->dispatcher->connect('context.load_factories', array('svAdminBoardConfig', 'listenToContextLoadFactoriesEvent'));
  
  if (true == svAdminBoard::getProperty('include_jquery_no_conflict'))
  {
    // if include_jquery_no_conflict is set to true, we need to modify the response content
    $this->dispatcher->connect('response.filter_content', array('svAdminBoardConfig', 'listenToResponseFilterContentEvent'));
  }
}
