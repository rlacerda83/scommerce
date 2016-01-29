<?php

namespace CommonBundle\Entity\Product;

use CommonBundle\Collection\Product\Sku\AttributeCollection;
use CommonBundle\Collection\Product\Sku\ImageCollection;
use CommonBundle\Entity\ProductEntity;

class SkuEntity
{
	/**
	 * @var int
	 */
	protected $id;

    /**
     * @var string
     */
    protected $sku;

    /**
     * @var ProductEntity
     */
    protected $product;

	/**
	 * @var bool
	 */
	protected $showCase;

    /**
     * @var string
     */
	protected $supplierReference;

    /**
     * @var float
     */
	protected $price;

	/**
	 * @var float
	 */
	protected $cost;

	/**
	 * @var float
	 */
	protected $weight;

	/**
	 * @var float
	 */
	protected $height;

	/**
	 * @var float
	 */
	protected $width;

	/**
	 * @var float
	 */
	protected $length;

	/**
	 * @var int
	 */
	protected $stock;

    /**
     * @var int
     */
    protected $stockMinimum;

    /**
     * @var int
     */
    protected $order;

    /**
     * @var int
     */
    protected $status;

	/**
	 * @var ImageCollection
	 */
	protected $imageCollection;

    /**
     * @var AttributeCollection
     */
    protected $attributeCollection;


	public function __construct()
	{
		$this->imageCollection = new ImageCollection();
        $this->attributeCollection = new AttributeCollection();
	}

	/**
	 * @return int
	 */
	public function getId()
	{
		return (int) $this->id;
	}

	/**
	 * @param $id
	 */
	public function setId($id)
	{
		$this->id = (int) $id;
	}

	/**
	 * @return string
	 */
	public function getSku()
	{
		return (string) $this->sku;
	}

    /**
     * @param $sku
     */
    public function setSku($sku)
    {
        $this->sku = (string) $sku;
    }

    /**
     * @param ProductEntity $product
     */
	public function setProduct(ProductEntity $product)
	{
		$this->product = $product;
	}

    /**
     * @return ProductEntity
     */
	public function getProduct()
	{
		return $this->product;
	}

    /**
     * @return bool
     */
    public function getShowCase()
    {
        return (bool) $this->showCase;
    }

    /**
     * @param $showCase
     */
    public function setShowCase($showCase)
    {
        $this->showCase = (string) $showCase;
    }

	/**
	 * @return string
	 */
	public function getSupplierReference()
	{
		return (string) $this->supplierReference;
	}

    /**
     * @param $supplierReference
     */
	public function setSupplierReference($supplierReference)
	{
		$this->supplierReference = $supplierReference;
	}

    /**
     * @param bool|true $product
     * @param string $separator
     * @return string
     */
    public function getName($product = true, $separator = ' - ')
    {
        $items = array();
        foreach ($this->getAttributeCollection() as $attribute) {
            //$items[] = "{$attribute->getVariation()->getRotule()}: {$attribute->getValue()}";
            $items[] = "{$attribute->getValue()}";
        }
        $name = implode($separator, $items);

        if ($product == true) {
            $name = "{$this->getProduct()->getName()} {$separator} {$name}";
        }

        return $name;
    }

    /**
     * @return float
     */
	public function getPrice()
	{
		return (float) $this->price;
	}

    /**
     * @param $price
     */
	public function setPrice($price)
	{
		$this->price = (float) $price;
	}

    /**
     * @return float
     */
    public function getCost()
    {
        return (float) $this->cost;
    }

    /**
     * @param $cost
     */
    public function setCost($cost)
    {
        $this->cost = (float) $cost;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return (float) $this->weight;
    }

    /**
     * @param $weight
     */
    public function setWeight($weight)
    {
        $this->weight = (float) $weight;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return (float) $this->height;
    }

    /**
     * @param $height
     */
    public function setHeight($height)
    {
        $this->height = (float) $height;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
        return (float) $this->width;
    }

    /**
     * @param $width
     */
    public function setWidth($width)
    {
        $this->width = (float) $width;
    }

    /**
     * @return float
     */
    public function getLength()
    {
        return (float) $this->length;
    }

    /**
     * @param $length
     */
    public function setLength($length)
    {
        $this->price = (float) $length;
    }

    /**
     * @return int
     */
    public function getStock()
    {
        return (int) $this->stock;
    }

    /**
     * @param $stock
     */
    public function setStock($stock)
    {
        $this->stock = (int) $stock;
    }

    /**
     * @return int
     */
    public function getStockMinimum()
    {
        return (int) $this->stockMinimum;
    }

    /**
     * @param $stock
     */
    public function setStockMinimum($stock)
    {
        $this->stockMinimum = (int) $stock;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return (int) $this->order;
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
    public function getStatus()
    {
        return (int) $this->status;
    }

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = (int) $status;
    }

    /**
     * @return ImageCollection
     */
    public function getImageCollection()
    {
        return $this->imageCollection;
    }

    /**
     * @param ImageCollection $imageCollection
     */
    public function setImageCollection(ImageCollection $imageCollection)
    {
        $this->imageCollection = $imageCollection;
    }

    /**
     * @return AttributeCollection
     */
    public function getAttributeCollection()
    {
        return $this->attributeCollection;
    }

    /**
     * @param AttributeCollection $attributeCollection
     */
    public function setAttributeCollection(AttributeCollection $attributeCollection)
    {
        $this->attributeCollection = $attributeCollection;
    }

}