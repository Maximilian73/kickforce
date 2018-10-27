<?php
class applyComponents extends sfComponents
{
  public function executeDashboard(sfWebRequest $request)
  {
//	  $this->feedback_fitingi = Doctrine_Core::getTable('Feedback')->createQuery('c')->addWhere('c.catalog_id = 1')->count();
//	  $this->catalog2 = Doctrine_Core::getTable('OrderProcess')->findByCatalogId(2)->count();

	  //$this->mailing = Doctrine_Core::getTable('Mailing')->findAll()->count();

  }	
  public function executeSections_nav(sfWebRequest $request)
  {

    $this->module = mb_strtolower(sfContext::getInstance()->getRequest()->getParameterHolder()->get('module'));
    $this->action = mb_strtolower(sfContext::getInstance()->getRequest()->getParameterHolder()->get('action'));
    //$this->model = sfContext::getInstance()->getRequest()->getParameter('module');
    $this->edit = sfContext::getInstance()->getRequest()->getParameter('id');

    $this->route = sfContext::getInstance()->getActionStack()->getLastEntry()->getActionInstance()->getRoute();

    $this->current = 'current';
    $this->current_sub = 'class=current';
  }
}
