<?php
class DocumentsController extends ApplicationController {
  function before_action() {
    parent::before_action();
    $this->layout('default');
    $this->sections = [
      'intro' => [
        'intro' => 'Introdução', 
        'desc' => 'Descrição sucinta do Município',
        'desc' => 'Descrição sucinta do Município',
        'estru' => 'Estrutura Organizacional da Secretaria de Tecnologia da Informação',
        'metod' => 'Metodologia de Trabalho',
        'estrud' => 'Estrutura do Documento'
      ],
      'ref' => [
        'ref' => 'Referencial Estratégico de TI',
        'mis' => 'Missão',
        'vis' => 'Visão',
        'obj' => 'Objetivos Estratégicos de TIC',
        'swot' => 'Matriz SWOT da área de TIC'
      ]
    ];
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
  
  function edit() {
    $valids = [
      'intro' => ['intro', 'desc', 'estru']
    ];
    $this->section = $this->params('sec');
    $this->subsection = $this->params('sub');
    
    if (in_array($this->section, array_keys($valids)) and in_array($this->subsection, $valids[$section])) {
      $this->name = $section;
    }
    $this->layout('application');
  }
  
  function sections() {
    $this->layout('application');
  }
  
}