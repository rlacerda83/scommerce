<?php

namespace SiteBundle\Services\Api;

use GuzzleHttp\Client as GuzzleClient;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\Request;

class ApiGateway
{

    /*
     * @var GuzzleHttp\Client
     */
    protected $client;

    /**
     * @var string
     */
    protected $baseUrl;

    /**
     * ApiGateway constructor.
     * @param Container $container
     */
    public function __construct(Container $container)
    {

        $this->baseUrl = $container->getParameter('api.base_url');
        $this->client = new GuzzleClient(
            [
                'base_uri' => $this->baseUrl,
                'headers' => [
                    'Accept'     => 'application/json',
                    'Api-Token'  => 'key:' . $container->getParameter('api.token')
                ]
            ]
        );
    }

    /**
     * @param $method
     * @param array $options
     * @param string $requestType
     * @return bool|mixed
     * @throws \Exception
     */
    public function sendRequest($method = null, $options = [], $requestType = 'get')
    {
        try {
            $response = $this->client->request($requestType, $this->baseUrl . $method, $options);
            if ($response->getStatusCode() == 200 ) {
                return json_decode($response->getBody()->getContents(), true);
            }

            return false;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * @param Request $request
     * @return array
     */
    public function parseQueryString(Request $request)
    {
        $options = [];
        $params = array_merge($request->request->all());
        foreach ($params as $key => $value) {
            $options['query'][$key] = $value;
        }

        return $options;
    }

}