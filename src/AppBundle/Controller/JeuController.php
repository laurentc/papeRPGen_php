<?php
/**
 * Created by PhpStorm.
 * User: laurentc
 * Date: 14/11/16
 * Time: 10:39
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class JeuController extends Controller{

    /**
     * @Route("/jeu/menu",name = "menu")
     *
     * @param Request $request
     * @return mixed
     */
    public function menuAction(Request $request)
    {
        return $this->render('AppBundle:Jeu:menu.html.twig');
    }
} 