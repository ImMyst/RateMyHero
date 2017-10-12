<?php

namespace HeroBundle\Controller;

use HeroBundle\Entity\Hero;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Hero controller.
 *
 * @Route("admi")
 */
class HeroController extends Controller
{
    /**
     * Lists all hero entities.
     *
     * @Route("/", name="admi_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $heroes = $em->getRepository('HeroBundle:Hero')->findAll();

        return $this->render('hero/index.html.twig', array(
            'heroes' => $heroes,
        ));
    }

    /**
     * Finds and displays a hero entity.
     *
     * @Route("/{id}", name="admi_show")
     * @Method("GET")
     */
    public function showAction(Hero $hero)
    {

        return $this->render('hero/show.html.twig', array(
            'hero' => $hero,
        ));
    }
}
