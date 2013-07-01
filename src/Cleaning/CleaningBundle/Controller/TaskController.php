<?php


namespace Cleaning\CleaningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Task controller.
 */
class TaskController extends Controller
{
	public function listAction() {
		$em = $this->getDoctrine()->getEntityManager();	
		$task = $em->createQueryBuilder()
                    ->select('r')
                    ->from('CleaningBundle:Task',  'r')
                    ->getQuery()
                    ->getResult();	
		 return $this->render('CleaningBundle:Task:list.html.twig', array(
            'tasks'      => $task,
        ));
	}

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $task = $em->getRepository('CleaningBundle:Task')->find($id);

        if (!$task) {
            throw $this->createNotFoundException('Unable to find task.');
        }

        return $this->render('CleaningBundle:Task:show.html.twig', array(
            'task'      => $task,
        ));
    }
}