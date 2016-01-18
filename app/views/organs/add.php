<div class="panel panel-default">
  <div class="panel-heading">Adicionar novo orgão</div>
  <div class="panel-body">
    <form action="/documents/<?= $_SESSION['document_id'] ?>/organs" method="post">
      <div class="form-group">
        <div class="form-group">
          <label>Nome</label>
          <input type="text" class="form-control" name="name" placeholder="Nome">
        </div>

        <div class="form-group">
          <label>Descrição</label>
          <input type="text" class="form-control" name="description" placeholder="Descrição">
        </div>
      </div>
      <button type="submit" class="btn btn-success pull-right">Criar</button>
    </form>
  </div>
</div>