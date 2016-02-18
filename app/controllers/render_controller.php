<?php
define('DOMPDF_ENABLE_AUTOLOAD', false);
require_once 'vendor/dompdf/dompdf/dompdf_config.inc.php';

class RenderController extends AuthenticateController {
  function render() {
    $document = Document::find($_SESSION['document_id']);
    
    $this->html = file_get_contents('app/views/render/header.pdf.php');
    $this->html .= '<div id="cover">
      <img src="public/uploads/' . $document->logo . '">
      <h1>' . $document->name .'</h1>
      <div style="position: fixed; bottom: 50px;">
        <h3>LONDRINA - PR</h3>
        <h3>' . $document->year . '</h3>
      </div>
    </div>';
    $this->html .= file_get_contents('app/views/render/logos.pdf.php');
    $counter = 0;
    foreach ($this->sections as $section => $subs) {
      $model = Document::find($_SESSION['document_id'])->$section;
      $counter = floor($counter) + 1;
      foreach ($subs as $label => $name) {
        if ($label == 'swot') {
          $this->render_swot($model);
        } else {
          $this->html .= '<h2>' . $counter . " $name</h2><p>" . $model->$label . "</p>";
          $counter += 0.1;
        }
      }
    }
    $this->html .= '</div></body></html>';
    
    $dompdf = new DOMPDF();
    $dompdf->load_html($this->html);
    $dompdf->render();
    header('Content-Type: application/pdf');
    echo $dompdf->output();
  }
  
  private function render_swot($model) {
    $this->html .= "<table style='border: 2px solid black; page-break-before: always; width: 100%;' cellpadding='2' cellspacing='2'>
            <tr style='background-color: #ccc; font-weight: bold; text-align: center;'>
              <td>Pontos Fortes</td>
              <td>Pontos Fracos</td>
            </tr>
            <tr>
              <td>$model->swot_strengths</td>
              <td>$model->swot_weakness</td>
            </tr>
            <tr style='background-color: #ccc; font-weight: bold; text-align: center;'>
              <td>Oportunidades</td>
              <td>Ameaças</td>
            </tr>
            <tr>
              <td>$model->swot_opportunities</td>
              <td>$model->swot_threats</td>
            </tr>
          </table>";
  }
}