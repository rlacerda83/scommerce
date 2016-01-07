<?php

namespace SiteBundle\Controller;

use CommonBundle\Services\Api\ApiGateway;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="_home")
     */
    public function indexAction()
    {
        return $this->render('SiteBundle:Default:index.html.twig');
    }
}
