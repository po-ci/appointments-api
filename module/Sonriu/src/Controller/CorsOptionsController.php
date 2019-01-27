<?php

namespace Sonriu\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * CorsOptionsController
 *
 *
 *
 * @author
 * @license
 * @link
 */
class CorsOptionsController extends AbstractActionController
{

    public function indexAction()
    {
       /* $this->getResponse()->getHeaders()->addHeaderLine('Access-Control-Allow-Origin',"*");
        $this->getResponse()->getHeaders()->addHeaderLine('Access-Control-Allow-Methods', "GET, POST, OPTIONS");
        $this->getResponse()->getHeaders()->addHeaderLine('Access-Control-Allow-Headers', "application/json");*/
        return "";
    }


}

