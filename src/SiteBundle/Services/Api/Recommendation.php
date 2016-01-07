<?php

namespace SiteBundle\Services\Api;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\Request;

class Recommendation extends ApiGateway
{
    protected $url;

    const QS_VIEW_ALSO_VIEW = 'common/recomendations/view-also-view';

    /**
     * @param Request $request
     * @return bool|mixed
     * @throws \Exception
     */
    public function getViewAlsoView(Request $request)
    {
        $options = $this->parseQueryString($request);
        return $this->sendRequest(self::QS_VIEW_ALSO_VIEW, $options);
    }

}