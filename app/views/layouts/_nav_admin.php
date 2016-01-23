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
          <li><?= link_to('/organizations', 'Organizações') ?></li>
          <li><?= link_to('/users', 'Usuários') ?></li>
        </ul>
        
        <ul class="nav navbar-right navbar-nav">
          <li><?= link_to('/logout', 'Sair <i class="glyphicon glyphicon-log-out"></i>') ?></li>
        </ul>
      </div><!--/.nav-collapse -->
    <?php endif; ?>
  </div>
</nav>