
<?php require_once'view/head.php';
 require_once'view/headMedecin.php';
 ?>
<body class="card text-white bg-success">
<div style="margin-left:935px;width:500px;margin-top:-450px;margin-bottom:30px;" >
      <form action="<?php echo URL.'Planing/recherche';?>" method="get">
      <div class="input-group">
      <input type="text" name="recherche"  id="btn-input" class="form-control input-sm-4 fas fa-search"placeholder="Saisir le  Code du Planing  à rechercher " >
       <span class="input-group-btn">
       <input type="submit" id="btn-chat" class="btn btn-primary btn-md" value="Rechercher"  >
      
       </span>
       </div>
      </form>
     </div>
<div class="container  col-md-9 col-xs-10 col-md-offset-3" style="margin-top:-30px;">
        <div class="panel panel-info" >
            <div class="panel-heading"><h4>Liste des Planing</h4></div>
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
          <th scope="col">CODE Planing</th>
          <th scope="col">Date Planing</th>
          <th scope="col">Heure Debut</th>
          <th scope="col">Heure Fin</th>
          <th scope="col">Prenom Medecin</th>
          <th scope="col" colspan="2 ">Action</th>
        </tr>
<?php
foreach($data as $pa){
    foreach($pa as $pl){
        echo "<tr>
        <td>$pl[1]</td>
        <td>$pl[2]</td>
        <td>$pl[3]</td>
        <td>$pl[4]</td>
        <td>$pl[5]</td>"?>
        <td><button class="btn-info"><a href="<?php  echo URL.'Planing/edit/'.$pl[0];?>">Editer</a></button></td>
        <td><button class="btn-danger"><a href="<?php  echo URL.'Planing/delete/'.$pl[0];?>"onclick="return confirm('Etes vous sur de vouloir supprimer ce Rendez-vous ?');">Delete</a></button></td>
         <?php
        echo "<tr> ";
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


