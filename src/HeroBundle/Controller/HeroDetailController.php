<?php
namespace HeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use HeroBundle\Repository\HeroRepository;
use HeroBundle\Entity\Hero;

class HeroDetailController extends Controller
{
    /**
     * @Route("/hero/detail", name="hero_detail")
     */
    public function detailAction()
    {
        // $heroRepository = new HeroRepository();
        $herosRepository = $this->getDoctrine()->getRepository(Hero::class);
        $hero = $herosRepository->find($heroId);

        return $this->render('HeroBundle:Default:detail.html.twig', [
            'hero' => $hero,
        ]);
    }
}
