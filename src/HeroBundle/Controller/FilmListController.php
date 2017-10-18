<?php

namespace HeroBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use HeroBundle\Controller\FilmListController;
use HeroBundle\Repository\FilmRepository;
use HeroBundle\Entity\Review;
use HeroBundle\Entity\Film;

class FilmListController extends Controller
{
    /**
    * @Route("/film/list", name="film_list")
    */
    public function listAction(Request $request)
    {
        $filmRepository = $this->getDoctrine()->getRepository(Film::class);
        $films = $filmRepository->findAll();

        return $this->render('HeroBundle:Default:film.html.twig', [
            'films' => $films,
        ]);
    }
}
