<?php

/**
 * Placed template files into different directories, to see how to add them in different ways.
 */

namespace MyFirstBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
// Loads Controller Class
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
// Include Entity.
use MyFirstBundle\Entity\Todo;
use Symfony\Component\HttpFoundation\Response;

// Include all field types that I've used in form.
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\VarDumper\Tests\Fixture\DumbFoo;


// Extending isn't necessary but it grants access to helper methods and the service container.
class TodoController extends Controller
{
    /**
     * @Route("/", name="todo_list")
     */
    public function indexAction()
    {
        // В качестве аргумента используется путь MyFirstBundle и название класса/файла
        $todo = $this->getDoctrine()->getRepository('MyFirstBundle:Todo')->findAll();

        // Template file is located in src/MyFirstBundle/Resources/views/Default
        return $this->render('MyFirstBundle:Default:index.html.twig', array('list'=>$todo));
    }

    /**
     * @Route("/create", name="todo_create")
     */
    public function createAction(Request $request)
    {
        $todo = new Todo;

        $form = $this->createFormBuilder($todo)
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('category', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('description', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('priority', ChoiceType::class, array('choices' => array('low' => 'Low', 'normal' => 'Normal', 'hi' => 'Hi'), 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('due_date', DateTimeType::class, array('years' => array(2016, 2017, 2018), 'attr' => array('style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Create Task', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
            ->getForm();

        // handleRequest method populates Todo properties with data from $request obj
        // Therefore we don't need manualy add data to Todo object like commented below after if() check
        // The MAIN THING IT DOES - Submits the form
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            /*
            // Get data of form
            $name = $form['name']->getData();
            $category = $form['category']->getData();
            $description = $form['description']->getData();
            $priority = $form['priority']->getData();
            $due_date = $form['due_date']->getData();
            //$create_date = new \DateTime('now');

            // And another way to get data from POST is $request->request->get('varName')

            // Map values
            $todoMap = new Todo();
            $todoMap->setName($name);
            $todoMap->setCategory($category);
            $todoMap->setDescription($description);
            $todoMap->setPriority($priority);
            $todoMap->setDueDate($due_date);
            //$todoMap->setCreateDate($create_date);
*/
            //@return Todo
            $task = $form->getData();
            $em = $this->getDoctrine()->getManager();
            // Persist data to be saved in DB
            $em->persist($task);
            //execute all the tasks that were persisted with persist() method
            $em->flush();

            // Add a notice message
            $this->addFlash('notice', 'Task added');

            return $this->redirectToRoute('todo_list');
        }

        // Template file is located in src/MyFirstBundle/Resources/views/Todo
        return $this->render('MyFirstBundle:Todo:create.html.twig', array('form' => $form->createView()));
    }


    /**
     * @Route("/edit/{id}", name="todo_edit")
     */
    public function editAction($id, Request $request)
    {
        // В качестве аргумента используется путь MyFirstBundle и название класса/файла
        // По документации надо выбирать данные из таблицы как в методе deleteAction
        $todo = $this->getDoctrine()->getRepository('MyFirstBundle:Todo')->find($id);

        $form = $this->createFormBuilder($todo)
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('category', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('description', TextareaType::class, array('required' => false, 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('priority', ChoiceType::class, array('choices' => array('low' => 'Low', 'normal' => 'Normal', 'hi' => 'Hi'), 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('due_date', DateTimeType::class, array('years' => array(2016, 2017, 2018), 'attr' => array('style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Save Task', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
            ->getForm();

        //$form->handleRequest($request);

        if ($request->isMethod('POST')) {

            // Submitting the form Manualy
            $form->submit($request->request->get($form->getName()));

            // submitting only one field
            // $form->get('category')->submit('Dangerous');

            if ($form->isSubmitted() && $form->isValid()) {
                // Get data of form
                
                $name = $form['name']->getData();
                $category = $form['category']->getData();
                $description = $form['description']->getData();
                $priority = $form['priority']->getData();
                $due_date = $form['due_date']->getData();
                //$create_date = new \DateTime('now');

                // Map values
                //$todoMap = new Todo();
                $todo->setName($name);
                $todo->setCategory($category);
                $todo->setDescription($description);
                $todo->setPriority($priority);
                $todo->setDueDate($due_date);
                $todo->setCreateDate($todo->getCreateDate());

                $em = $this->getDoctrine()->getManager();

                /*
                 * $em->persist($todo) isn't necessary.
                 * Recall that this method simply tells Doctrine to manage or "watch" the $product object.
                 * In this case, since you fetched the $product object from Doctrine, it's already managed.
                 * In other words, the entity isn't loaded my entityManager, so we need to tell Doctrine to "watch" it.
                 */
                $em->flush();

                // Add a notice message
                $this->addFlash('notice', 'Task Updated');

                return $this->redirectToRoute('todo_list');
            }
        }

        // Template file is located in app/Resources/views/Todo
        return $this->render('todo/edit.html.twig', array('form'=>$form->createView()));
    }

    /**
     * @Route("/details/{id}", name="todo_details")
     * @ParamConverter("post", class="MyFirstBundle:Todo")
     */
    public function detailsAction(Request $request, $id, $post)
    {
//        dump($post); exit;

        // В качестве аргумента используется путь MyFirstBundle и название класса/файла
        // По документации надо выбирать данные из таблицы как в методе deleteAction
        $todo = $this->getDoctrine()->getRepository('MyFirstBundle:Todo')->find($id);
        
        // Template file is located in app/Resources/views/Todo
        return $this->render('todo/details.html.twig', array('todo'=>$todo));
    }

    /**
     * @Route("/delete/{id}", name="todo_delete")
     */
    public function deleteAction($id, Request $request)
    {
        // A little different way of gettin repo
        $em = $this->getDoctrine()->getManager();
        $todo = $em->getRepository('MyFirstBundle:Todo')->find($id);
        
        $em->remove($todo);
        $em->flush();
        
        $this->addFlash('notice', 'Task Removed');
        
        return $this->redirectToRoute('todo_list');
    }
}
