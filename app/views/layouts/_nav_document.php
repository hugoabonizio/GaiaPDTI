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
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="nav-home"><?= link_to('/', '<i class="fa fa-home"></i> Início') ?></li>
        <li class="nav-document"><?= link_to('/documents/sections', '<i class="fa fa-file-text"></i> Seções do documento') ?></li>
        <li class="nav-meeting">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Reuniões <i class="caret"></i></a>
          <ul class="dropdown-menu">
            <li><?= link_to('/documents/' . $_SESSION['document_id'] . '/meetings', '<i class="fa fa-list"></i> Listar') ?></li>
            <li><?= link_to('/documents/' . $_SESSION['document_id'] . '/meetings/add', '<i class="fa fa-plus"></i> Novo') ?></li>
          </ul>
        </li>
        <li class="nav-organ">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-sitemap"></i> Orgãos <i class="caret"></i>
          <ul class="dropdown-menu">
            <li><?= link_to('/documents/' . $_SESSION['document_id'] . '/organs', '<i class="fa fa-list"></i> Listar') ?></li>
            <li><?= link_to('/documents/' . $_SESSION['document_id'] . '/organs/add', '<i class="fa fa-plus"></i> Novo') ?></li>
          </ul>
        </li>
        <li><?= link_to('/documents/' . $_SESSION['document_id'] . '/options', '<i class="fa fa-cogs"></i> Opções') ?></li>
<!--         <li class="active"><a href="#">1. Introdução</a></li>
        <li><a href="#about">2. Referencial Estratégico</a></li>
        <li><a href="#contact">3. Infraestrutura</a></li>
        <li><a href="#contact">4. Resultados</a></li>
        <li><a href="#contact">5. Ações</a></li>
        <li><a href="#contact">6. Metas</a></li>
        <li><a href="#contact">7. Conclusão</a></li> -->
      </ul>

      <form class="navbar-form navbar-right" role="search">
        <a href="<?= url('/render') ?>" target="_blank" class="btn btn-danger">
          <span class="glyphicon glyphicon glyphicon-save"></span> Gerar PDF
        </a>
      </form>
    </div><!--/.nav-collapse -->
  </div>
</nav>