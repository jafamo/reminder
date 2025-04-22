<?php

namespace App\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PruebaController extends AbstractController
{

    public function index(): Response
    {
        return new Response("hola symfony");
    }
}