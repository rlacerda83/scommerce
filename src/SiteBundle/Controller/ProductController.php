<?php

namespace SiteBundle\Controller;

use SiteBundle\Services\Api\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductController extends Controller
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getFeaturedsAction()
    {
        $apiProduct = $this->container->get('api_product');
        $products = $apiProduct->getFeatureds();

        return $this->render(
            '@Site/products/featureds.html.twig',
            ['products' => $products]
        );
    }

    /**
     * @Route("/product/{name}/{idProduct}/?sku={idSku}", name="_product")
     */
    public function detailAction($idSku)
    {
        $apiProduct = $this->container->get('api_product');
        $product = $apiProduct->getDetail($idSku);

        $currentSku = null;
        foreach ($product->getSkuCollection() as $sku) {
            if ($idSku == $sku->getId()) {
                $currentSku = $sku;
                break;
            }
        }

        return $this->render(
            '@Site/products/details.html.twig',
            ['sku' => $currentSku]
        );
    }


    public function searchAction($id)
    {
        $apiProducts = $this->container->get('api_product');
        $filter = [
            'category|id' => $id
        ];

        $products = $apiProducts->getAll($filter);
        print_r($products); die;

        return $this->render(
            '@Site/categories/menu.html.twig',
            array('categories' => bull)
        );
    }
}
