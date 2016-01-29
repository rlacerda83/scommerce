<?php

namespace CommonBundle\Entity;
use CommonBundle\Collection\Product\SkuCollection;

/**
 * Class ProductEntity
 * @package CommonBundle\Entity
 */
class ProductEntity
{
	/**
	 * @var int
	 */
	protected $id;

	/**
	 * @var string
	 */
	protected $name;

    /**
     * @var SupplierEntity
     */
	protected $supplier;

    /**
     * @var string
     */
	protected $createdAt;

	/**
	 * @var string
	 */
	protected $tags;

	/**
	 * @var string
	 */
	protected $metaTitle;

	/**
	 * @var string
	 */
	protected $metaTags;

	/**
	 * @var string
	 */
	protected $metaDescription;

	/**
	 * @var string
	 */
	protected $description;

	/**
	 * @var bool
	 */
	protected $featured;

	/**
	 * @var int
	 */
	protected $status;

	/**
	 * @var SkuCollection
	 */
	protected $sku;


	public function __construct()
	{
		$this->sku = new SkuCollection();
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
	public function getName()
	{
		return (string) $this->name;
	}

	/**
	 * @param $name
	 */
	public function setName($name)
	{
		$this->name = (string) $name;
	}

	/**
	 * @return string
	 */
	public function getDescription()
	{
		return (string) $this->description;
	}

	/**
	 * @param $description
	 */
	public function setDescription($description)
	{
		$this->description = (string) $description;
	}

	/**
	 * @return mixed
	 */
	public function getSupplier()
	{
		return $this->supplier;
	}

    /**
     * @param SupplierEntity $supplier
     */
	public function setSupplier(SupplierEntity $supplier)
	{
		$this->supplier = $supplier;
	}

	/**
	 * @return string
	 */
	public function getTags()
	{
		return (string) $this->tags;
	}

	/**
	 * @param $tags
	 */
	public function setTags($tags)
	{
		$this->tags = (string) $tags;
	}

	/**
	 * @return string
	 */
	public function getMetaTitle()
	{
		return (string) $this->metaTitle;
	}

	/**
	 * @param $metaTitle
	 */
	public function setMetaTitle($metaTitle)
	{
		$this->metaTitle = (string) $metaTitle;
	}

	/**
	 * @return string
	 */
	public function getMetaDescription()
	{
		return (string) $this->metaDescription;
	}

	/**
	 * @param $metaDescription
	 */
	public function setMetaDescription($metaDescription)
	{
		$this->metaDescription = (int) $metaDescription;
	}
}