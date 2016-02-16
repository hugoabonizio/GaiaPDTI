<?php
class Document extends \TORM\Model {
  public function generate($sections) {
    $did = $this->id;
    foreach (array_keys($sections) as $section) {
      $s = new $section;
      $s->document_id = $did;
      foreach ($sections[$section] as $sub=>$name) {
        if ($sub == "swot") {
          $s->swot_strengths = "Pontos fortes";
          $s->swot_weakness = "Pontos fracos";
          $s->swot_opportunities = "Oportunidades";
          $s->swot_threats = "Ameaças";
        } else {
          $s->$sub = $name;
        }
      }
      $s->save();
    }
    
//     $action = new Action;
//     $action->document_id = $did;
//     $action->actions = "Ações";
//     $action->save();
    
//     $referential = new Referential;
//     $referential->document_id = $did;
//     $referential->ref = "Referencial estratégico";
//     $referential->mis = "Missão";
//     $referential->vis = "Visão";
//     $referential->obj = "Objetivos";
//     $referential->swot_strengths = "Pontos fortes";
//     $referential->swot_weakness = "Pontos fracos";
//     $referential->swot_opportunities = "Oportunidades";
//     $referential->swot_threats = "Ameaças";
//     $action->save();
  }
}

Document::belongsTo('organization');
Document::hasOne('introduction');
Document::hasOne('referential');
Document::hasOne('infra');
Document::hasOne('action');
Document::hasOne('adddata');
Document::hasOne('rh');
Document::hasOne('conclusion');
Document::hasMany('organs');
Document::hasMany('meetings');
