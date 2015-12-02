<?php
class OrganizationsController extends AuthenticateController {
  function before_action() {
    parent::before_action();
    $this->layout('default');
  }
  
  function index() {
//     $this->organizations = array(0 => User::find($_SESSION['user_id'])->organization);
    $this->organizations = Organization::all();
  }
  
  function add() {
  }
  
  function create() {
    $organization = new Organization;
    $organization->name = $_POST['name'];
    if ($organization->save()) {
      $this->redirect('/organizations', 'Criado com sucesso!');
    } else {
      $this->redirect('/organizations', 'Falha na criação!');
    }
  }
  
  function select() {
    if (!empty($_GET['organization_id'])) {
      $_SESSION['organization_id'] = $_GET['organization_id'];
      $this->redirect('/documents');
    }
  }
}
