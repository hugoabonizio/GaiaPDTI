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
      'referential' => [
        'ref' => 'Referencial Estratégico de TI',
        'mis' => 'Missão',
        'vis' => 'Visão',
        'obj' => 'Objetivos Estratégicos de TI',
        'swot' => 'Matriz SWOT da área de TI'
      ],
      'infra' => [
        'infra' => 'Infraestrutura de TI da Prefeitura',
        'net' => 'Redes de Comunicação de Dados',
        'datacenter' => 'Data Center',
        'server' => 'Servidores',
        'station' => 'Estações de Trabalho',
        'geren' => 'Gerencia de Redes e Serviços'
      ],
      'adddata' => [
        'adddata' => 'Levantamento de Dados junto às Secretarias',
        'sinte' => 'Síntese das Necessidades Identificadas e Análise das Prioridades'
      ],
      'action' => [
        'action' => 'Ações para Atender às Necessidades'
      ],
      'rh' => [
        'rh' => 'Quantitativo, qualificação e estruturação dos recursos humanos para atendimentos das metas estabelecidas'
      ],
      'conclusion' => [
        'conclusion' => 'Conclusão'
      ]
      
    ];
  }
  
  private function authenticate() {
    
  }
}