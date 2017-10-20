<?php
// src/AppBundle/Controller/DefaultController.php
namespace HeroBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use HeroBundle\Entity\User;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function adminAction()
    {

    return $this->render('HeroBundle:Default:admin.html.twig', [

    ]);
}
}
