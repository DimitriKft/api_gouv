<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/listeRegions", name="listeRegions")
     */
    public function listeRegion()
    {
        $mesRegions = file_get_contents('https://geo.api.gouv.fr/regions');
        dump($mesRegions);
        die();
        return $this->render('api/index.html.twig');
    }
}
