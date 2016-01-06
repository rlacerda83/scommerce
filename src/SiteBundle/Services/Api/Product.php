<?php

namespace SiteBundle\Services\Api;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\Request;

class Product extends ApiGateway
{
    protected $url;

    const QS_ALL = 'common/products';
    const QS_FEATUREDS = 'common/products/featureds';
    const QS_DETAIL = 'web/products/%s/details-page';

    /**
     * @param Request $request
     * @return bool|mixed
     * @throws \Exception
     */
    public function getAll(Request $request)
    {
        $options = $this->parseQueryString($request);
        return $this->sendRequest(self::QS_ALL, $options);
    }

    public function getFeatureds()
    {
        return $this->sendRequest(self::QS_FEATUREDS);
    }

    public function getDetail($idSku)
    {
        $url = sprintf(self::QS_DETAIL, $idSku);
        return $this->sendRequest($url);
    }
}