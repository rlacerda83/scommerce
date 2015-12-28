<?php

namespace CommonBundle\Entity;

/**
 * VariationAttribute
 */
class VariationAttribute
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $value = '';

    /**
     * @var integer
     */
    private $order;

    /**
     * @var boolean
     */
    private $status = '1';

    /**
     * @var boolean
     */
    private $unique = '0';

    /**
     * @var \CommonBundle\Entity\Variation
     */
    private $variation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sku;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sku = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set value
     *
     * @param string $value
     *
     * @return VariationAttribute
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set order
     *
     * @param integer $order
     *
     * @return VariationAttribute
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return integer
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return VariationAttribute
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set unique
     *
     * @param boolean $unique
     *
     * @return VariationAttribute
     */
    public function setUnique($unique)
    {
        $this->unique = $unique;

        return $this;
    }

    /**
     * Get unique
     *
     * @return boolean
     */
    public function getUnique()
    {
        return $this->unique;
    }

    /**
     * Set variation
     *
     * @param \CommonBundle\Entity\Variation $variation
     *
     * @return VariationAttribute
     */
    public function setVariation(\CommonBundle\Entity\Variation $variation = null)
    {
        $this->variation = $variation;

        return $this;
    }

    /**
     * Get variation
     *
     * @return \CommonBundle\Entity\Variation
     */
    public function getVariation()
    {
        return $this->variation;
    }

    /**
     * Add sku
     *
     * @param \CommonBundle\Entity\ProductSku $sku
     *
     * @return VariationAttribute
     */
    public function addSku(\CommonBundle\Entity\ProductSku $sku)
    {
        $this->sku[] = $sku;

        return $this;
    }

    /**
     * Remove sku
     *
     * @param \CommonBundle\Entity\ProductSku $sku
     */
    public function removeSku(\CommonBundle\Entity\ProductSku $sku)
    {
        $this->sku->removeElement($sku);
    }

    /**
     * Get sku
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSku()
    {
        return $this->sku;
    }
}
