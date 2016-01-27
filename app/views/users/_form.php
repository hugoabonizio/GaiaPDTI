<form action="<?= $form_action ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" name="name" placeholder="Nome" value="<?= @$user->name ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email" value="<?= @$user->email ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" name="password" placeholder="Senha" value="<?= @$user->password ?>">
  </div>
  <div class="form-group">
    <label>Organização</label>
    <select class="form-control" name="organization_id">
      <?php foreach ($organizations as $organization): ?>
        <option value="<?= $organization->id ?>" <?= ($user->organization_id == $organization->id) ? 'selected' : '' ?>><?= $organization->name ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" name="is_admin" <?= ((@$user->is_admin) ? 'checked' : '') ?>> Administrador?
    </label>
  </div>
  <button type="submit" class="btn btn-success pull-right">Criar</button>
</form>