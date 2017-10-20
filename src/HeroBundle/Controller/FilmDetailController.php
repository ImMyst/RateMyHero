<?php
namespace HeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use HeroBundle\Repository\FilmRepository;
use HeroBundle\Repository\HeroRepository;
use HeroBundle\Controller\FilmDetailController;
use HeroBundle\Entity\Hero;
use HeroBundle\Entity\Film;


class FilmDetailController extends Controller
{
    /**
     * @Route("/film/detail", name="film_detail")


     */
    public function detailAction()
    {

        $filmRepository = $this->getDoctrine()->getRepository(Film::class);
        $film = $filmRepository->findAll();

        return $this->render('HeroBundle:Default:filmdetail.html.twig', [
            'film' => $film,
        ]);
    }
}
