<?php

namespace CommonBundle\Factory;

use CommonBundle\Collection\VariationCollection;
use CommonBundle\Entity\VariationEntity;

/**
 * Class VariationFactory
 * @package CommonBundle\Factory
 */
class VariationFactory
{

    /**
     * @param array $variations
     * @return VariationCollection
     */
    public static function createByCollection(array $variations)
    {
        $collection = new VariationCollection();

        foreach ($variations as $variation) {
            $objVariation = self::setFromArray($variation);
            $collection->add($objVariation);
        }

        return $collection;
    }

    /**
     * @param array $arrayVariation
     * @return VariationEntity
     */
    public static function setFromArray(array $arrayVariation)
    {
        $variation = new VariationEntity();

        $variation->setId($arrayVariation['id']);
        $variation->setName($arrayVariation['name']);
        $variation->setLabel($arrayVariation['label']);
        $variation->setUnique($arrayVariation['unique']);

        return $variation;
    }
}