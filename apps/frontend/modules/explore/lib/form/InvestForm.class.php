<?php
class InvestForm extends BaseForm
{
    
    public function configure()
    {
        $this->setWidgets(array(
            'project_amount' => new sfWidgetFormInputText(),
        ));
        $this->setValidators(array(
            'project_amount' => new sfValidatorString(array(
                'required' => true, 'max_length' => 20,'min_length' => 2)),
        ));    
        // $this->setDefault('amount', 100);

        $this->widgetSchema->setNameFormat('invest[%s]');     
    }
    
}
