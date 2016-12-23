<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
// Loads Controller Class
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
// Include Entity.
//use AppBundle\Entity\todo;
use Symfony\Component\HttpFoundation\Response;

// Extending isn't necessary but it grants access to helper methods and the service container.
class DubController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm('AppBundle\Form\PeetTestType', ['name' => 'Vasia']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();
            return $this->render('p33t/dub.html.twig', ['data'=>$data]);
        }

        $formView  = $form->createView();

        return $this->render('p33t/dub.html.twig', ['form'=>$formView]);
    }


    /**
     * @Route("/mk", name="mkent")
     */
    public function createAction(Request $request){

        $now = new\DateTime();

       echo '<pre>';
       echo dump($now);
       echo '</pre>';
       exit;


        $todo = new todo();
        $todo->setName('Go shopping');
        $todo->setCategory('Shopping');
        $todo->setDescription('Go to TJmax get yourself some food.');
        $todo->setPriority('High');
        $todo->setDueDate($now);
        $todo->setCreateDate($now);

$em = $this->getDoctrine()->getManager();
        $em->persist($todo);
            $em->flush();
        return new Response('Saved new task with id');
    }


    /**
     * @Route("/get", name="getent")
     */
    public function getentAction(Request $request)
    {
        $todo = $this->getDoctrine()->getRepository('AppBundle:todo')->findAll();
        /*
        echo '<pre>';
        echo var_dump($todo[0]['name']);
        echo '</pre>';
        */
        dump($todo[0]->getId());
        return new Response('Helooooo');
    }
}
