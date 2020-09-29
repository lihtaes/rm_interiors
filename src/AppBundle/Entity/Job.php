<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Job
 *
 * @ORM\Table(name="job")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JobRepository")
 */
class Job
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
     * @ORM\Column(name="job_owner", type="string", length=100)
     */
    private $jobOwner;

    /**
     * @var int
     *
     * @ORM\Column(name="total_sq_ft", type="integer")
     */
    private $totalSqFt;

    /**
     * @var int
     *
     * @ORM\Column(name="final_bid", type="integer")
     */
    private $finalBid;

    /**
     * @var string
     *
     * @ORM\Column(name="tile_variety", type="string", length=100)
     */
    private $tileVariety;


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
     * Set jobOwner
     *
     * @param string $jobOwner
     * @return Job
     */
    public function setJobOwner($jobOwner)
    {
        $this->jobOwner = $jobOwner;

        return $this;
    }

    /**
     * Get jobOwner
     *
     * @return string 
     */
    public function getJobOwner()
    {
        return $this->jobOwner;
    }

    /**
     * Set totalSqFt
     *
     * @param integer $totalSqFt
     * @return Job
     */
    public function setTotalSqFt($totalSqFt)
    {
        $this->totalSqFt = $totalSqFt;

        return $this;
    }

    /**
     * Get totalSqFt
     *
     * @return integer 
     */
    public function getTotalSqFt()
    {
        return $this->totalSqFt;
    }

    /**
     * Set finalBid
     *
     * @param integer $finalBid
     * @return Job
     */
    public function setFinalBid($finalBid)
    {
        $this->finalBid = $finalBid;

        return $this;
    }

    /**
     * Get finalBid
     *
     * @return integer 
     */
    public function getFinalBid()
    {
        return $this->finalBid;
    }

    /**
     * Set tileVariety
     *
     * @param string $tileVariety
     * @return Job
     */
    public function setTileVariety($tileVariety)
    {
        $this->tileVariety = $tileVariety;

        return $this;
    }

    /**
     * Get tileVariety
     *
     * @return string 
     */
    public function getTileVariety()
    {
        return $this->tileVariety;
    }
}
