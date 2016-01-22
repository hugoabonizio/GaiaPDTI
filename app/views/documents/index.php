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
          <a href="/documents/<?= $document->id; ?>">
            <?= $document->name; ?> (<?= $document->year; ?>)
          </a>
        </td>
        <td class="col-md-4">
          <a class="btn btn-default btn-success" href="/documents/<?= $document->id; ?>">
            <i class="glyphicon glyphicon-share"></i> Entrar
          </a>
          <a class="btn btn-default btn-warning" href="/documents/<?= $document->id; ?>/options">
            <i class="glyphicon glyphicon-edit"></i> Opções
          </a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
<?php endif; ?>