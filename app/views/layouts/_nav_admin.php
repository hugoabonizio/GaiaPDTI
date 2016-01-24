<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= url('/') ?>"><strong>Gaia PDTI</strong></a>
    </div>
    <?php if (isset($current_user)): ?>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="nav-organization"><?= link_to('/organizations', '<i class="fa fa-building"></i> Organizações') ?></li>
          <li class="nav-user"><?= link_to('/users', '<i class="fa fa-users"></i> Usuários') ?></li>
        </ul>
        
        <ul class="nav navbar-right navbar-nav">
          <li><?= link_to('/logout', 'Sair <i class="fa fa-sign-out"></i>') ?></li>
        </ul>
      </div><!--/.nav-collapse -->
    <?php endif; ?>
  </div>
</nav>