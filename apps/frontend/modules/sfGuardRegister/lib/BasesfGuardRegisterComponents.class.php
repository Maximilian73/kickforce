<?php

class BasesfGuardRegisterComponents extends sfComponents
{
    
    public function executeForm()
    {
        $this->form = new sfGuardRegisterForm();
    }
    
    public function executeRegister()
    {
        $this->form = new sfGuardRegisterForm();
    }
    
}
