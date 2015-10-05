<?php
class OrganizationController extends AuthenticateController {
  function index() {
    $this->layout('default');
    $this->organizations = array(0 => User::find($_SESSION['user_id'])->organization);
  }
  
  function select() {
    if (!empty($_GET['organization_id'])) {
      $_SESSION['organization_id'] = $_GET['organization_id'];
      $this->redirect('/documents');
    }
  }
}
