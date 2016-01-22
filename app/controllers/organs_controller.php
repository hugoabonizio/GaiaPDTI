<?php
class OrgansController extends AuthenticateController {
  function index() {
    $this->organs = Document::find($_SESSION['document_id'])->organs;
  }
  
  function add() {
  }
  
  function create() {
    $organ = new Organ;
    $organ->name = $this->params('name');
    $organ->description = $this->params('description');
    $organ->document_id = $this->session('document_id');
    if ($organ->save()) {
      $this->redirect('/documents/' . $this->session('document_id') . '/organs', 'Salvo com sucesso!');
    } else {
      $this->redirect('/documents/' . $this->session('document_id') . '/organs', 'Ocorreu algum erro.');
    }
  }
  
  function edit() {
    $this->organ = Organ::find($this->params('organ_id'));
  }
  
  function update() {
    $organ = Organ::find($this->params('organ_id'));
    $organ->name = $this->params('name');
    $organ->description = $this->params('description');
    $organ->document_id = $this->session('document_id');
    if ($organ->save()) {
      $this->redirect('/documents/' . $this->session('document_id') . '/organs', 'Salvo com sucesso!');
    } else {
      $this->redirect('/documents/' . $this->session('document_id') . '/organs', 'Ocorreu algum erro.');
    }
  }
  
  function destroy() {
    $organ = Organ::find($this->params('organ_id'));
    $organ->destroy();
    $this->redirect('/documents/' . $_SESSION['document_id'] . '/organs');
  }
}
