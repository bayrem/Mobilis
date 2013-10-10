<?php

namespace Mobilis\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cart
 *
 * @ORM\Table(name="CART")
 * @ORM\Entity
 */
class Cart
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
     * @var integer
     *
     * @ORM\Column(name="SESSION_ID", type="integer", nullable=false)
     */
    private $sessionId;

    /**
     * @var \ReservedProduct
     *
     * @ORM\ManyToOne(targetEntity="ReservedProduct")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="RESERVED_ID", referencedColumnName="ID")
     * })
     */
    private $reserved;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="USER_ID", referencedColumnName="ID")
     * })
     */
    private $user;



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
     * @param integer $sessionId
     * @return Cart
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
    
        return $this;
    }

    /**
     * Get sessionId
     *
     * @return integer 
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set reserved
     *
     * @param \Mobilis\StoreBundle\Entity\ReservedProduct $reserved
     * @return Cart
     */
    public function setReserved(\Mobilis\StoreBundle\Entity\ReservedProduct $reserved = null)
    {
        $this->reserved = $reserved;
    
        return $this;
    }

    /**
     * Get reserved
     *
     * @return \Mobilis\StoreBundle\Entity\ReservedProduct 
     */
    public function getReserved()
    {
        return $this->reserved;
    }

    /**
     * Set user
     *
     * @param \Mobilis\StoreBundle\Entity\User $user
     * @return Cart
     */
    public function setUser(\Mobilis\StoreBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Mobilis\StoreBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}