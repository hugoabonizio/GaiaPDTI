<div class="pdti-sections" style="margin: 0 auto;">
  <h1><?= $sections[$section][$subsection] ?></h1>
  <form action="<?= url('/documents') ?>" method="post">
    <div class="form-group">
      <div class="form-group">
        <label>Nome</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label>Ano</label>
        <input type="text" name="year" class="form-control">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <button type="submit" class="btn btn-success btn-lg pull-right">Cadastrar</button>
      </div>
    </div>
  </form>
</div>