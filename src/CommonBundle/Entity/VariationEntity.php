<?php

namespace CommonBundle\Entity;

/**
 * Class VariationEntity
 * @package CommonBundle\Entity
 */
class VariationEntity
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
     * @var string
     */
    protected $label;

    /**
     * @var bool
     */
    protected $unique;

    /**
     * @var int
     */
    protected $status;

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
     * @param $label
     */
    public function setLabel($label)
    {
        $this->label = (string) $label;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return (string) $this->label;
    }

    /**
     * @param $unique
     */
    public function setUnique($unique)
    {
        $this->unique = (bool) $unique;
    }

    /**
     * @return bool
     */
    public function getUnique()
    {
        return (bool) $this->unique;
    }

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = (int) $status;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return (int) $this->status;
    }
}