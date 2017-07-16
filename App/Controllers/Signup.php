<?php

namespace App\Controllers;
use \Core\View;
use \App\Models\User;

class Signup extends \Core\Controller
{

    public function newAction()
    {
        View::renderTemplate('Signup/index.html');
    }

    public function createAction()
    {
        $user = new User($_POST);

        if ($user->save()) {

           View::renderTemplate('Signup/success.html');

       } else {

           View::renderTemplate('Signup/index.html', [
             'user' => $user
           ]);

       }
    }
}
