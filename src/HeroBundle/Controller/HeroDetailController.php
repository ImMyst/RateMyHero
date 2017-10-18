<?php
namespace HeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use HeroBundle\Repository\ReviewRepository;
use HeroBundle\Repository\HeroRepository;
use HeroBundle\Controller\HeroDetailController;
use HeroBundle\Entity\Hero;
use HeroBundle\Entity\Review;


class HeroDetailController extends Controller
{
    /**
     * @Route("/hero/detail", name="hero_detail")
     */
    public function detailAction()
    {

        $herosRepository = $this->getDoctrine()->getRepository(Hero::class);
        $hero = $herosRepository->findAll();

        return $this->render('HeroBundle:Default:detail.html.twig', [
            'hero' => $hero,
        ]);
    }
}
