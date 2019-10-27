<link rel="stylesheet" href="public/fontawesome-free-5.10.1-web/css/all.css">
<?php require_once'view/head1.php';
require_once'view/headAdmin.php';

 ?>
<body class="card text-white bg-success">
<div style="margin-left:772px;width:500px;margin-top:-700px;margin-bottom:30px;" >
      <form action="<?php echo URL.'Secretaire/recherche';?>" method="get">
      <div class="input-group">
      <input type="text" name="recherche"  id="btn-input" class="form-control input-sm-4 fas fa-search"placeholder="Saisir le  Code du Secretaire à rechercher " >
       <span class="input-group-btn">
       <input type="submit" id="btn-chat" class="btn btn-primary btn-md" value="Rechercher" >
      
       </span>
       </div>
      </form>
     </div>
<div class="container   col-md-9 col-xs-10 col-md-offset-3" style="margin-top:-30px; ">
        <div class="panel panel-info" >
            <div class="panel-heading">Liste des Secretaire</div>
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
          <th scope="col">Code Secretaire</th>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">Tel</th>
          <th scope="col">Email</th>
          <th scope="col">ID Serve</th>
          <th scope="col" colspan="2 ">Action</th>
        </tr>
        <?php 
foreach($data as $pa){
    foreach($pa as $Sec){
        
        echo "<tr>
        <td>$Sec[1]</td>
        <td>$Sec[2]</td>
        <td>$Sec[3]</td>
        <td>$Sec[4]</td>
        <td>$Sec[5]</td>
        <td>$Sec[6]</td>

        "?>
        <td><button class="btn-info"><a href="<?php  echo URL.'Secretaire/edit/'.$Sec[0];?>"> Edider</a></button> </td>
        <td><button class="btn-danger"><a href="<?php  echo URL.'Secretaire/delete/'.$Sec[0];?>"onclick="return confirm('Etes vous sur de vouloir supprimer ce Patient ?');">Delete</a></button></td>
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


