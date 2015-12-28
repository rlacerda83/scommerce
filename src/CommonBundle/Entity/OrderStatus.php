<?php

namespace CommonBundle\Entity;

/**
 * OrderStatus
 */
class OrderStatus
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $value;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \CommonBundle\Entity\Order
     */
    private $order;


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
     * Set value
     *
     * @param boolean $value
     *
     * @return OrderStatus
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return boolean
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return OrderStatus
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
     * Set description
     *
     * @param string $description
     *
     * @return OrderStatus
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
     * Set order
     *
     * @param \CommonBundle\Entity\Order $order
     *
     * @return OrderStatus
     */
    public function setOrder(\CommonBundle\Entity\Order $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \CommonBundle\Entity\Order
     */
    public function getOrder()
    {
        return $this->order;
    }
}
