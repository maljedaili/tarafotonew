<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    // /**
    //  * @Route("/", name="main")
    //  */
    // public function index(): Response
    // {
    //     return $this->render('main/index.html.twig', [
    //         'controller_name' => 'MainController',
    //     ]);
    // }

    /**
     * @Route("/", name="main")
     */
    public function index()
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();

        return $this->render('main/index.html.twig', [
            'posts' => $posts,
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
