<?php
class AuthenticateController extends ApplicationController {
  function before_action() {
    $this->current_user = User::find($_SESSION['user_id']);
    if (!$this->current_user)
      $this->redirect('/');
  }
}