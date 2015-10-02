<?php
class OrganizationController extends ApplicationController {
  function index() {
    $this->organizations = User::find($_SESSION['user_id'])->organizations;
  }
  
  function select() {
    if (!empty($_GET['organization_id'])) {
      $_SESSION['organization_id'] = $_GET['organization_id'];
      $this->redirect('/documents');
    }
  }
}
