<?php

namespace SiteBundle\Services\Api;

use CommonBundle\Factory\CategoryFactory;
use Symfony\Component\HttpFoundation\Request;

class Category extends ApiGateway
{
    protected $url;

    const QS_ALL = 'common/categories';
    const QS_TREE = 'common/categories/tree';

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

    public function getTree()
    {
        $result = $this->sendRequest(self::QS_TREE);
        return CategoryFactory::createByTree($result['data']);
    }
}