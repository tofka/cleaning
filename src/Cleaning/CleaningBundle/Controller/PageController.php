<?php

namespace Cleaning\CleaningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Cleaning\CleaningBundle\Entity\Event;
use Cleaning\CleaningBundle\Form\EventType;
/**
 * Page controller.
 *
 * @Route("/")
 */

class PageController extends Controller
{

	/**
	* Lists all Event entities.
	*
	* @Route("/", name="event")
	* @Method("GET")
	* @Template()
	*/
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CleaningBundle:Event')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    
}
