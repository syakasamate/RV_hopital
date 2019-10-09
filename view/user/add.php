<?php require_once'view/head.php' ?>
<body>

<div class="container">
    <div class="panel panel-info">
    <div class="panel-heading">page de connection</div>
    <div class="panel-body">
    <form action="<?php echo URL.'User/log';?>"   method="post">
    <div class="form-group">
    <label for="" class="form control-label">Login</label>
    <input type="text" class="form-control" name="login">
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Password</label>
    <input type="text" class="form-control" name="pasword">
    </div>

    <input type="submit" value="connecter" name="connecter">
    </form>
    </div>
    </div>
    </div>
</body>
</html>