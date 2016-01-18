<?php
/**
 * Created by PhpStorm.
 * User: SinAsignari54GB1TB
 * Date: 18/01/2016
 * Time: 11:13 AM
 */

namespace App\Controller;


class UsersController extends AppController {

    public function index(){
        $this->set('users', $this->Users->find('all'));
    }

}
?>