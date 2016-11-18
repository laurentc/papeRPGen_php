<?php
/**
 * Created by PhpStorm.
 * User: laurentc
 * Date: 14/11/16
 * Time: 10:54
 */

namespace AppBundle\Controller;


use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use AppBundle\Form\UserLoginType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends Controller{

    /**
     * @Route("/login", name = "login")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAction(Request $request)
    {
        $form = $this->createForm(UserLoginType::class);

        return $this->render('Security/login.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/register", name = "register")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function registerAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            $user->setIsActive(true);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->redirectToRoute('login');
        }

        return $this->render('Security/register.html.twig', ['form' => $form->createView()]);
    }
} 