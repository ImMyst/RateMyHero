<?php

namespace HeroBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use HeroBundle\Entity\Hero;

class CreateController extends Controller
{
    /**
    * @Route("/hero/create/{firstname}/{lastname}", name="hero_create")
    */
    public function createAction($firstname, $lastname)
    {
      $hero = new Hero();
      $hero->setFirstname ($firstname);
      $hero->setLastname ($lastname);

      $em = $this->getDoctrine()->getManager();
      $em->persist($hero);
      $em->flush();

      die('Ok');
    }
}
