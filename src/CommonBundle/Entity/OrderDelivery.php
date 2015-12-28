<?php

namespace CommonBundle\Entity;

/**
 * OrderDelivery
 */
class OrderDelivery
{
    /**
     * @var string
     */
    private $address = '';

    /**
     * @var string
     */
    private $addressComplement;

    /**
     * @var string
     */
    private $postalCode = '';

    /**
     * @var string
     */
    private $neighborhood = '';

    /**
     * @var string
     */
    private $city = '';

    /**
     * @var string
     */
    private $state = '';

    /**
     * @var string
     */
    private $type = '';

    /**
     * @var string
     */
    private $service;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $trackingCode;

    /**
     * @var \CommonBundle\Entity\Order
     */
    private $order;


    /**
     * Set address
     *
     * @param string $address
     *
     * @return OrderDelivery
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set addressComplement
     *
     * @param string $addressComplement
     *
     * @return OrderDelivery
     */
    public function setAddressComplement($addressComplement)
    {
        $this->addressComplement = $addressComplement;

        return $this;
    }

    /**
     * Get addressComplement
     *
     * @return string
     */
    public function getAddressComplement()
    {
        return $this->addressComplement;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return OrderDelivery
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set neighborhood
     *
     * @param string $neighborhood
     *
     * @return OrderDelivery
     */
    public function setNeighborhood($neighborhood)
    {
        $this->neighborhood = $neighborhood;

        return $this;
    }

    /**
     * Get neighborhood
     *
     * @return string
     */
    public function getNeighborhood()
    {
        return $this->neighborhood;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return OrderDelivery
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return OrderDelivery
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return OrderDelivery
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set service
     *
     * @param string $service
     *
     * @return OrderDelivery
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return OrderDelivery
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set trackingCode
     *
     * @param string $trackingCode
     *
     * @return OrderDelivery
     */
    public function setTrackingCode($trackingCode)
    {
        $this->trackingCode = $trackingCode;

        return $this;
    }

    /**
     * Get trackingCode
     *
     * @return string
     */
    public function getTrackingCode()
    {
        return $this->trackingCode;
    }

    /**
     * Set order
     *
     * @param \CommonBundle\Entity\Order $order
     *
     * @return OrderDelivery
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
