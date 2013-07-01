<?php

namespace Cleaning\CleaningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Person controller.
 */
class PersonController extends Controller
{
	public function listAction() {
		$em = $this->getDoctrine()->getEntityManager();	
		$person = $em->createQueryBuilder()
                    ->select('r')
                    ->from('CleaningBundle:Person',  'r')
                    ->getQuery()
                    ->getResult();	
		 return $this->render('CleaningBundle:Person:list.html.twig', array(
            'persons'      => $person,
        ));
	}

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $person = $em->getRepository('CleaningBundle:Person')->find($id);

        if (!$person) {
            throw $this->createNotFoundException('Unable to find person.');
        }

        return $this->render('CleaningBundle:Person:show.html.twig', array(
            'person'      => $person,
        ));
    }
}