<div class="container" style="margin-top:70px">
  <h1>Usuários</h1>
  <table class="table table-bordered table-hover" style="margin-top:20px">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Organização</th>
        <th>Ação</th>
      </tr>
    </thead>
    <?php foreach ($users as $user): ?>
      <tr>
        <td class="col-md-5">
          <?= $user->name; ?>
        </td>
        <td class="col-md-4">
          <?= $user->organization->name; ?>
        </td>
        <td class="col-md-3">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-default btn-warning" href="/organization/id/edit">
                <i class="glyphicon glyphicon-edit"></i> Editar
              </a>
            </div>

            <div class="col-md-6">
              <form action="<?= url('/users/:id/destroy', [$user->id]) ?>" method="post" style="margin-bottom:0px;width:0px;">
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
      <a href="/users/add" class="btn btn-primary btn-lg pull-right">
        <i class="glyphicon glyphicon-plus"></i>
      </a>
    </div>
  </div>
</div>