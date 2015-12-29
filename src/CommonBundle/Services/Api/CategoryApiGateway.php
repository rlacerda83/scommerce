<?php

namespace CommonBundle\Services\Api;

class CategoryApiGateway extends ApiGateway
{
    protected $url = 'http://ecommerce.local/api/v1/';

    const METHOD_GET_ALL_MENU = 'categories';

    public function getAllToMenu()
    {
        $response = $this->sendRequest(self::METHOD_GET_ALL_MENU);
        return json_decode($response);
    }

    public function createCategory()
    {

    }

    public function updateCategory()
    {

    }

    public function deleteCategory()
    {

    }
}