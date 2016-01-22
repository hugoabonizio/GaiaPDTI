<div class="container">  
  <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info" >
      <div class="panel-heading" style="background:#2B85C4">
        <div class="panel-title" style="color:white">Entrar</div>
      </div>
      <div style="padding-top:30px" class="panel-body" >
        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

        <form method="post" action="<?= url('/'); ?>" class="form-horizontal" role="form">
          <div style="margin-bottom: 25px" class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="Email">
          </div>
          <div style="margin-bottom: 25px" class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="login-password" type="password" class="form-control" name="password" placeholder="Senha">
          </div>
          <div class="input-group">
            
          </div>
          <div style="margin-top:10px" class="form-group">
            <div class="col-sm-8 pull-left checkbox">
              <label>
                <input id="login-remember" type="checkbox" name="remember" value="1"> Lembrar
              </label>
            </div>
            
            <div class="col-sm-4 pull-left controls">
              <button type="submit" class="btn btn-success">Entrar</button>
            </div>
            
            
          </div>   
        </form>
      </div>                     
    </div>  
  </div>
</div>