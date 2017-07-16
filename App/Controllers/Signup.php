<?php

namespace App\Controllers;
use \Core\View;

class Signup extends \Core\Controller
{

    protected function before()
    {
        //echo "(before) ";
    }

    protected function after()
    {
        //echo " (after)";
    }

    public function newAction()
    {
        View::renderTemplate('Signup/index.html');
    }
}
