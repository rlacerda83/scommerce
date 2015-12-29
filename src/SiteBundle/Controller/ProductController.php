<?php

namespace SiteBundle\Controller;

use CommonBundle\Services\Api\CategoryApiGateway;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductController extends Controller
{
    /**
     * @Route("/")
     */
    public function categoriesAction()
    {
        $apiCategory = new CategoryApiGateway();
        $categories = $apiCategory->getAllToMenu();

        return $this->render(
            '@Site/categories/menu.html.twig',
            array('categories' => $categories)
        );
    }
}
