<?php

namespace App\Controllers;
use \Core\View;
use \App\Auth;

class Items extends \Core\Controller
{
  public function indexAction()
  {
    $this->requireLogin();
    View::renderTemplate('Items/index.html');
  }
}
