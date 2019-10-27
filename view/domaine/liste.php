<link rel="stylesheet" href="public/fontawesome-free-5.10.1-web/css/all.css">
<?php require_once'view/head1.php';
require_once'view/headAdmin.php';
 ?>
<body class="card text-white bg-success">
<div class="container   col-md-9 col-xs-10 col-md-offset-3" style="margin-top:-800px;  ">
        <div class="panel panel-info" >
            <div class="panel-heading">Liste des Medcins</div>
            <div class="panel-body">
            <table class="table table-bordered">
             <caption></caption>
         
          <tr>
          <th scope="col">CODE Doamine</th>
          <th scope="col">Nom Domaine</th>

          <th scope="col" colspan="2 ">Action</th>
        </tr>
        <?php 
foreach($data as $pa){
    foreach($pa as $domaine){
        
        echo "<tr>
        <td>$domaine[1]</td>
        <td>$domaine[2]</td>"?>
        <td><button class="btn-info"><a href="<?php  echo URL.'Domaine/edit/'.$domaine[0];?>"> Edider</a></button> </td>
        <td><button class="btn-danger"><a href="<?php  echo URL.'Domaine/delete/'.$domaine[0];?>"onclick="return confirm('Etes vous sur de vouloir supprimer ce Patient ?');">Delete</a></button></td>
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


