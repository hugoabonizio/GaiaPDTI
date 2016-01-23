<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#swot_strenghts" role="tab" data-toggle="tab">Pontos Fortes</a></li>
  <li><a href="#swot_weakness" role="tab" data-toggle="tab">Pontos Fracos</a></li>
  <li><a href="#swot_opportunities" role="tab" data-toggle="tab">Oportunidades</a></li>
  <li><a href="#swot_threats" role="tab" data-toggle="tab">Ameaças</a></li>
</ul>

<form action="<?= url('/documents/:id', [$_SESSION['document_id']]) ?>" method="post">
  <input type="hidden" name="section" value="<?= $section ?>">
  <input type="hidden" name="subsection" value="<?= $subsection ?>">
  
  <div class="tab-content" class="tab-content">
    <?php
    $i = -1;
    foreach ($swot_sections as $key=>$name):
      $i++;
    ?>
      <div class="tab-pane <?= ((!$i) ? 'active' : '') ?>" id="<?= $key ?>">
        <h3 class="page-header"><?= $name ?></h3>
        <textarea class="textarea" style="width: 100%; height: 40%;" id="<?= $key ?>" name="<?= $key ?>"><?= $content->$key ?></textarea>
      </div>
    <?php endforeach; ?>
  </div>
  
  <div class="row">
    <div class="col-lg-12">
      <button type="submit" class="btn btn-success btn-lg pull-right">Salvar</button>
    </div>
  </div>
</form>