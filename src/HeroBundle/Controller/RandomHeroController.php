<?php

namespace HeroBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use HeroBundle\Controller\RandomHeroController;
use HeroBundle\Repository\HeroRepository;
use HeroBundle\Entity\Hero;
use HeroBundle\Entity\Review;

class RandomHeroController extends Controller
{
    /**
    * @Route("/hero/random", name="hero_random")
    */
    public function randomAction()
{
    $heroRepository = $this->getDoctrine()->getRepository(Hero::class);
    $heros = $heroRepository->findAll();
    $hero = $heros[mt_rand(0, 133700) % count($heros)];
    return $this->redirectToRoute('hero_detail', [
        'heroId' => $hero->getId(),
    ]);
  }
}
