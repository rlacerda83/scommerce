<?php

namespace SiteBundle\Controller;

use SiteBundle\Services\Api\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RecommendationController extends Controller
{

    public function getRecommendationsAction()
    {
//        $api = $this->container->get('api_recommendation');
//        $recommendations = [];

        $apiProduct = $this->container->get('api_product');
        $recommendations = $apiProduct->getFeatureds();


        return $this->render(
            '@Site/products/recommendations.html.twig',
            array('products' => $recommendations['data'])
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
