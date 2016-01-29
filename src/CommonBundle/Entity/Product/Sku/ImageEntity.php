<?php

namespace CommonBundle\Entity\Product\Sku;
use CommonBundle\Entity\Product\SkuEntity;

/**
 * Class ImageEntity
 * @package CommonBundle\Entity\Product\Sku
 */
class ImageEntity
{
    /**
     * @var SkuEntity
     */
    protected $sku;

    /**
     * @var string
     */
    protected $image;

    /**
     * @var int
     */
    protected $order;

    /**
     * @param SkuEntity $sku
     */
    public function setSku(SkuEntity $sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return SkuEntity
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return (string) $this->image;
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
}