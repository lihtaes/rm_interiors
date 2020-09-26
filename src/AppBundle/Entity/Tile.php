<?php 
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Tile {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $variety;
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $color;
    /**
     * @ORM\Column(type="integer")
     */
    private $quantity_in_sqft;
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $price_per_sqft;
}

 ?>