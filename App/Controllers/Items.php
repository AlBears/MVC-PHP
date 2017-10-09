<?php

namespace App\Controllers;
use \Core\View;
use \App\Auth;

class Items extends \Core\Controller
{
  protected function before()
  {
    $this->requireLogin();
  }

  public function indexAction()
  {
    View::renderTemplate('Items/index.html');
  }
}
