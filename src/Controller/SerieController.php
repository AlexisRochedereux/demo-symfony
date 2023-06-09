<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/series', name: 'serie_')]
class SerieController extends AbstractController
{
    #[Route('', name: 'liste')]
    public function liste(): Response
    {

        //todo : aller chercher les séries en BDD

        return $this->render('serie/liste.html.twig', [
        ]);
    }

    #[Route('/details/{id}', name: 'details')]
    public function details(int $id):Response {

        // to do aller chercher la série en BDD

        return $this->render("serie/details.html.twig",
        [
            // passer la série
        ]);
    }

    #[Route('/create', name: 'create')]
    public function create(Request $request):Response {

        dump($request);
        return $this->render("/series/create.html.twig");
    }
}