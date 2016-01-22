<?php $action = url('/documents/' . $_SESSION['document_id'] . '/organs') ?>
<div class="panel panel-default">
  <div class="panel-heading">Adicionar novo orgão</div>
  <div class="panel-body">
    <?php include '_form.php' ?>
  </div>
</div>