<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    // /**
    //  * @Route("/cusom/{name?}", name="cusom")
    //  * @Param Request $request
    //  * @Return Response
    //  */
    // public function custom(Request $request)
    // {
    //     $name = $request->get(key:'name');
    //     return $this->render('main/index.html.twig');

    // }
}
