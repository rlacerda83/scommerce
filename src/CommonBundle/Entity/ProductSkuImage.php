<?php

namespace CommonBundle\Entity;

/**
 * ProductSkuImage
 */
class ProductSkuImage
{
    /**
     * @var string
     */
    private $image;

    /**
     * @var boolean
     */
    private $order = '0';

    /**
     * @var \CommonBundle\Entity\ProductSku
     */
    private $sku;


    /**
     * Set image
     *
     * @param string $image
     *
     * @return ProductSkuImage
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set order
     *
     * @param boolean $order
     *
     * @return ProductSkuImage
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
     * Set sku
     *
     * @param \CommonBundle\Entity\ProductSku $sku
     *
     * @return ProductSkuImage
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
