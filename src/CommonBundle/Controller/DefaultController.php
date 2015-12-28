<?php

namespace CommonBundle\Controller;

use CommonBundle\Entity\Product;
use CommonBundle\Entity\Suppliers;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('site/default/index.html.twig');
    }
}
