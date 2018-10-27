<?php

require_once dirname(__FILE__).'/../lib/BasesfGuardRegisterComponents.class.php';

class sfGuardRegisterComponents extends BasesfGuardRegisterComponents
{
    
    public function executeRegister()
    {
        $this->form = new RegisterForm();
    }
    
}
