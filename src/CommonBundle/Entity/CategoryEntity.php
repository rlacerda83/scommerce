<?php

namespace CommonBundle\Entity;

use CommonBundle\Collection\CategoryCollection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class CategoryEntity
 * @package CommonBundle\Entity
 */
class CategoryEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var mixed
     */
    protected $parentCategory;

    /**
     * @var int
     */
    protected $order;

    /**
     * @var int
     */
    protected $status;

    /**
     * @var ArrayCollection
     */
    protected $children;


    public function __construct()
    {
        $this->children = new CategoryCollection();
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = (int) $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return (int) $this->id;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = (string) $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return (string) $this->name;
    }

    /**
     * @param null $parentCategory
     */
    public function setParentCategory($parentCategory = null)
    {
        $this->parentCategory = $parentCategory;
    }

    /**
     * @return mixed
     */
    public function getParentCategory()
    {
        return $this->parentCategory;
    }

    /**
     * @param $order
     */
    public function setOrder($order)
    {
        $this->order = (int) $order;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return (int) $this->order;
    }

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = (bool) $status;
    }

    /**
     * @return bool
     */
    public function getStatus()
    {
        return (bool) $this->status;
    }

    /**
     * @return ArrayCollection
     */
    public function getChildren()
    {
        return $this->children;
    }
}