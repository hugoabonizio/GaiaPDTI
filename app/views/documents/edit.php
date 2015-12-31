<div class="pdti-sections" style="margin: 0 auto;">
  <h1><?= $sections[$section][$subsection] ?></h1>
  <form action="" method="post">
    <input type="hidden" name="field" value="">
    <div class="form-group">
      <textarea class="textarea" style="width: 100%; height: 40%;"><?= $content ?></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-success btn-lg pull-right">Salvar</button>
    </div>
  </form>
</div>