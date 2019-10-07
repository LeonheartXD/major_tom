<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function accueil()
    {
        return $this->render('home/Accueil.html.twig');
    }

    /**
     * @Route("/home", name="home")
     */
    public function home()
    {
        return $this->render('home/Lachatterie.html.twig');
    }

    /**
     * @Route("/race", name="race")
     */

    public function race()
    {
        return $this->render('home/larace.html.twig');
    }

    /**
     * @Route("/males", name="males")
     */
    public function males()
    {
        return $this->render('home/males.html.twig');
    }

    /**
     * @Route("/femelles", name="femelles")
     */
    public function femelles()
    {
        return $this->render('home/femelles.html.twig');
    }

    /**
     * @Route("/chatons", name="chatons")
     */
    public function chatons()
    {
        return $this->render('home/chatons.html.twig');
    }

    /**
     * @Route("/retraites", name="retraites")
     */
    public function retraites()
    {
        return $this->render('home/retraites.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('home/contact.html.twig');
    }

}