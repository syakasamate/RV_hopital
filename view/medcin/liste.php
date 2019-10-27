<link rel="stylesheet" href="public/fontawesome-free-5.10.1-web/css/all.css">
<?php require_once'view/head1.php';
require_once'view/headAdmin.php';
 ?>
<body class="card text-white bg-success">
<div style="margin-left:662px;width:500px;margin-top:-700px;margin-bottom:30px;" >
      <form action="<?php echo URL.'Medcin/recherche';?>" method="get">
      <div class="input-group">
      <input type="text" name="recherche"  id="btn-input" class="form-control input-sm-4 fas fa-search"placeholder="Saisir le code de Medcin à rechercher " >
       <span class="input-group-btn">
       <input type="submit" id="btn-chat" class="btn btn-primary btn-md" value="Rechercher"  >
      
       </span>
       </div>
      </form>
     </div>
<div class="container    col-md-8 -xs-10 col-md-offset-3" style="margin-top:-30px; ">
        <div class="panel panel-info" >
            <div class="panel-heading">Liste des Medcins</div>
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
          <th scope="col">Code Medecin</th>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">Tel</th>
          <th scope="col">Email</th>
          <th scope="col">ID Service </th>
          <th scope="col">ID Domaine</th>

          <th scope="col" colspan="2 ">Action</th>
        </tr>
        <?php 
foreach($data as $pa){
    foreach($pa as $medcin){
        
        echo "<tr>
        <td>$medcin[1]</td>
        <td>$medcin[2]</td>
        <td>$medcin[3]</td>
        <td>$medcin[4]</td>
        <td>$medcin[5]</td>
        <td>$medcin[6]</td>
        <td>$medcin[7]</td>"?>
        <td><button class="btn-info"><a href="<?php  echo URL.'Medcin/edit/'.$medcin[0];?>"> Edider</a></button> </td>
        <td><button class="btn-danger"><a href="<?php  echo URL.'Medcin/delete/'.$medcin[0];?>"onclick="return confirm('Etes vous sur de vouloir supprimer ce Patient ?');">Delete</a></button></td>
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


