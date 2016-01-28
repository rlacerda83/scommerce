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
            array('products' => $products['data'])
        );
    }

    /**
     * @Route("/product/{name}/{idProduct}/?sku={idSku}", name="_product")
     */
    public function detailAction($idSku)
    {
        $apiProduct = $this->container->get('api_product');
        $product = $apiProduct->getDetail($idSku);

        $skuActive = null;
        foreach ($product['data']['skus'] as $sku) {
            if ($idSku == $sku['id']) {
                $skuActive = $sku;
                break;
            }
        }

        return $this->render(
            '@Site/products/details.html.twig',
            [
                'product' => $product['data'],
                'sku' => $skuActive
            ]
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
