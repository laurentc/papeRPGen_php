<?php
/**
 * Created by PhpStorm.
 * User: laurentc
 * Date: 14/11/16
 * Time: 11:01
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 *
 * Class AdministrationController
 * @package AppBundle\Controller
 */
class AdministrationController extends Controller {

    /**
     * @Route("/", name = "admin")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function accueilAction(Request $request)
    {
        return $this->render('AppBundle:Administration:accueil.html.twig');
    }
} 