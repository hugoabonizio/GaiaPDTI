<?php
class MeetingsController extends AuthenticateController {
  function index() {
    $this->meetings = Document::find($_SESSION['document_id'])->meetings;
  }
  
  function add() {
    $this->meeting = new Meeting;
    $this->organs = Document::find($_SESSION['document_id'])->organs;
  }
  
  function create() {
    $meeting = new Meeting;
    $meeting->m_date = $this->params('date') . ' ' . $this->params('time');
    foreach (['local', 'participants', 'systems', 'infra', 'processes', 'people', 'organ_id'] as $field) {
      $meeting->$field = $this->params($field);
    }
    $meeting->document_id = $this->session('document_id');
    if ($meeting->save()) {
      $this->redirect('/documents/' . $this->session('document_id') . '/meetings', 'Salvo com sucesso!');
    } else {
      $this->redirect('/documents/' . $this->session('document_id') . '/meetings', 'Ocorreu algum erro.');
    }
  }
  
  function edit() {
    $this->meeting = Meeting::find($this->params('meeting_id'));
    $this->organs = Document::find($_SESSION['document_id'])->organs;
  }
  
  function update() {
    $meeting = Meeting::find($this->params('meeting_id'));
    $meeting->m_date = $this->params('date') . ' ' . $this->params('time');
    foreach (['local', 'participants', 'systems', 'infra', 'processes', 'people', 'organ_id'] as $field) {
      $meeting->$field = $this->params($field);
    }
    $meeting->document_id = $this->session('document_id');
    if ($meeting->save()) {
      $this->redirect('/documents/' . $this->session('document_id') . '/meetings', 'Salvo com sucesso!');
    } else {
      $this->redirect('/documents/' . $this->session('document_id') . '/meetings', 'Ocorreu algum erro.');
    }
  }
  
  function destroy() {
    $meeting = Meeting::find($this->params('meeting_id'));
    $meeting->destroy();
    $this->redirect('/documents/' . $_SESSION['document_id'] . '/meetings');
  }
}
