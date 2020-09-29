<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tile
 *
 * @ORM\Table(name="tile")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TileRepository")
 */
class Tile
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="variety", type="string", length=100)
     */
    private $variety;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity_in_sqft", type="integer")
     */
    private $quantityInSqft;

    /**
     * @var int
     *
     * @ORM\Column(name="price_per_sqft", type="integer")
     */
    private $pricePerSqft;


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
     * Set variety
     *
     * @param string $variety
     * @return Tile
     */
    public function setVariety($variety)
    {
        $this->variety = $variety;

        return $this;
    }

    /**
     * Get variety
     *
     * @return string 
     */
    public function getVariety()
    {
        return $this->variety;
    }

    /**
     * Set quantityInSqft
     *
     * @param integer $quantityInSqft
     * @return Tile
     */
    public function setQuantityInSqft($quantityInSqft)
    {
        $this->quantityInSqft = $quantityInSqft;

        return $this;
    }

    /**
     * Get quantityInSqft
     *
     * @return integer 
     */
    public function getQuantityInSqft()
    {
        return $this->quantityInSqft;
    }

    /**
     * Set pricePerSqft
     *
     * @param integer $pricePerSqft
     * @return Tile
     */
    public function setPricePerSqft($pricePerSqft)
    {
        $this->pricePerSqft = $pricePerSqft;

        return $this;
    }

    /**
     * Get pricePerSqft
     *
     * @return integer 
     */
    public function getPricePerSqft()
    {
        return $this->pricePerSqft;
    }
}
