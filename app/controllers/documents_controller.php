<?php
class DocumentsController extends ApplicationController {
  function before_action() {
    parent::before_action();
    $this->layout('default');
  }
  
  function index() {
    $this->documents = Organization::find($_SESSION['organization_id'])->documents;
  }
  
  function add() {
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
  
  function show() {
    $this->layout('application');
    $_SESSION['document_id'] = $this->params('id');
    $this->document = Document::find($this->params('id'));
  }
  
  function sections() {
    $this->layout('application');
  }
}