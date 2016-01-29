<?php

namespace CommonBundle\Factory;

use CommonBundle\Collection\SupplierCollection;
use CommonBundle\Entity\SupplierEntity;

/**
 * Class SupplierFactory
 * @package CommonBundle\Factory
 */
class SupplierFactory
{

    /**
     * @param array $suppliers
     * @return SupplierCollection
     */
    public static function createByCollection(array $suppliers)
    {
        $collection = new SupplierCollection();

        foreach ($suppliers as $supplier) {
            $objSupplier = self::setFromArray($supplier);
            $collection->add($objSupplier);
        }

        return $collection;
    }

    /**
     * @param array $arraySupplier
     * @return SupplierEntity
     */
    public static function setFromArray(array $arraySupplier)
    {
        $supplier = new SupplierEntity();

        $supplier->setId($arraySupplier['id']);
        $supplier->setName($arraySupplier['name']);
        $supplier->setStatus($arraySupplier['status']);

        return $supplier;
    }
}