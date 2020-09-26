<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Job {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $job_owner;
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $total_sq_ft;
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $final_bid;
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $tile_variety;
}

?>