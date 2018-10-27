<?php

class myUser extends sfGuardSecurityUser
{

    public function addInvestAmounts(array $parameters)
    {
        $invests = $this->getInvests();
        $key = key($parameters);
        if (array_key_exists($key,$invests))
        {
            unset($invests[$key]);
        }
        $array = $invests + $parameters;
        ksort($array);

        $this->setAttribute('invest',$array);
    }

    public function getInvests()
    {
        $array = $this->getAttribute('invest');
        
        return is_array($array) ? $array : array();
    }

    public function getAmountById($id)
    {
        $default_amount = $this->getDefaultAmount();
        $invests = array();
        $invests = $this->getAttribute('invest');
        
        return array_key_exists($id,$invests) ? $invests[$id]['project_amount'] : $default_amount;
    }

    public function getTotalAmountById($id)
    {
        $invests = $this->getAttribute('invest');

        return array_key_exists($id,$invests) ? $invests[$id]['total_amount'] : '';
    }
    
    public function getDefaultAmount()
    {
        $default_amount = 100;
        
        return $default_amount;
    }
	
}
