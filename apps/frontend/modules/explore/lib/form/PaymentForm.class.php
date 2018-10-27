<?php
class PaymentForm extends BaseForm
{

    protected static $types = array(
        'visa'         => 'Visa',
        'mastercard'   => 'MasterCard',
        //'amex'         => 'American Express',
        //'discover'     => 'Discover Card',
        //'dc'           => 'Diners Club',
        //'dci'          => 'Diners Club International',
        //'cb'           => 'Carte Blanche',
        //'jcb'          => 'JCB',
        //'maestro'      => 'Maestro',
        //'visaelectron' => 'Visa Electron',
        //'laser'        => 'Laser',
        //'solo'         => 'Solo',
        //'switch'       => 'Switch',
    );  

    public function configure()
    {
        $user = sfContext::getInstance()->getUser();
        $guard_user = $user->getGuardUser();
        $profile_user = $user->getProfile();	

        if (!empty($_SERVER['HTTP_CLIENT_IP']))
        {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        $this->setWidgets(array(
            'IPADDRESS'      => new sfWidgetFormInputHidden(array(),array('value' =>$ip)),
            'PAYMENTACTION'  => new sfWidgetFormInputHidden(array(),array('value' =>'Sale')),
            'CREDITCARDTYPE' => new sfWidgetFormChoice(array('choices' => self::$types)),
            'ACCT'           => new sfWidgetFormInputText(array(),array('value'=>'4731185503832070')),
            'EXPDATE'        => new sfWidgetFormDateJQueryUI(array("culture"=>"en","change_month" => true,"date_format" => '"mmyy"', "change_year" => true, 'show_button_panel'=>true)),
            'CVV2'           => new sfWidgetFormInputText(array(), array('value'=>'286')),      
            'FIRSTNAME'      => new sfWidgetFormInputText(array(),array('value' => $guard_user->getFirstName())),
            'LASTNAME'       => new sfWidgetFormInputText(array(),array('value' => $guard_user->getLastName())),
            'COUNTRYCODE'    => new sfWidgetFormInputText(array(),array('value' => $profile_user->getCountry())),
            'STATE'          => new sfWidgetFormInputText(array(),array('value' => $profile_user->getState())),
            'CITY'           => new sfWidgetFormInputText(array(),array('value' => $profile_user->getCity())),
            'STREET'         => new sfWidgetFormInputText(array(),array('value' => $profile_user->getAddress())),
            'ZIP'            => new sfWidgetFormInputText(array(),array('value' => $profile_user->getPostalCode())),
            'AMT'            => new sfWidgetFormInputHidden(array(),array('value' => $user->getTotalAmountById($this->getOption('project_id')))),
            //'ITEMAMT'        => new sfWidgetFormInputHidden(array(),array('value' => $user->getTotalAmountById($this->getOption('project_id')))),
            //'SHIPPINGAMT'    => new sfWidgetFormInputHidden(array(),array('value' => 0)),
            //'CURRENCYCODE'   => new sfWidgetFormInputHidden(array(),array('value' =>'USD')),
            //'L_NAME0'        => new sfWidgetFormInputHidden(array(),array('value' =>'Invest Project')),
            //'L_DESC0'        => new sfWidgetFormInputHidden(array(),array('value' =>'Crowdfunding')),
            //'L_AMT0'         => new sfWidgetFormInputHidden(array(),array('value' =>'USD')),
            //'L_QTY0'         => new sfWidgetFormInputHidden(array(),array('value' =>'1')),
        ));

        $this->setValidators(array(
            'IPADDRESS'      => new sfValidatorString(array('required' => true)),  
            'PAYMENTACTION'  => new sfValidatorString(array('required' => true)),
            'CREDITCARDTYPE' =>  new sfValidatorChoice(array('choices' => array_keys(self::$types), 'required' => false)),
            'ACCT'           => new sfValidatorString(array('required' => true, 'max_length' => 18,'min_length' => 16)),
            'EXPDATE'        => new sfValidatorString(array('required' => true)),
            'CVV2'           => new sfValidatorString(array('required' => true)),
            'FIRSTNAME'      => new sfValidatorString(array('required' => true)),
            'LASTNAME'       => new sfValidatorString(array('required' => true)),
            'COUNTRYCODE'    => new sfValidatorString(array('required' => true)),
            'STATE'          => new sfValidatorString(array('required' => true)),
            'CITY'           => new sfValidatorString(array('required' => true)),
            'STREET'         => new sfValidatorString(array('required' => true)),
            'ZIP'            => new sfValidatorString(array('required' => true)),
            'AMT'            => new sfValidatorString(array('required' => true)),
            //'ITEMAMT'        => new sfValidatorString(array('required' => true)),
            //'SHIPPINGAMT'    => new sfValidatorString(),
            //'CURRENCYCODE'   => new sfValidatorString(array('required' => true)),      
            //'L_NAME0'        => new sfValidatorString(array('required' => true)),      
            //'L_DESC0'        => new sfValidatorString(array('required' => true)),      
            //'L_AMT0'         => new sfValidatorString(array('required' => true)),      
            //'L_QTY0'         => new sfValidatorString(array('required' => true)),      
        ));    

        $this->widgetSchema->setLabels(array(
            'CREDITCARDTYPE' => 'Credit Card Type',
            'ACCT'           => 'Credit Card Number',
            'EXPDATE'        => 'Exp.',
            'FIRSTNAME'      => 'First Name',
            'LASTNAME'       => 'Last Name',
            'COUNTRYCODE'    => 'Country',
            'STATE'          => 'State',
            'CITY'           => 'City',
            'STREET'         => 'Street',
            'ZIP'            => 'Postal Code',
        ));	     

        $this->widgetSchema->setNameFormat('payment[%s]');     
    }
    
}
