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
        $videoGames = $videoGameRepository->findAll();
        return $this->render(
            'home/index.html.twig',
            compact('videoGames')
        );
    }

    #[Route('/page', name: 'page')]
    public function page(VideoGameRepository $videoGameRepository): Response
    {
        $videoGames = $videoGameRepository->findAll();
        return $this->render(
            'home/page.html.twig',
            compact('videoGames')
        );
    }

    #[Route('/conditions', name: 'conditions')]
    public function conditions(VideoGameRepository $videoGameRepository): Response
    {
        $videoGames = $videoGameRepository->findAll();
        return $this->render(
            'home/conditions.html.twig',
            compact('videoGames')
        );
    }
}
