<?php

namespace HeroBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomePageController extends Controller
{
    /**
    * @Route("/", name="homepage")
    */
    public function listAction(Request $request)
    {
      return $this->render('HeroBundle:Default:homepage.html.twig');
    }
}
