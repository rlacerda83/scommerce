<?php

namespace CommonBundle\Factory\Product;

use CommonBundle\Collection\Product\SkuCollection;
use CommonBundle\Entity\ProductEntity;
use CommonBundle\Entity\Product\SkuEntity;
use CommonBundle\Factory\Product\Sku\ImageFactory;
use CommonBundle\Factory\Variation\AttributeFactory;

/**
 * Class SkuFactory
 * @package CommonBundle\Factory\Product
 */
class SkuFactory
{

    /**
     * @param array $skus
     * @param ProductEntity $product
     * @return SkuCollection
     */
    public static function createByCollection(array $skus, ProductEntity $product)
    {
        $collection = new SkuCollection();

        foreach ($skus as $sku) {
            $objSku = self::setFromArray($sku, $product);
            $collection->add($objSku);
        }

        return $collection;
    }

    /**
     * @param array $sku
     * @param ProductEntity $product
     * @return SkuEntity
     */
    private static function setFromArray(array $sku, ProductEntity $product)
    {
        $objSku = new SkuEntity();

        // sku data
        $objSku->setId($sku['id']);
        $objSku->setProduct($product);
        $objSku->setSku($sku['sku']);
        $objSku->setShowCase($sku['showcase']);
        $objSku->setSupplierReference($sku['supplier_ref']);
        $objSku->setPrice($sku['price']);
        $objSku->setCost($sku['cost']);
        $objSku->setWeight($sku['weight']);
        $objSku->setHeight($sku['height']);
        $objSku->setWidth($sku['width']);
        $objSku->setLength($sku['length']);
        $objSku->setStock($sku['stock']);
        $objSku->setStockMinimum($sku['stock_min']);
        $objSku->setOrder($sku['order']);
        $objSku->setStatus($sku['status']);


        //sku images
        $imageCollection = ImageFactory::createByCollection($sku['images'], $objSku);
        $objSku->setImageCollection($imageCollection);

        //sku attributes
        $attributeCollection = AttributeFactory::createByCollection($sku['attributes']);
        $objSku->setAttributeCollection($attributeCollection);

        return $objSku;
    }
}