<?php
/**
 * Created by PhpStorm.
 * User: m.benahmed
 * Date: 18/05/2017
 * Time: 16:36
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller
{


    /**
     * @Route("/category/listing",name="category_listing")
     */
    public function listingAction(){


          $categories = $this->getDoctrine()->getRepository("AppBundle:Category")->findAll();

          return $this->render('AppBundle:Category:listing.html.twig',compact('categories'));
    }


    public function addAction(){



    }

}