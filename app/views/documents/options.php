<?php if (flash()): ?>
  <div class="alert alert-success" role="alert"><?= flash('result') ?></div>
<?php endif; ?>

<div class="panel panel-default">
  <div class="panel-heading">Opções do documento</div>
  <div class="panel-body">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Nome</label>
        <input type="text" class="form-control" name="name" value="<?= $document->name ?>">
      </div>
      <div class="form-group">
        <label>Ano</label>
        <input type="text" class="form-control" name="year" value="<?= $document->year ?>">
      </div>
      <div class="form-group">
        <label>Logo</label>
        <img src="/public/uploads/<?= $document->logo ?>" style="width: 130px;">
        <input type="file" name="logo">
      </div>
      <button type="submit" class="btn btn-success pull-right">Salvar</button>
    </form>
    
    <?= link_to('/documents/' . $document->id, '<i class="glyphicon glyphicon-chevron-left"></i> Voltar') ?>
  </div>
</div>

