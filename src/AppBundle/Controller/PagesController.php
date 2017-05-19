<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Somme;
use AppBundle\Event\SommeEvent;
use AppBundle\Form\SommeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class PagesController extends Controller
{


    public $_appName = "DemoTeam";




    public function preExecute(){


       /* var_dump('alo');
        exit;*/
    }
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Default:index.html.twig');
    }


    



    /**
     * @Route("/test", name="test")
     * @Method({"GET","POST"})
     */
    public function helloAction()
    {


        $request = $this->get('request');
        $number1 = 0;
        $number2 = 0;
        $somme = new Somme();
        $form = $this->get('form.factory')->create(new SommeType(), $somme);
        $em = $this->get('doctrine')->getEntityManager();

        $listSomme = $this->getDoctrine()->getRepository('AppBundle:Somme')->findAll();
        $listBigSommme  = $this->getDoctrine()->getRepository('AppBundle:Somme')->findBigSomme();
        
        $sommeService = $this->get('app.calculator');


        if ($request->getMethod() == 'POST') {

            $number1 = $request->request->get('somme')['number1'];
            $number2 = $request->request->get('somme')['number2'];

            $form->bind($request);

            if ($form->isValid()) {


                $event = new SommeEvent($number1,$number2);
                $this->get('event_dispatcher')->dispatch(SommeEvent::name,$event);


            }


        }


        return $this->render('AppBundle:Default:somme.html.twig', array('app_name' => $this->_appName, 'somme' => $sommeService->somme($number1, $number2), 'form' => $form->createView(), 'listSomme' => $listSomme));
    }


}
