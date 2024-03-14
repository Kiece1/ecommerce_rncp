<?php

namespace App\Controller;

use App\Repository\VideoGameRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(VideoGameRepository $videoGameRepository): Response
    {
        $menuInfo = ["nouveautés", "populaires", "meilleures ventes", "promos"];

        $videoGames = $videoGameRepository->findAll();
        return $this->render(
            'home/index.html.twig',
            compact('videoGames', 'menuInfo')
        );
    }

    #[Route('/page/{indice?0}', name: 'page')]
    public function page($indice, VideoGameRepository $videoGameRepository): Response
    {
        $menuInfo = ["nouveautés", "populaires", "meilleures ventes", "promos"];

        $videoGames = $videoGameRepository->findAll();
        return $this->render(
            'home/page.html.twig',
            compact('videoGames', 'menuInfo', 'indice')
        );
    }

    #[Route('/conditions', name: 'conditions')]
    public function conditions(VideoGameRepository $videoGameRepository): Response
    {
        $menuInfo = ["nouveautés", "populaires", "meilleures ventes", "promos"];

        $videoGames = $videoGameRepository->findAll();
        return $this->render(
            'home/conditions.html.twig',
            compact('videoGames', 'menuInfo')
        );
    }

    #[Route('/panier/{indice?0}', name: 'panier')]
    public function panier($indice, VideoGameRepository $videoGameRepository): Response
    {
        $menuInfo = ["nouveautés", "populaires", "meilleures ventes", "promos"];

        $videoGames = $videoGameRepository->findAll();
        return $this->render(
            'home/panier.html.twig',
            compact('videoGames', 'menuInfo', 'indice')
        );
    }
}
