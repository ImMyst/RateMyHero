<?php

namespace HeroBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use HeroBundle\Controller\FilmListController;
use HeroBundle\Repository\FilmRepository;
use HeroBundle\Entity\Hero;
use HeroBundle\Entity\Review;
use HeroBundle\Entity\Film;

class FilmListController extends Controller
{
    /**
    * @Route("/film/list", name="film_list")
    */
    public function listAction(Request $request)
    {
        /*$heroRepository = $this->getDoctrine()->getRepository(Hero::class);
        $heros = $heroRepository->findAll();

        return $this->render('HeroBundle:Default:list.html.twig', [
            'heros' => $heros,
        ]);*/

        return $this->render('HeroBundle:Default:film.html.twig');

    }
}
