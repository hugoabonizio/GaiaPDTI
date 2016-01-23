<?php
class DocumentsController extends AuthenticateController {
  function before_action() {
    parent::before_action();
    $this->layout('default');
  }
  
  function index() {
    $this->layout('default');
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
    $this->redirect('/documents/sections');
  }
  
  function edit() {
    $this->section = $this->params('sec');
    $this->subsection = $this->params('sub');
    extract((array) $this);
    
    if ($this->valid_section($section, $subsection)) {
      if ($subsection == 'swot') {
        $this->swot_sections = [
          'swot_strengths' => 'Pontos Fortes',
          'swot_weakness' => 'Pontos Fracos',
          'swot_opportunities' => 'Oportunidades',
          'swot_threats' => 'Ameaças'
        ];
        $this->content = Document::find($_SESSION['document_id'])->$section;
        $this->render('swot');
      } else {
        $this->content = Document::find($_SESSION['document_id'])->$section->$subsection;
      }
      $this->name = $section;
    }
    $this->layout('application');
  }
  
  function update() {
    if ($this->valid_section($this->params('section'), $this->params('subsection'))) {
      $section = $this->params('section');
      $subsection = $this->params('subsection');
      $model = Document::find($_SESSION['document_id'])->$section;
      if ($subsection == 'swot') {
        foreach (['swot_strengths', 'swot_weakness', 'swot_opportunities', 'swot_threats'] as $swot_section) {
          $model->$swot_section = $this->params($swot_section);
        }
      } else {
        $model->$subsection = $this->params('content');
      }
      $model->save();
    }
    $this->redirect('/documents/sections');
  }
  
  function options() {
    $this->document = Document::find($this->params('id'));
  }
  
  function change() {
    $document_id = $this->params('id');
    $document = Document::find($document_id);
    if (!empty($_FILES) and $_FILES['logo']['error'] == 0) {
      $basename = basename($_FILES['logo']['name']);
      $uploaded_name = uniqid(rand(), true) . $basename;
      move_uploaded_file($_FILES['logo']['tmp_name'], 'public/uploads/' . $uploaded_name);
      $document->logo = $uploaded_name;
    }
    $document->name = $this->params('name');
    $document->year = $this->params('year');
    $document->save();
    $this->flash('result', 'Atualizado com sucesso!');
    $this->redirect("/documents/$document_id/options");
  }
  
  function sections() {
    $this->layout('application');
  }
  
  private function valid_section($section, $subsection) {
    return in_array($section, array_keys($this->sections)) and in_array($subsection, array_keys($this->sections[$section]));
  }
  
}