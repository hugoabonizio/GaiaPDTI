<form action="<?= $action ?>" method="post">
  <div class="form-group">
    <div class="form-group">
      <label>Nome</label>
      <input type="text" class="form-control" name="name" placeholder="Nome" value="<?= @$organ->name ?>">
    </div>

    <div class="form-group">
      <label>Descrição</label>
      <input type="text" class="form-control" name="description" placeholder="Descrição" value="<?= @$organ->description ?>">
    </div>
  </div>
  <button type="submit" class="btn btn-success pull-right">Salvar</button>
</form>