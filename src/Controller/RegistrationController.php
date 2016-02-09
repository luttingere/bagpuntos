<?php
/**
 * Created by PhpStorm.
 * User: SinAsignari54GB1TB
 * Date: 18/01/2016
 * Time: 03:50 PM
 */

namespace App\Controller;
use Cake\Log\Log;
use Cake\ORM\TableRegistry;

class RegistrationController extends AppController {


    public function save()
    {
      
     $this->loadModel('Registration');

          $registrationToSave = $this->Registration->newEntity();
         
          $registrationToSave->rif = $_POST['rif'];
          $registrationToSave->fecha_f = $_POST['fecha_f'];
          $registrationToSave->numero_f = $_POST['numero_f'];
          $registrationToSave->monto_f = $_POST['monto_f'];
          $registrationToSave->confirm_f = $_POST['confirm_f'];

          $this->Registration->save($registrationToSave);


    }

    public function registration()
    {
  
    $this->printServiceData("Almacenando los datos del registro");
 
    }

     public function registro()
    {
      
       $this->printServiceData("Almacenando los datos del registro");
   
    }

     public function activacion()
    {
      $this->printServiceData("Almacenando los datos del registro");

    }

     private function printServiceData($serviceName)

    {
      LOG::info('Service Named Invoked: ' . $serviceName);
      LOG::info('GET_INFO: ' . json_encode($_GET));
      LOG::info('POST_INFO: ' . json_encode($_POST));
    }

}

