<?php

namespace SiteBundle\Services\Api;

use Symfony\Component\DependencyInjection\Container;
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
        return $this->sendRequest(self::QS_TREE);
    }
}