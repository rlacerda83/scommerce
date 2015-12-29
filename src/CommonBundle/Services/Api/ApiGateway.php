<?php

namespace CommonBundle\Services\Api;

class ApiGateway
{

    protected $url = 'http://ecommerce.local/api/v1/';

    public function sendRequest($method, $data = null, $requestType = 'GET')
    {
        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, sprintf('%s%s', $this->url, $method));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,10);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10); //timeout in seconds
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $requestType);

            if ($data) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            }

            $response = curl_exec ($ch);

            curl_close ($ch);

            return json_decode($response);
        } catch (\Exception $e) {
            throw $e;
        }
    }
}