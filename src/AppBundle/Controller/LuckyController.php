<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/{num}/resp", name="lucky_page")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $notes = [
            ['id' => 1, 'username' => 'Pelham', 'avatarUri' =>'/apple-touch-icon.png', 'note' => 'Octopus notes'],
            ['id' => 2, 'username' => 'Halllam', 'avatarUri' =>'/apple-touch-icon.png', 'note' => 'Octopus another notes']
        ];

        $data = [
              'notes' => $notes
        ];

        return new JsonResponse($data);
    }
}