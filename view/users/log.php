<?php require_once'view/head.php' ?>
<body class="card text-white bg-primary">
<div class="container col-md-3 col-xs-10 col-md-offset-4" style="margin-top:100px;">
    <div class="panel panel-info  ">
    <div class="panel-heading">Page de connection</div>
    <div class="panel-body">
    <form action="<?php echo URL.'Users/log';?>"   method="post">
    <div class="form-group " >
    <label for="" class="form control-label text-primary">Login</label>
    <input type="text" class="form-control" name="login">
    </div>
    <div class="form-group ">
    <label for="" class="form control-label text-primary ">Password</label>
    <input type="password" class="form-control" name="pasword">
    </div>
    <?php if(!empty($data)):?>
        
      <div class="alert alert-danger"><?=$data; ?></div>
   <?php endif;?>
    <input type="submit" value="connecter" name="connecter" class="btn btn-success">
    </form>
    </div>
    </div>
    </div>

</body>

</html>