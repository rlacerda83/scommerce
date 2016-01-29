<?php

namespace CommonBundle\Factory;

use CommonBundle\Collection\ProductCollection;
use CommonBundle\Entity\ProductEntity;
use CommonBundle\Factory\Product\SkuFactory;

/**
 * Class CategoryFactory
 * @package CommonBundle\Factory
 */
class ProductFactory
{

    /**
     * @param array $products
     * @return ProductCollection
     */
    public static function createByCollection(array $products)
    {
        $collection = new ProductCollection();

        foreach ($products as $product) {
            $objProduct = self::setFromArray($product);
            $collection->add($objProduct);
        }

        return $collection;
    }

    /**
     * @param array $product
     * @return ProductEntity
     */
    public static function setFromArray(array $product)
    {
        $objProduct = new ProductEntity();

        // product data
        $objProduct->setId($product['id']);
        $objProduct->setName($product['name']);
        $objProduct->setTags($product['tags']);
        $objProduct->setDescription($product['description']);
        $objProduct->setMetaTitle($product['meta_title']);
        $objProduct->setMetaDescription($product['meta_description']);
        $objProduct->setMetaTags($product['meta_tags']);
        $objProduct->setCreatedAt($product['created_at']);
        $objProduct->setFeatured($product['featured']);
        $objProduct->setStatus($product['status']);

        //supplier data
        $objSupplier = SupplierFactory::setFromArray($product['supplier']);
        $objProduct->setSupplier($objSupplier);

        //suk data
        $skuCollection = SkuFactory::createByCollection($product['skus'], $objProduct);
        $objProduct->setSkuCollection($skuCollection);

        return $objProduct;
    }
}