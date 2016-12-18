<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class LuckyController extends Controller
{
    /**
     * @Route("/{num}/resp", name="json_page")
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

    /**
     * @Route("/octo/{_locale}/{someNum}",
     *     name="octo_page",
     *     defaults={"_locale": "by", "someNum": 555},
     *     requirements={"_locale": "gr|en"})
     */
    public function octoAction(Request $request, $_locale, $someNum)
    {
        echo sprintf('your locale is %s and a number is %s', $_locale, $someNum);
        return $this->render('AppBundle:Default:app_lucky_octo.html.twig');
    }

    // Route for this controller is in confit/routing.yml
    public function testAction()
    {
        $tst = $this->get('tst.serv');
        $task = $tst->getTaskById(2);

        return new Response($task[0]->getName());
    }
}