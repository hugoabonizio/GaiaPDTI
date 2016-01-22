<div class="pdti-sections" style="margin: 0 auto;">
  <h1><?= $sections[$section][$subsection] ?></h1>
  <form action="<?= url('/documents/:id', [$_SESSION['document_id']]) ?>" method="post">
    <input type="hidden" name="section" value="<?= $section ?>">
    <input type="hidden" name="subsection" value="<?= $subsection ?>">
    <div class="form-group">
      <textarea name="content" class="textarea" style="width: 100%; height: 50%;"><?= $content ?></textarea>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <button type="submit" class="btn btn-success btn-lg pull-right">Salvar</button>
      </div>
    </div>
  </form>
</div>