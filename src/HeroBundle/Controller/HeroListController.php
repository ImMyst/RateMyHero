<?php

namespace HeroBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use HeroBundle\Controller\HeroListController;

class HeroListController extends Controller
{
    /**
    * @Route("/hero/list", name="hero_list")
    */
    public function listAction(Request $request)
    {
      $reviewRepository = new ReviewRepository();
      $reviews = $reviewRepository->findAllReviews();

    return $this->render('HeroBundle:Review:list.html.twig', [
        'hero' => $heros,
    ]);

    }
}
