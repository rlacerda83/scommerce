<?php

namespace CommonBundle\Entity;

/**
 * ProductSku
 */
class ProductSku
{
    /**
     * @var string
     */
    private $sku = '';

    /**
     * @var boolean
     */
    private $showcase = '0';

    /**
     * @var string
     */
    private $supplierRef;

    /**
     * @var float
     */
    private $price;

    /**
     * @var float
     */
    private $cost;

    /**
     * @var float
     */
    private $weight;

    /**
     * @var float
     */
    private $height;

    /**
     * @var float
     */
    private $width;

    /**
     * @var float
     */
    private $length;

    /**
     * @var integer
     */
    private $stock = '0';

    /**
     * @var integer
     */
    private $stockMin;

    /**
     * @var boolean
     */
    private $order;

    /**
     * @var boolean
     */
    private $status = '1';

    /**
     * @var \CommonBundle\Entity\Product
     */
    private $product;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $attribute;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->attribute = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set showcase
     *
     * @param boolean $showcase
     *
     * @return ProductSku
     */
    public function setShowcase($showcase)
    {
        $this->showcase = $showcase;

        return $this;
    }

    /**
     * Get showcase
     *
     * @return boolean
     */
    public function getShowcase()
    {
        return $this->showcase;
    }

    /**
     * Set supplierRef
     *
     * @param string $supplierRef
     *
     * @return ProductSku
     */
    public function setSupplierRef($supplierRef)
    {
        $this->supplierRef = $supplierRef;

        return $this;
    }

    /**
     * Get supplierRef
     *
     * @return string
     */
    public function getSupplierRef()
    {
        return $this->supplierRef;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return ProductSku
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set cost
     *
     * @param float $cost
     *
     * @return ProductSku
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set weight
     *
     * @param float $weight
     *
     * @return ProductSku
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set height
     *
     * @param float $height
     *
     * @return ProductSku
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set width
     *
     * @param float $width
     *
     * @return ProductSku
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set length
     *
     * @param float $length
     *
     * @return ProductSku
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     *
     * @return ProductSku
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set stockMin
     *
     * @param integer $stockMin
     *
     * @return ProductSku
     */
    public function setStockMin($stockMin)
    {
        $this->stockMin = $stockMin;

        return $this;
    }

    /**
     * Get stockMin
     *
     * @return integer
     */
    public function getStockMin()
    {
        return $this->stockMin;
    }

    /**
     * Set order
     *
     * @param boolean $order
     *
     * @return ProductSku
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return boolean
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
     * @return ProductSku
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
     * Set product
     *
     * @param \CommonBundle\Entity\Product $product
     *
     * @return ProductSku
     */
    public function setProduct(\CommonBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \CommonBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Add attribute
     *
     * @param \CommonBundle\Entity\VariationAttribute $attribute
     *
     * @return ProductSku
     */
    public function addAttribute(\CommonBundle\Entity\VariationAttribute $attribute)
    {
        $this->attribute[] = $attribute;

        return $this;
    }

    /**
     * Remove attribute
     *
     * @param \CommonBundle\Entity\VariationAttribute $attribute
     */
    public function removeAttribute(\CommonBundle\Entity\VariationAttribute $attribute)
    {
        $this->attribute->removeElement($attribute);
    }

    /**
     * Get attribute
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAttribute()
    {
        return $this->attribute;
    }
}
