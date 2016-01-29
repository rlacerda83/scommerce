<?php

namespace CommonBundle\Factory;

use CommonBundle\Collection\CategoryCollection;
use CommonBundle\Entity\CategoryEntity;

/**
 * Class CategoryFactory
 * @package CommonBundle\Factory
 */
class CategoryFactory
{

    /**
     * @param array $categories
     * @return CategoryCollection
     */
    public static function createByTree(array $categories)
    {
        $collection = new CategoryCollection();

        foreach ($categories as $category) {
            $objCategory = self::setFromArray($category);
            $collection->add($objCategory);
        }

        return $collection;
    }

    /**
     * @param array $arrayCategory
     * @return CategoryEntity
     */
    private static function setFromArray(array $arrayCategory)
    {
        $category = new CategoryEntity();

        $category->setId($arrayCategory['id']);
        $category->setParentCategory(empty($arrayCategory['parent_category_id']) ? null : $arrayCategory['parent_category_id']);
        $category->setName($arrayCategory['name']);
        $category->setOrder(isset($arrayCategory['order']) ? $arrayCategory['order'] : 1);
        $category->setStatus(isset($arrayCategory['status']) ? $arrayCategory['status'] : 1);

        if (! isset($arrayCategory['children'])) {
            return $category;
        }

        foreach ($arrayCategory['children'] as $children) {
            $category->getChildren()->add(self::setFromArray($children));
        }

        return $category;
    }
}