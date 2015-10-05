<?php
class UserController extends AuthenticateController {
  function index() {
    $this->layout('default');
    $this->users = User::all();
  }
}
