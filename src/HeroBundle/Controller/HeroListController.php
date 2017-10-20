<?php

namespace HeroBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use HeroBundle\Controller\HeroListController;
use HeroBundle\Repository\HeroRepository;
use HeroBundle\Entity\Hero;
use HeroBundle\Entity\Review;

class HeroListController extends Controller
{
    /**
    * @Route("/hero/list", name="hero_list")
    */ 
    public function listAction(Request $request)
    {
        $heroRepository = $this->getDoctrine()->getRepository(Hero::class);
        $heros = $heroRepository->findAll();

        return $this->render('HeroBundle:Default:list.html.twig', [
            'heros' => $heros,
        ]);
    }
}
