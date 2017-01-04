<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Tst;
use AppBundle\Entity\Product;
use AppBundle\Form\CategoryType;
use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\UnitOfWork;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
// Loads Controller Class
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
        /*
         * This way form uses array instead of Entity and returned value is array also
         *
         * $form = $this->createForm('AppBundle\Form\PeetTestType', ['name' => 'Vasia']);
         */
        $tst = new Tst();

//        $subTst = new SubTst();

//        $tst->getNameDetails()->add($subTst);

        $form = $this->createForm('AppBundle\Form\PeetTestType', $tst);
        $form->handleRequest($request);

        $validator = $this->get('validator');
        $errorList = $validator->validate($tst);
//        $playload = $errorList->get(1)->getConstraint()->payload;
//        $constraint = $errorList->get(1);

        $errStr = (string) $errorList;


        if ($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();

            $file = $tst->getFile();
            $filename = uniqid().'.'.$file->guessExtension();
            //$file->move('img/', $filename);
            $tst->setFile($filename);

            echo dump($tst); exit;

            $em = $this->getDoctrine()->getManager();
            $em->persist($tst);
            $em->flush();

            return $this->redirectToRoute('home');
        }

        $formView  = $form->createView();

        return $this->render('p33t/dub.html.twig', ['form'=>$formView]);
    }

    /**
     * @Route("/rel", name="db_relations")
     */
    public function relAction(Request $request)
    {
        $product = new Product();
        $form = $this->createFormBuilder($product)
            ->add('name')
            ->add('category', ChoiceType::class, ['choices' => [
                'bikes' => '1',
                'cars' => '2'
            ]])
            ->add('submit', SubmitType::class)
            ->getForm()
        ;

        $form->handleRequest($request);

        if ($form->isValid())
        {

            $category_id = $form['category']->getData();
//            AppBundle:Category Entity is not available
//            $category = $this->getDoctrine()->getRepository('AppBundle:Category')->find($category_id);
            $product->setCategory($category);

            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('db_relations');
        }
        
        return $this->render('p33t/rel.html.twig', ['form'=>$form->createView()]);
    }


    /**
     * @Route("/mk", name="mkent")
     */
    public function checkoutAction(Request $request){

/*
        By Simple Conditions

        Load by owning side associations through the repository

        $category = $this->getDoctrine()->getManager()->find('AppBundle:Category', 1);

        The owning side
        $product = $this->getDoctrine()->getRepository('AppBundle:Product')->findBy( array('category' => $category->getId()));
*/



//        $product = $this->getDoctrine()->getRepository('AppBundle:Product')->findOneBy(['name' => 'BMX']);

//        $u = $this->getDoctrine()->getManager()->getUnitOfWork()->getEntityState($entity);


//            Getting Product Entityt via EM
//        $a = $this->getDoctrine()->getManager()->find('AppBundle\Entity\Product', 1);



        $repo = $this->getDoctrine()->getRepository('AppBundle:Product');
        $product = $repo->find(8);

        echo dump($product);
        exit;


        $repo = $this->getDoctrine()->getRepository('AppBundle:Category');
        $category = $repo->find(1);
        $category->getProducts()->remove($product);



//        $catNew = $this->getDoctrine()->getRepository('AppBundle:Category')->find(2);

        $em = $this->getDoctrine()->getManager();
        $em->remove($category);
        $em->flush();


        exit;


        $repo = $this->getDoctrine()->getRepository('AppBundle:Category');
        $category = $repo->find(1);

        // Returns Product Proxy class

        foreach($category->getProducts() as $item){
           echo dump($item->getName());
        }

        return new Response('Saved new task with id');
    }


    /**
     * @Route("/get/{id}", name="getent")
     */
    public function getentAction(Product $product)
    {
        /**
         * @ParamConverter is in action )))
         *
         * @ref  http://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/annotations/converters.html
         */
        return new Response($product->getName());
    }
}
