<?php

namespace SKCMS\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormController extends Controller
{
    
    
    public function postAction()
    {
       $contactHandler = $this->get('skcms.contact.form');
       $result = $contactHandler->get();
       
       $response = [];
       if ($result instanceof \Symfony\Component\HttpFoundation\RedirectResponse)
       {
           $response['status']=1;
           
       }
       else
       {
           $response['status']=0;
           $response['view']=$response;
       }
       
       return new \Symfony\Component\HttpFoundation\JsonResponse($response);
    }
    
    
}
