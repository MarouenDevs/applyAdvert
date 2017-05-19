<?php
/**
 * Created by PhpStorm.
 * User: m.benahmed
 * Date: 17/05/2017
 * Time: 16:38
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;



class SecurityControlller extends Controller
{



    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        if ($this->get('security.context')->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('homepage');
        }

        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('AppBundle:Security:login.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError()

        ));
    }

   
    /**
     * @Route("/logout", name="logout")
     */
    public function logout(){

        $this->get('security.token_storage')->setToken(null);
        $this->get('request')->getSession()->invalidate();


    }


}