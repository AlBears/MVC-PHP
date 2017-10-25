<?php

namespace App\Controllers;
use \Core\View;
use App\Models\User;

class Password extends \Core\Controller
{
  public function forgotAction()
  {
    View::renderTemplate('Password/forgot.html');
  }

  public function requestResetAction()
  {

    User::sendPasswordReset($_POST['email']);

    View::renderTemplate('Password/reset_requested.html');

  }

  public function resetAction()
  {
    $token = $this->route_params['token'];

    $user = User::findByPasswordReset($token);

    if ($user) {

      View::renderTemplate('Password/reset.html', [
        'token' => $token
      ]);

    } else {

      echo 'password reset token invalid';

    }
  }

  public function resetPasswordAction()
  {
    $token = $_POST['token'];

    $user = User::findByPasswordReset($token);

    if ($user) {

      echo 'reset password here';

    } else {

      echo 'password reset token invalid';

    }
  }
}
