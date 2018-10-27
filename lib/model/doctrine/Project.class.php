<?php

/**
 * Project
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Kickforce
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Project extends BaseProject
{

    public function getProject()
    {
        $project = sfContext::getProject();

        return $project;
    }
    
    public function getSiteAmount($project_amount='')
    {
	if(!$project_amount)
	{
            $project_amount = sfContext::getInstance()->getUser()->getAmountById($this->id);	
	}
	$percent = $this->getPercent();
	$site_amount = $project_amount * $percent / 100;

        return $site_amount;
    }

    public function getTotalAmount($project_amount='')
    {
	$site_amount = $this->getSiteAmount($project_amount);
        return $project_amount + $site_amount;
    }
  
}