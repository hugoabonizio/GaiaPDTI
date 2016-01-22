<?php
define('DOMPDF_ENABLE_AUTOLOAD', false);
require_once 'vendor/dompdf/dompdf/dompdf_config.inc.php';

class RenderController extends AuthenticateController {
  function render() {
    $document = Document::find($_SESSION['document_id']);
    
    $html = file_get_contents('app/views/render/header.pdf.php');
    $html .= '<div id="cover">
      <img src="public/uploads/' . $document->logo . '">
      <h1>' . "Plano Diretor de Tecnologia da Informação da Prefeitura Municipal de Guaraci" .'</h1>
      <h3>LONDRINA - PR</h3>
      <h3>' . $document->year . '</h3>
    </div>';
    $html .= file_get_contents('app/views/render/logos.pdf.php');
    foreach ($this->sections as $section => $subs) {
      $model = Document::find($_SESSION['document_id'])->$section();
      $counter = 1;
      foreach ($subs as $label => $name) {
        $html .= '<h2>' . $counter . " $name</h2><p>" . $model->$label . "</p>";
        $counter += 0.1;
      }
    }
    $html .= '</div></body></html>';
    
    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->render();
    header('Content-Type: application/pdf');
    echo $dompdf->output();
    
  }
}