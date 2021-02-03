<?php
namespace App\Controller;
class HelloWorldController extends AppController
{
    public function greetSomeone()
    {
        $someoneSpecial = $this->request->getData('someoneSpecial');
        
        if ($someoneSpecial == '') {
            $someone = 'World';
        } else {
            $someone = $someoneSpecial;
        }
        $this->set('someoneToGreet', $someone);
    }
}