<?php

namespace SiteBundle\Controller;

use SiteBundle\Services\Api\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CategoryController extends Controller
{

    public function renderMenuAction()
    {
        $apiCategory = $this->container->get('api_category');
        $categories = $apiCategory->getTree();

        return $this->render(
            '@Site/categories/menu.html.twig',
            array('categories' => $categories['data'])
        );
    }

    /**
     * @Route("/category/{name}/{id}", name="_category")
     */
    public function getProductsAction($id)
    {
        return $this->render(
            '@Site/categories/menu.html.twig',
            array('categories' => bull)
        );
    }
}
