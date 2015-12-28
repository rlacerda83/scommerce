<?php

namespace CommonBundle\Entity;

/**
 * Client
 */
class Client
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
    private $name;

    /**
     * @var string
     */
    private $document1;

    /**
     * @var string
     */
    private $document2;

    /**
     * @var \DateTime
     */
    private $birthData;

    /**
     * @var string
     */
    private $genre;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var string
     */
    private $celphone;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $adrressComplement;

    /**
     * @var string
     */
    private $neighborhood;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var boolean
     */
    private $newsletter = '1';

    /**
     * @var boolean
     */
    private $status = '1';


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
     * @return Client
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
     * @return Client
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
     * Set document1
     *
     * @param string $document1
     *
     * @return Client
     */
    public function setDocument1($document1)
    {
        $this->document1 = $document1;

        return $this;
    }

    /**
     * Get document1
     *
     * @return string
     */
    public function getDocument1()
    {
        return $this->document1;
    }

    /**
     * Set document2
     *
     * @param string $document2
     *
     * @return Client
     */
    public function setDocument2($document2)
    {
        $this->document2 = $document2;

        return $this;
    }

    /**
     * Get document2
     *
     * @return string
     */
    public function getDocument2()
    {
        return $this->document2;
    }

    /**
     * Set birthData
     *
     * @param \DateTime $birthData
     *
     * @return Client
     */
    public function setBirthData($birthData)
    {
        $this->birthData = $birthData;

        return $this;
    }

    /**
     * Get birthData
     *
     * @return \DateTime
     */
    public function getBirthData()
    {
        return $this->birthData;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Client
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Client
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Client
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set celphone
     *
     * @param string $celphone
     *
     * @return Client
     */
    public function setCelphone($celphone)
    {
        $this->celphone = $celphone;

        return $this;
    }

    /**
     * Get celphone
     *
     * @return string
     */
    public function getCelphone()
    {
        return $this->celphone;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return Client
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
     * Set address
     *
     * @param string $address
     *
     * @return Client
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
     * Set adrressComplement
     *
     * @param string $adrressComplement
     *
     * @return Client
     */
    public function setAdrressComplement($adrressComplement)
    {
        $this->adrressComplement = $adrressComplement;

        return $this;
    }

    /**
     * Get adrressComplement
     *
     * @return string
     */
    public function getAdrressComplement()
    {
        return $this->adrressComplement;
    }

    /**
     * Set neighborhood
     *
     * @param string $neighborhood
     *
     * @return Client
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
     * @return Client
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
     * @return Client
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
     * Set newsletter
     *
     * @param boolean $newsletter
     *
     * @return Client
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return boolean
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Client
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
}
