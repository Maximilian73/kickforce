<?php
require_once(dirname(__FILE__).'/../lib/BasesvAdminBoardActions.class.php');

/**
 * svAdminBoard actions.
 *
 * @package    plugins
 * @subpackage svAdminBoard
 * @author     kevin
 * @version    SVN: $Id: actions.class.php 25203 2009-12-10 16:50:26Z Crafty_Shadow $
 */ 
class svAdminBoardActions extends BasesvAdminBoardActions
{
  public function executeBoard(sfWebRequest $request)
  {
  }
  public function executeClear(sfWebRequest $request)
  {
//Удаление cookie прочитанных новостей	  
    setCookie('news','',time(),'/');

//Очиста папки cache/    
    $this->_recursiveDelete($_SERVER['DOCUMENT_ROOT'].'/../cache/');

    return sfView::NONE;
  }
  public function _recursiveDelete($str){
    if(is_file($str)){
      return @unlink($str);
    }
    elseif(is_dir($str)){
      $scan = glob(rtrim($str,'/').'/*');
      foreach($scan as $index=>$path){
        $this->_recursiveDelete($path);
      }
      return @rmdir($str);
    }
  }  
  public function executeInfo(sfWebRequest $request)
  {
    ob_start();
    phpinfo();
    $pinfo = ob_get_contents();
    ob_end_clean();
 
    $this->pinfo = preg_replace( '%^.*<body>(.*)</body>.*$%ms','$1',$pinfo);
  }  
}
