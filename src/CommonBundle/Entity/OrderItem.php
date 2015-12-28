<?php

namespace CommonBundle\Entity;

/**
 * OrderItem
 */
class OrderItem
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $qty;

    /**
     * @var float
     */
    private $unitPrice;

    /**
     * @var \CommonBundle\Entity\Order
     */
    private $order;

    /**
     * @var \CommonBundle\Entity\ProductSku
     */
    private $sku;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set qty
     *
     * @param integer $qty
     *
     * @return OrderItem
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * Get qty
     *
     * @return integer
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * Set unitPrice
     *
     * @param float $unitPrice
     *
     * @return OrderItem
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Get unitPrice
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Set order
     *
     * @param \CommonBundle\Entity\Order $order
     *
     * @return OrderItem
     */
    public function setOrder(\CommonBundle\Entity\Order $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \CommonBundle\Entity\Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set sku
     *
     * @param \CommonBundle\Entity\ProductSku $sku
     *
     * @return OrderItem
     */
    public function setSku(\CommonBundle\Entity\ProductSku $sku = null)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get sku
     *
     * @return \CommonBundle\Entity\ProductSku
     */
    public function getSku()
    {
        return $this->sku;
    }
}
