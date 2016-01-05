<?php

namespace SiteBundle\Controller;

use SiteBundle\Services\Api\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductController extends Controller
{

    public function getFeaturedsAction()
    {
        $apiProduct = $this->container->get('api_product');
        $products = $apiProduct->getFeatureds();

        return $this->render(
            '@Site/products/featureds.html.twig',
            array('products' => $products['data'])
        );
    }

    /**
     * @Route("/product/{name}/{idProduct}?sku={idSku}", name="_product")
     */
    public function detailAction($idProduct, $idSku)
    {
        return $this->render(
            '@Site/categories/menu.html.twig',
            array('categories' => null)
        );
    }
}
