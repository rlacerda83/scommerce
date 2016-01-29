<?php

namespace CommonBundle\Factory\Product\Sku;

use CommonBundle\Collection\Product\Sku\ImageCollection;
use CommonBundle\Entity\Product\Sku\ImageEntity;
use CommonBundle\Entity\Product\SkuEntity;

/**
 * Class ImageFactory
 * @package CommonBundle\Factory
 */
class ImageFactory
{

    /**
     * @param array $images
     * @param SkuEntity $sku
     * @return ImageCollection
     */
    public static function createByCollection(array $images, SkuEntity $sku)
    {
        $collection = new ImageCollection();

        foreach ($images as $image) {
            $objImage = self::setFromArray($image, $sku);
            $collection->add($objImage);
        }

        return $collection;
    }

    /**
     * @param array $arrayImage
     * @param SkuEntity $sku
     * @return ImageEntity
     */
    public static function setFromArray(array $arrayImage, SkuEntity $sku)
    {
        $image = new ImageEntity();

        $image->setSku($sku);
        $image->setImage($arrayImage['image']);
        $image->setOrder($arrayImage['order']);

        return $image;
    }
}