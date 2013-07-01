<?php


namespace Cleaning\CleaningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Room controller.
 */
class RoomController extends Controller
{
	public function listAction() {
		$em = $this->getDoctrine()->getEntityManager();	
		$room = $em->createQueryBuilder()
                    ->select('r')
                    ->from('CleaningBundle:Room',  'r')
                    ->getQuery()
                    ->getResult();	
		 return $this->render('CleaningBundle:Room:list.html.twig', array(
            'rooms'      => $room,
        ));
	}

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $room = $em->getRepository('CleaningBundle:Room')->find($id);

        if (!$room) {
            throw $this->createNotFoundException('Unable to find room.');
        }

        return $this->render('CleaningBundle:Room:show.html.twig', array(
            'room'      => $room,
        ));
    }
}