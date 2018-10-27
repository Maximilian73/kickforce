<?php
require_once(dirname(__FILE__).'/../lib/BasesvAdminBoardComponents.class.php');

/**
 * svAdminBoard components.
 *
 * @package    plugins
 * @subpackage svAdminBoard
 * @author     kevin
 * @version    SVN: $Id: components.class.php 25203 2009-12-10 16:50:26Z Crafty_Shadow $
 */ 
class svAdminBoardComponents extends BasesvAdminBoardComponents
{
  public function executeMain_nav(sfWebRequest $request)
  {
    $this->get_model = mb_strtolower(sfContext::getInstance()->getRequest()->getParameterHolder()->get('module'));
    $this->get_action = mb_strtolower(sfContext::getInstance()->getRequest()->getParameterHolder()->get('action'));
    $this->edit = sfContext::getInstance()->getRequest()->getParameter('id');
  }	
}
