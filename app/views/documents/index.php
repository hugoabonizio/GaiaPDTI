<?php if ($documents->count() == 0): ?>
  <div class="alert alert-warning">
    <h3>Não há documentos cadastrados ainda, <?= link_to('/documents/add', 'clique aqui'); ?> para criar.</h3>
  </div>
<?php else: ?>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Ação</th>
      </tr>
    </thead>
    <?php foreach ($documents as $document): ?>
      <tr>
        <td class="col-md-8">
          <?= link_to($document, $document->name . ' (' . $document->year . ')') ?>
        </td>
        <td class="col-md-4">
          <div class="row">
            <div class="col-md-4">
              <?= link_to($document, '<i class="glyphicon glyphicon-share"></i> Entrar', ['class' => 'btn btn-default btn-success']) ?>
            </div>
            <div class="col-md-4">
              <?= link_to('/documents/' . $document->id . '/options', '<i class="glyphicon glyphicon-edit"></i> Opções', ['class' => 'btn btn-default btn-warning']) ?>
            </div>
            <div class="col-md-4">
              <form action="<?= url('/documents/:id/destroy', [$document->id]) ?>" method="post">
                <button type="submit" class="btn btn-default btn-danger">
                  <i class="glyphicon glyphicon-remove"></i> Remover
                </button>
              </form>
            </div>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
<?php endif; ?>

  <div class="row">
    <div class="col-md-12">
      <?= link_to('/documents/add', '<i class="glyphicon glyphicon-plus"></i>', ['class' => 'btn btn-primary btn-lg pull-right']) ?>
    </div>
  </div>