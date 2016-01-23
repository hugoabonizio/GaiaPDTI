<?php
class SessionController extends ApplicationController {
  function login() {
    $this->layout('default');
    if (isset($_SESSION['signed_in'])) {
      $this->redirect('/organizations');
    }
  }
  
  function create() {
    $user = User::where([
      "email" => $_POST['email'],
      "password" => $_POST['password']
    ]);
    if ($user->count() > 0) {
      $_SESSION['signed_in'] = true;
      $_SESSION['user_id'] = $user->current()->id;
    } else {
      // error
    }
    $this->redirect('/');
  }
  
  function logout() {
    session_destroy();
    $this->redirect('/');
  }
}
