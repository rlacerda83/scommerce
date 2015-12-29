<?php

namespace ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class CategoryController extends FOSRestController
{

    public function getCategoriesMenuAction()
    {
        $categories = $this->getDoctrine()->getRepository('CommonBundle:Category')->getAllTree();

        $view = $this->view($categories);
        return $view;
    }
}
