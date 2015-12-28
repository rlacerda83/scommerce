<?php

namespace CommonBundle\Entity;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var string
     */
    private $tags;

    /**
     * @var string
     */
    private $metaTitle;

    /**
     * @var string
     */
    private $metaTags;

    /**
     * @var string
     */
    private $metaDescription;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $featured = '0';

    /**
     * @var boolean
     */
    private $status = '1';

    /**
     * @var \CommonBundle\Entity\Suppliers
     */
    private $supplier;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $category;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $variation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->category = new \Doctrine\Common\Collections\ArrayCollection();
        $this->variation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Product
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set tags
     *
     * @param string $tags
     *
     * @return Product
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set metaTitle
     *
     * @param string $metaTitle
     *
     * @return Product
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * Get metaTitle
     *
     * @return string
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * Set metaTags
     *
     * @param string $metaTags
     *
     * @return Product
     */
    public function setMetaTags($metaTags)
    {
        $this->metaTags = $metaTags;

        return $this;
    }

    /**
     * Get metaTags
     *
     * @return string
     */
    public function getMetaTags()
    {
        return $this->metaTags;
    }

    /**
     * Set metaDescription
     *
     * @param string $metaDescription
     *
     * @return Product
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * Get metaDescription
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set featured
     *
     * @param boolean $featured
     *
     * @return Product
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;

        return $this;
    }

    /**
     * Get featured
     *
     * @return boolean
     */
    public function getFeatured()
    {
        return $this->featured;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Product
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set supplier
     *
     * @param \CommonBundle\Entity\Suppliers $supplier
     *
     * @return Product
     */
    public function setSupplier(\CommonBundle\Entity\Suppliers $supplier = null)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier
     *
     * @return \CommonBundle\Entity\Suppliers
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Add category
     *
     * @param \CommonBundle\Entity\Category $category
     *
     * @return Product
     */
    public function addCategory(\CommonBundle\Entity\Category $category)
    {
        $this->category[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \CommonBundle\Entity\Category $category
     */
    public function removeCategory(\CommonBundle\Entity\Category $category)
    {
        $this->category->removeElement($category);
    }

    /**
     * Get category
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add variation
     *
     * @param \CommonBundle\Entity\Variation $variation
     *
     * @return Product
     */
    public function addVariation(\CommonBundle\Entity\Variation $variation)
    {
        $this->variation[] = $variation;

        return $this;
    }

    /**
     * Remove variation
     *
     * @param \CommonBundle\Entity\Variation $variation
     */
    public function removeVariation(\CommonBundle\Entity\Variation $variation)
    {
        $this->variation->removeElement($variation);
    }

    /**
     * Get variation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVariation()
    {
        return $this->variation;
    }
}