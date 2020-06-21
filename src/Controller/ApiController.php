<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\DecoderInterface;

class ApiController extends AbstractController
{
    /**
     * @Route("/listeRegions", name="listeRegions")
     */
    public function listeRegion(DecoderInterface $decoder)
    {
        $mesRegions = file_get_contents('https://geo.api.gouv.fr/regions');
        $mesRegionsTab = $decoder->decode($mesRegions, 'json');
        // dump($mesRegionsTab);
        // die();
        return $this->render('api/index.html.twig');
    }
}
