<?php
class ApplicationController extends \Framework\ControllerBase {
  function before_action() {
    $this->sections = [
      'introduction' => [
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
  
  private function authenticate() {
    
  }
}