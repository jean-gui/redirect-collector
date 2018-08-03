<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends Controller
{
    /**
     * @Route(name="index", path="/")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function index()
    {
        $this->addFlash('info', 'coucou');
        return $this->redirectToRoute('other');
    }

    /**
     * @Route(name="other", path="/other")
     * @return Response
     */
    public function other()
    {
        return new Response('ok');
    }
}