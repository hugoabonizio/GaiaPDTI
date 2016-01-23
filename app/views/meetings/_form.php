<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#reuniao" role="tab" data-toggle="tab">Reunião</a></li>
  <li><a href="#participantes" role="tab" data-toggle="tab">Participantes</a></li>
  <li><a href="#pessoas" role="tab" data-toggle="tab">Pessoas</a></li>
  <li><a href="#processos" role="tab" data-toggle="tab">Processos</a></li>
  <li><a href="#infraestrutura" role="tab" data-toggle="tab">Infraestrutura</a></li>
  <li><a href="#sistemas" role="tab" data-toggle="tab">Sistemas</a></li>
</ul>

<form method="post" action="<?= $action ?>">
  <input type="hidden" name="action" value="<?= $action ?>">
  <input type="hidden" name="id" value="<?= $meeting->id ?>">

  <div class="tab-content" class="tab-content">
    <div class="tab-pane active" id="reuniao">
      <div class="form-group">
        <label for="name">Data</label>
        <input type="date" class="form-control" name="date" value="<?= @explode(' ', $meeting->m_date)[0] ?>">
      </div>
      <div class="form-group">
        <label for="name">Horário</label>
        <input type="time" class="form-control" name="time" value="<?= @explode(' ', $meeting->m_date)[1] ?>">
      </div>
      <div class="form-group">
        <label for="name">Local</label>
        <input type="text" class="form-control" name="local" value="<?= $meeting->local ?>">
      </div>
      <div class="form-group">
        <label for="name">Orgão</label>
        <select class="form-control" name="organ_id">
          <option value="" disabled selected>[...]</option>
          <?php foreach ($organs as $organ): ?>
            <option value="<?= $organ->id ?>" <?= ($meeting->organ_id == $organ->id) ? 'selected' : '' ?>><?= $organ->name ?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>

    <div class="tab-pane" id="participantes">
      <div class="form-group">
        <textarea class="textarea" style="width: 100%; height: 40%;" name="participants">
          <?= $meeting->participants ?>
        </textarea>
      </div>
    </div>

    <div class="tab-pane" id="pessoas">
      <div class="form-group">
        <textarea class="textarea" style="width: 100%; height: 40%;" name="people">
          <?= $meeting->people ?>
        </textarea>
      </div>
    </div>

    <div class="tab-pane" id="processos">
      <div class="form-group">
        <textarea class="textarea" style="width: 100%; height: 40%;" name="processes">
          <?= $meeting->processes ?>
        </textarea>
      </div>
    </div>

    <div class="tab-pane" id="infraestrutura">
      <div class="form-group">
        <textarea class="textarea" style="width: 100%; height: 40%;" name="infra">
          <?= $meeting->infra ?>
        </textarea>
      </div>
    </div>

    <div class="tab-pane" id="sistemas">
      <div class="form-group">
        <textarea class="textarea" style="width: 100%; height: 40%;" name="systems">
          <?= $meeting->systems ?>
        </textarea>
      </div>
    </div>
  </div>

  <button type="submit" class="btn btn-success btn-lg pull-right">Salvar</button>
</form>