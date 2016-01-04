<?php
define('DOMPDF_ENABLE_AUTOLOAD', false);
require_once 'vendor/dompdf/dompdf/dompdf_config.inc.php';

class RenderController extends ApplicationController {
  function render() {
    $html = '<html><body>';
    foreach ($this->sections as $section => $subs) {
      $model = Document::find($_SESSION['document_id'])->$section();
      foreach ($subs as $label => $name) {
        $html .= "<h1>$name</h1><h3>" . $model->$label . "</h3>";
      }
    }
    $html .= '</body></html>';

    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->render();
    header('Content-Type: application/pdf');
    echo $dompdf->output();
  }
}