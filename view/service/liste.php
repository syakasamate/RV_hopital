<link rel="stylesheet" href="public/fontawesome-free-5.10.1-web/css/all.css">
<?php require_once'view/head.php';
require_once'view/headAdmin.php';

 ?>
<body class="card text-white bg-success">
<div style="margin-left:667px;width:500px;margin-top:-900px;margin-bottom:0px;" >
      <form action="<?php echo URL.'Service/recherche';?>" method="get">
      <div class="input-group">
      <input type="text" name="recherche"  id="btn-input" class="form-control input-sm-4 fas fa-search"placeholder="Saisir le  Code du Service à rechercher " >
       <span class="input-group-btn">
       <input type="submit" id="btn-chat" class="btn btn-primary btn-md" value="Rechercher"  >
      
       </span>
       </div>
      </form>
     </div>
<div class="container  col-md-8 col-xs-10 col-md-offset-3" style="margin-top:-15px;">
        <div class="panel panel-info" >
            <div class="panel-heading">Liste des Service</div>
            <div class="panel-body">
            
            <?php 
            if(isset($dat)){
              foreach($dat as $pa){
               ?>
                <div class="alert alert-danger"><?= $pa?></div>
            <?php
              }
            }?>
            <table class="table table-bordered">
             <caption></caption>
         
          <tr>
          <th scope="col">Code Service</th>
          <th scope="col">Nom Service</th>

          <th scope="col" colspan="2 ">Action</th>
        </tr>
        <?php 
foreach($data as $pa){
    foreach($pa as $service){
        
        echo "<tr>
        <td>$service[1]</td>
        <td>$service[2]</td>"?>
        <td><button class="btn-info"><a href="<?php  echo URL.'Service/edit/'.$service[0];?>"> Edider</a></button> </td>
        <td><button class="btn-danger"><a href="<?php  echo URL.'Service/delete/'.$service[0];?>"onclick="return confirm('Etes vous sur de vouloir supprimer ce Patient ?');">Delete</a></button></td>
        <?php
      echo" </tr> ";
    }

}

?> 

</table>
</div>
</div>
</div>
</tbody>


</body>
</html>


