<?php

/**
 * explore actions.
 *
 * @package    Kickforce
 * @subpackage explore
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class exploreActions extends sfActions
{
    
    /**
     * Executes index action
     *
     * @param sfRequest $request a request object
     */
    public function executeIndex(sfWebRequest $request)
    {
    }

    /**
     * Executes projectShow action
     *
     * @param sfRequest $request a request object
     *
     * Action show detail for one current project
     */
    public function executeProjectShow(sfWebRequest $request)
    {
        $this->project = $this->getRoute()->getObject();	  
    }

    /**
     * Executes projectPaypal action
     *
     * @param sfRequest $request a request object
     *
     * Action for invest amount to project from investor
     */
    public function executeProjectPaypalInvest(sfWebRequest $request)
    {
        $this->project = $this->getRoute()->getObject();	  
        $this->form = new InvestForm($request->getParameter('invest'));    

        if ($request->isMethod('post')) 
        {
            $this->form->bind($values = $request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
            if ($this->form->isValid())
            {
                $parameters = array();
                $parameters[$this->project->getId()]['project_amount'] = $values['project_amount'];
                $parameters[$this->project->getId()]['total_amount'] = $this->project->getTotalAmount($values['project_amount']);
                $this->getUser()->addInvestAmounts($parameters);
                $this->redirect($this->generateUrl('explore_paypal_calculate', $this->project));
            }
        }
        else
        {
            $this->form->setDefault('project_amount',$this->getUser()->getAmountById($this->project->getId()));
            //$this->form->setDefault('amount',100);
        }
    }

    public function executeProjectPaypalCalculate(sfWebRequest $request)
    {
        $this->project = $this->getRoute()->getObject();	  
    }

    public function executeProjectPaypalPayment(sfWebRequest $request)
    {
        $this->project = $this->getRoute()->getObject();
        $this->form = new PaymentForm($request->getParameter('payment'), array('project_id' => $this->project->getId()));        
  
        if ($request->isMethod('post')) 
        {
            $this->form->bind($values = $request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
            if ($this->form->isValid())
            {
                $settings = new SettingsDoDirectPayment();
                $this->method = $settings->getMethod();
                $params = $values;
                $params['PAYMENTACTION'] = 'Authorization';
                $params['AMT']           = 0.00;

//                echo '<pre>'; print_r($params); echo '</pre>';

                $this->paypal = new Paypal();
                $this->response = $this->paypal->request($this->method, $params);
//                print_r($this->response);

                if (is_array($this->response) && ($this->response['ACK'] === 'SuccessWithWarning'))
                {
                    $params = $values;
                    $this->paypal = new Paypal();
                    $this->response = $this->paypal->request($this->method, $params);
//                    print_r($this->response);

                    if (is_array($this->response) && ($this->response['ACK'] === 'Success'))
                    {
                        $this->transactionId = $this->response['TRANSACTIONID'];

                        // Create object Amount for transaction data writing
                        $amount = new Amount();
                        
                        $amount->setUserId($this->getUser()->getGuardUser()->getId());
                        $amount->setProjectId($this->project->getId());
                        $amount->setTransactionId($this->transactionId);
                        $amount->setFirstName($this->getUser()->getGuardUser()->getFirstName());
                        $amount->setLastName($this->getUser()->getGuardUser()->getLastName());
                        $amount->setEmailAddress($this->getUser()->getGuardUser()->getEmailAddress());
                        $amount->setUsername($this->getUser()->getGuardUser()->getUsername());

                        $amount->setCountry($params['COUNTRYCODE']);
                        $amount->setState($params['STATE']);
                        $amount->setCity($params['CITY']);
                        $amount->setAddress($params['STREET']);
                        $amount->setPostalCode($params['ZIP']);

                        $amount->setPhone($this->getUser()->getProfile()->getPhone());
                        $amount->setMobilePhone($this->getUser()->getProfile()->getMobilePhone());

                        $amount->setProjectAmount($this->getUser()->getAmountById($this->project->getId()));
                        $amount->setSiteAmount($this->project->getSiteAmount());
                        $amount->setTotalAmount($this->getUser()->getTotalAmountById($this->project->getId()));
 
                        $amount->save();

                        $this->getUser()->setFlash('transaction', $this->transactionId);			
                        $this->redirect($this->generateUrl('explore_paypal_result', $this->project));

                    }
                }
            }
        }
    }
    public function executeProjectPaypalResult(sfWebRequest $request)
    {
        $this->project = $this->getRoute()->getObject();	    
    }
}



    /**
     * Explore block
     *
     * Get project category from request
     */
    //public function executeProjectCategory(sfWebRequest $request)
    //{
    //    $request = sfContext::getInstance()->getRequest();
    //    $this->category = $this->getRoute()->getObject();	  
    //    $this->category = ProjectCategoryTable::getCategory($request);
    //}






	  /*
	  
    $settings = new SettingsDoDirectPayment();
    $this->method = $settings->getMethod();
    $this->params = $settings->getParams();

    $this->paypal = new Paypal();
    $this->response = $this->paypal->request($this->method, $this->params);

    //echo '<pre>'; print_r($response);
    // If payment successful
    if (is_array($this->response) && $this->response['ACK'] == 'Success') {
      // We'll fetch the transaction ID for internal bookkeeping
      $this->transactionId = $this->response['TRANSACTIONID'];
    }
*/

