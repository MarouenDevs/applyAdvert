<?php
/**
 * Created by PhpStorm.
 * User: m.benahmed
 * Date: 16/05/2017
 * Time: 13:36
 */

namespace AppBundle\Listener;


use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class ControllerListener
{

    public function onCoreController(FilterControllerEvent $event){
          if(HttpKernelInterface::MASTER_REQUEST ===$event->getRequestType()) {
              $_controller =$event->getController();
              if(isset($_controller[0])) {
                  $contoller =$_controller[0];
                  if(method_exists($contoller,'preExecute')) {

                      $contoller->preExecute();
                  }
                  
              }


          }


    }
}