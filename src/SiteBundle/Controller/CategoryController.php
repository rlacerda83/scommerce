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
            array('categories' => $categories)
        );
    }

    /**
     * @Route("/category/{name}/{id}", name="_category")
     */
    public function getProductsAction($id)
    {
        $apiProducts = $this->container->get('api_product');
        $filter = [
            'category|id' => $id
        ];

        $products = $apiProducts->getAll($filter);

        return $this->render(
            '@Site/categories/index.html.twig',
            array('products' => $products['data'])
        );
    }
}
