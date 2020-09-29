<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Job;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class Job {

    /**
     * @Route("/job")
     */
    public function indexAction(){

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
    /**
     * @Route("/job/new")
     */
    public function createAction(Request $request, $job_owner, $total_sq_ft, $final_bid, $tile_variety) {

        

        $job = new Job();
        $job->setJobOwner($job_owner);
        $job->setTotalSqFt($total_sq_ft);
        $job->setFinalBid($final_bid);
        $job->setTileVariety($tile_variety);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($job);
        $entityManager->flush();

        return new Response('Job added with ID : '.$job->getId());
    }
}
?>