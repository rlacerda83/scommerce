<?php

namespace CommonBundle\Entity\Variation;
use CommonBundle\Entity\VariationEntity;

/**
 * Class AttributeEntity
 * @package CommonBundle\Entity\Variation
 */
class AttributeEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $value;

    /**
     * @var VariationEntity
     */
    protected $variation;

    /**
     * @var bool
     */
    protected $unique;

    /**
     * @var int
     */
    protected $order;

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
     * @param $value
     */
    public function setValue($value)
    {
        $this->value = (string) $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return (string) $this->value;
    }

    /**
     * @param VariationEntity $variationEntity
     */
    public function setVariation(VariationEntity $variationEntity)
    {
        $this->variation = $variationEntity;
    }

    /**
     * @return VariationEntity
     */
    public function getVariation()
    {
        return $this->variation;
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