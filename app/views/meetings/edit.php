<?php $action = url('/documents/' . $_SESSION['document_id'] . '/organs/' . $organ->id) ?>
<div class="panel panel-default">
  <div class="panel-heading">Editar orgão</div>
  <div class="panel-body">
    <?php include ('_form.php') ?>
  </div>
</div>