<?php require_once'view/head.php';
foreach($data as $serv){
    $serv[0];
}
?>
<body>
<div class="container col-md-5 col-xs-10 col-md-offset-3" style="margin-top:150px;">
    <div class="panel panel-info">
    <div class="panel-heading"><h4>Modifier Service</h4> </div>
    <div class="panel-body">
    <form action="<?php echo URL.'Service/update';?>"   method="post">
    <div class="form-group">
    <label for="" class="form control-label">ID Service</label>
    <input type="text" class="form-control" name="idS"  value="<?=  $serv[0]?>" readonly>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">CODE Service</label>
    <input type="text" class="form-control" name="codeS"  value="<?=  $serv[1]?>" readonly>
    </div>
    <div class="form-group">
    <label for="" class="form control-label">Nom Service</label>
    <input type="text" class="form-control" name="nomS"  value="<?=  $serv[2]?>">
    </div>
    <input type="submit" value="Modifier" name="Modifier"  class="btn btn-primary">
    <button type="reset" class="btn btn-warning"> Annuler</button>

    </form>
    </div>
    </div>
    </div>
    </div>
    <div>
    

</body>
</html>