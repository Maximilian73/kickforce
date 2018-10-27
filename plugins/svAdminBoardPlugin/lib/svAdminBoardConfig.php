<?php
/**
 * svAdminBoardConfig class
 * 
 * This class handles configuration for the svAdminBoardPlugin
 *
 * @package    plugins
 * @subpackage svAdminBoard
 * @author     Ivan Tanev aka Crafty_Shadow @ webworld.bg <vankata.t@gmail.com>
 * @version    SVN: $Id: svAdminBoardConfig.php 25407 2009-12-15 12:35:24Z Crafty_Shadow $
 */ 
class svAdminBoardConfig
{
  /**
  * After the context has been initiated, we can add the required assets
  * 
  * @param sfEvent $event
  */
  public static function listenToContextLoadFactoriesEvent(sfEvent $event)
  {
    /** @var sfContext */
    $context = $event->getSubject();

    $context->getResponse()->addStylesheet(svAdminBoard::getProperty('web_dir').'/css/reset.css', 'first');
    $context->getResponse()->addStylesheet(svAdminBoard::getProperty('web_dir').'/css/style.css');
    $context->getResponse()->addStylesheet(svAdminBoard::getProperty('web_dir').'/css/invalid.css', 'last');

    $context->getResponse()->addJavascript(svAdminBoard::getProperty('web_dir').'/js/simpla.jquery.configuration.js');
    $context->getResponse()->addJavascript(svAdminBoard::getProperty('web_dir').'/js/facebox.js');
    $context->getResponse()->addJavascript(svAdminBoard::getProperty('web_dir').'/js/display_filter.js', 'last');
 
    //$context->getResponse()->addJavascript(sfConfig::get('sf_jquery_web_dir', '/sfJqueryReloadedPlugin') .
    //                              '/js/' . sfConfig::get('sf_jquery_core', 'jquery-1.3.2.min.js'), 'first');
  }
  
  
  /**
  * This is the right way to add stuff to the <head> tag after the page has been generated :)
  * The principle is the same as with the old sfCommonFilter and asset insertion in sf 1.0-1.2
  * 
  * @param sfEvent $event
  * @param string  $content
  * 
  * @return string
  */
  public static function listenToResponseFilterContentEvent(sfEvent $event, $content = null)
  {
    $jquery_include_tag = '<script type="text/javascript" src="'.svAdminBoard::getProperty('web_dir').'/js/'.svAdminBoard::getProperty('jquery_filename').'"></script>';
    $jquery_no_conflict_tag = '<script type="text/javascript">jQuery.noConflict();</script>';
    
    if (false !== ($pos = strpos($content, $jquery_include_tag)))
    {
      $content = substr($content, 0, $pos + strlen($jquery_include_tag)).$jquery_no_conflict_tag.substr($content, $pos + strlen($jquery_include_tag));
    }
    
    return $content;
  }
}
