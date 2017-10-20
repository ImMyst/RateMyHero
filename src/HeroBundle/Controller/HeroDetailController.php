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
use HeroBundle\Entity\Film;


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

    public function Review(Request $request)
    {
        $note = new Task();
        $note->setCommentaire('Ajouter votre commentaire');
        $note->setNote();

        $form = $this->createFormBuilder($note)
            ->add('Commentaire', commentary::class)
            ->add('Note', note::class)
            ->add('save', submit::class, array('label' => 'Create Review'))
            ->getForm();

        return $this->render('default/detail.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
