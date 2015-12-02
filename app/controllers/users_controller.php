<?php
class UsersController extends AuthenticateController {
  function before_action() {
    parent::before_action();
    $this->layout('default');
  }
  
  function index() {
    $this->users = User::all();
  }
  
  function add() {
    $this->organizations = Organization::all();
  }
  
  function create() {
    $user = new User;
    foreach (['name', 'email', 'password', 'organization_id', 'is_admin'] as $attr) {
      $user->$attr = $_POST[$attr];
    }
    if ($user->save()) {
      $this->redirect('/users', 'Criado com sucesso!');
    } else {
      $this->redirect('/users', 'Falha na criação!');
    }
  }
  
  function edit() {
    
  }
  
  function update() {
    
  }
  
  function destroy() {
    
  }
}
