<?php

namespace ApiBundle\Controller;

use CommonBundle\Entity\Category;
use FOS\RestBundle\Controller\FOSRestController;
use JMS\Serializer\SerializationContext;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Serializer\Serializer;

class CategoryController extends FOSRestController
{

    public function getCategoriesAction()
    {
        $categories = $this->getDoctrine()->getRepository('CommonBundle:Category')->getAllTree();

        $view = $this->view($categories);
        return $view;

//        throw new ResourceNotFoundException("This should return a 404 response if FOSRestBundle is configured accordingly");

//        $category = new Category();
//        $category->setName('Outr');
//        $category->setStatus(true);
//
//        $view = $this->view();
//        $view->setData($category);
//        $view->setFormat('object');
//
//        $context = new SerializationContext();
//        $context->setVersion('2.1');
//        $context->setGroups(array('data'));
//
//        $view->setSerializationContext($context);
//
//        return $this->handleView($view);

    }
}
