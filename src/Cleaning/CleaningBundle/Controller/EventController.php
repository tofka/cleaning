<?php


namespace Cleaning\CleaningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Event controller.
 */
class EventController extends Controller
{
	public function listAction() {
		$em = $this->getDoctrine()->getEntityManager();	
		$event = $em->createQueryBuilder()
                    ->select('r')
                    ->from('CleaningBundle:Event',  'r')
                    ->getQuery()
                    ->getResult();	
                    
		 return $this->render('CleaningBundle:Event:list.html.twig', array(
            'events'      => $event,
        ));
	}

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $event = $em->getRepository('CleaningBundle:Event')->find($id);

        if (!$event) {
            throw $this->createNotFoundException('Unable to find event.');
        }

        return $this->render('CleaningBundle:Event:show.html.twig', array(
            'event'      => $event,
        ));
    }
}