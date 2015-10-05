<div class="container" style="margin-top:70px">
  <h1>Organizações</h1>
  <table class="table table-bordered table-hover" style="margin-top:20px">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Ação</th>
      </tr>
    </thead>
    <?php foreach ($organizations as $organization): ?>
      <tr>
        <td class="col-md-8">
          <a href="/organizations/select?organization_id=<?= $organization->id; ?>">
            <?= $organization->name; ?>
          </a>
        </td>
        <td class="col-md-4">
          <a class="btn btn-default btn-success" href="/organizations/select?organization_id=<?= $organization->id; ?>">
            <i class="glyphicon glyphicon-share"></i> Entrar
          </a>
          <a class="btn btn-default btn-warning" href="/organization/id/edit">
            <i class="glyphicon glyphicon-edit"></i> Editar
          </a>
          <a class="btn btn-default btn-danger" href="/organization/id/destroy">
            <i class="glyphicon glyphicon-remove"></i> Remover
          </a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>