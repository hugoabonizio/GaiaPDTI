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
        <td class="col-md-10">
          <a href="/organizations/select?organization_id=<?= $organization->id; ?>">
            <?= $organization->name; ?>
          </a>
        </td>
        <td class="col-md-2">
          <a class="btn btn-default btn-success" href="/organizations/select?organization_id=<?= $organization->id; ?>">
            <i class="glyphicon glyphicon-share"></i> Entrar
          </a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
  
  <div class="row">
    <div class="col-md-12">
      <a href="/organizations/add" class="btn btn-primary btn-lg pull-right">
        <i class="glyphicon glyphicon-plus"></i>
      </a>
    </div>
  </div>
</div>