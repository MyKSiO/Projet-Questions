<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/boutique', name: 'boutique_')]
class BoutiqueController extends AbstractController
{
    #[Route(path: '/{id}', name: 'boutiqueId', priority: 1, requirements: ['id' => '\d+'])]     #L'id doit être un entier
    public function boutiqueId(int $id)
    {
        return $this->render('boutique/boutique.html.twig', [
            'controller_name' => 'BoutiqueController'
        ]);
    }

    #[Route('/{name}', name: 'boutiqueName', methods: ['GET'], defaults: ['title' => 'article'], )]
    public function boutiqueNom(string $name='all')
    {
        return $this->render('boutique/boutique.html.twig', [
            'controller_name' => 'BoutiqueController'
        ]);
    }
}
