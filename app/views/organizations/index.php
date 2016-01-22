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
          <?= link_to('/organizations/select?organization_id=' . $organization->id, $organization->name) ?>
        </td>
        <td class="col-md-2">
          <?= link_to('/organizations/select?organization_id=' . $organization->id, '<i class="glyphicon glyphicon-share"></i> Entrar', ['class' => 'btn btn-default btn-success']) ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
  
  <div class="row">
    <div class="col-md-12">
      <?= link_to('/organizations/add', '<i class="glyphicon glyphicon-plus"></i>', ['class' => 'btn btn-primary btn-lg pull-right']) ?>
    </div>
  </div>
</div>