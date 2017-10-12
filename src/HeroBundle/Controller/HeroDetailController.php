<?php

namespace HeroBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HeroDetailController extends Controller
{
    /**
    * @Route("/hero/detail", name="hero_detail")
    */

      public function listAction(Request $request)
      {
      $heroRepository = new HerosRepository();
      $heros = $heroRepository->findById($heroId);

    return $this->render('HeroBundle:Review:detail.html.twig', [
        'heros' => $heros,
    ]);
  }
}
