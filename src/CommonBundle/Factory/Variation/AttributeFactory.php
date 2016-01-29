<?php

namespace CommonBundle\Factory\Variation;

use CommonBundle\Collection\Product\Sku\AttributeCollection;
use CommonBundle\Entity\Variation\AttributeEntity;
use CommonBundle\Factory\VariationFactory;

/**
 * Class AttributeFactory
 * @package CommonBundle\Factory\Variation
 */
class AttributeFactory
{

    /**
     * @param array $attributes
     * @return AttributeCollection
     */
    public static function createByCollection(array $attributes)
    {
        $collection = new AttributeCollection();

        foreach ($attributes as $attribute) {
            $objAttribute = self::setFromArray($attribute);
            $collection->add($objAttribute);
        }

        return $collection;
    }

    /**
     * @param array $arrayAttribute
     * @return AttributeEntity
     */
    public static function setFromArray(array $arrayAttribute)
    {
        $attribute = new AttributeEntity();

        $attribute->setId($arrayAttribute['id']);
        $attribute->setValue($arrayAttribute['value']);
        $attribute->setOrder($arrayAttribute['order']);
        $attribute->setUnique($arrayAttribute['unique']);
        $attribute->setStatus($arrayAttribute['status']);

        if (isset($arrayAttribute['variation'])) {
            $variation = VariationFactory::setFromArray($arrayAttribute['variation']);
            $attribute->setVariation($variation);
        }

        return $attribute;
    }
}