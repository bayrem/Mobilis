<?php

namespace Mobilis\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservedProduct
 *
 * @ORM\Table(name="RESERVED_PRODUCT")
 * @ORM\Entity
 */
class ReservedProduct
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="SESSION_ID", type="string", length=100, nullable=false)
     */
    private $sessionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="COUNT", type="integer", nullable=false)
     */
    private $count;

    /**
     * @var \Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_PRODUCT", referencedColumnName="ID")
     * })
     */
    private $idProduct;



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
     * Set sessionId
     *
     * @param string $sessionId
     * @return ReservedProduct
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
    
        return $this;
    }

    /**
     * Get sessionId
     *
     * @return string 
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set count
     *
     * @param integer $count
     * @return ReservedProduct
     */
    public function setCount($count)
    {
        $this->count = $count;
    
        return $this;
    }

    /**
     * Get count
     *
     * @return integer 
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set idProduct
     *
     * @param \Mobilis\StoreBundle\Entity\Product $idProduct
     * @return ReservedProduct
     */
    public function setIdProduct(\Mobilis\StoreBundle\Entity\Product $idProduct = null)
    {
        $this->idProduct = $idProduct;
    
        return $this;
    }

    /**
     * Get idProduct
     *
     * @return \Mobilis\StoreBundle\Entity\Product 
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }
}