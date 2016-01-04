<?php
define('DOMPDF_ENABLE_AUTOLOAD', false);
require_once 'vendor/dompdf/dompdf/dompdf_config.inc.php';

class RenderController extends ApplicationController {
  function render() {
    $html =
     '<html><body>'.
     '<p>Put your html here, or generate it with your favourite '.
     'templating system.</p>'.
     '</body></html>';

    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->render();
    header('Content-Type: application/pdf');
    echo $dompdf->output();
  }
}