<?php
class DocumentController extends ApplicationController {
  function index() {
    $this->documents = Organization::find($_SESSION['organization_id'])->documents;
  }
  
  function initialize() {
  }
  
  function create() {
    $document = new Document();
    $document->organization_id = $_SESSION['organization_id'];
    $document->name = $_POST['name'];
    $document->year = $_POST['year'];
    if ($document->save()) {
      $this->redirect('/documents/' . $document->id);
    } else {
      $this->redirect('/documents');
    }
  }
}