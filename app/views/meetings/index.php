<?php if ($meetings->count() == 0): ?>
  <div class="alert alert-warning">
    <h3>Não há reuniões cadastradas ainda, <?= link_to('/documents/' . $_SESSION['document_id'] . '/meetings/add', 'clique aqui') ?> para criar</h3>
  </div>
<?php else: ?>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Ação</th>
      </tr>
    </thead>
    <?php foreach ($meetings as $meeting): ?>
      <tr>
        <td class="col-md-8">
          <?= link_to('/documents/' . $_SESSION['document_id'] . '/meetings/' . $meeting->id, $meeting->m_date) ?>
        </td>
        <td class="col-md-4">
          <div class="row">
            <div class="col-md-6">
              <?= link_to('/documents/' . $_SESSION['document_id'] . '/meetings/' . $meeting->id, '<i class="glyphicon glyphicon-edit"></i> Editar', ['class' => 'btn btn-default btn-warning']) ?>
            </div>
            <div class="col-md-6">
              <form action="<?= url('/documents/:id/meetings/:meeting_id/destroy', [$_SESSION['document_id'], $meeting->id]) ?>" method="post">
                <button type="submit" class="btn btn-default btn-danger">
                  <i class="glyphicon glyphicon-remove"></i> Remover
                </button>
              </form>
            </div>
          </div>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

  <div class="row">
    <div class="col-md-12">
      <?= link_to('/documents/' . $_SESSION['document_id'] . '/meetings/add', '<i class="glyphicon glyphicon-plus"></i>', ['class' => 'btn btn-primary btn-lg pull-right']) ?>
    </div>
  </div>
<?php endif; ?>