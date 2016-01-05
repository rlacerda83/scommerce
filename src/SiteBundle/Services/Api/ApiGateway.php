<?php

namespace CommonBundle\Services\Api;

use GuzzleHttp\Client as GuzzleClient;

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
     * Client constructor.
     * @param $baseUrl
     */
    public function __construct($baseUrl)
    {
        $this->baseUrl = $baseUrl;
        $this->client = new GuzzleClient(
            [
                'base_uri' => $baseUrl,
                'headers' => [
                    'Accept'     => 'application/json',
                    'Api-Token'  => 'key:f8MOZ9dYU4ap5F12m95PIPAA5AJG3Sh6'
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
        $params = $request->all();
        foreach ($params as $key => $value) {
            $options['query'][$key] = $value;
        }

        return $options;
    }

}