<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky", name="lucky_page")
     */
    public function indexAction(Request $request)
    {

        $goto = $this->redirectToRoute('home');

        // replace this example code with whatever you need
        return $this->render($goto);
    }
}