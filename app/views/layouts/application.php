<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GAIA PDTI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/gaia_theme.css">
    <link rel="stylesheet" href="/public/css/pdti.css">
    
    <link rel="stylesheet" href="/public/css/bootstrap-wysihtml5.css">
    <link rel="stylesheet" href="/public/css/pdti.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include '_nav_document.php'; ?>
    <div class="container" style="margin-top: 80px;">
      <?= $yield; ?>
    </div>
    
    <script src="/public/js/jquery.min.js"></script>
    <script src="/public/js/bootstrap.min.js"></script>
    
    <script src="/public/js/wysihtml5-0.3.0.js"></script>
    <script src="/public/js/bootstrap3-wysihtml5.js"></script>
    
    <script>
      $('.textarea').wysihtml5();
    </script>
  </body>
</html>
