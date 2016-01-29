<?php

namespace SiteBundle\Services\Api;

use CommonBundle\Factory\ProductFactory;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\Request;

class Product extends ApiGateway
{
    protected $url;

    const QS_ALL = 'common/products';
    const QS_FEATUREDS = 'common/products/featureds';
    const QS_DETAIL = 'web/products/%s/details-page';


    public function getAll($filter = null)
    {
        $options = null;
        if ($filter !== null) {
            $options['query'] = $filter;
        }

        return $this->sendRequest(self::QS_ALL, $options);
    }

    public function getFeatureds()
    {
        $result = $this->sendRequest(self::QS_FEATUREDS);
        return ProductFactory::createByCollection($result['data']);
    }

    public function getDetail($idSku)
    {
        $url = sprintf(self::QS_DETAIL, $idSku);
        $result = $this->sendRequest($url);
        return ProductFactory::setFromArray($result['data']);
    }
}