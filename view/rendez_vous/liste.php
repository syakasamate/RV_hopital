
<?php require_once'view/head.php' ?>
<body class="card text-white bg-success">
<div class="container   col-md-8 col-md-offset-2 ">
        <div class="panel panel-info" >
            <div class="panel-heading">Liste des Rv</div>
            <div class="panel-body">
            <table class="table table-bordered">
             <caption></caption>
         
          <tr>
         
          <th scope="col">Heure_Rv</th>
          <th scope="col">Date_Rv</th>
          <th scope="col">ID Medcin</th>
          <th scope="col">ID Patient</th>
          <th scope="col" colspan="2 ">Action</th>
        </tr>
<?php
foreach($data as $pa){
    foreach($pa as $rv){
        echo "<tr>
        <td>$rv[1]</td>
        <td>$rv[2]</td>
        <td>$rv[3]</td>
        <td>$rv[4]</td>"?>
        <td><a href="<?php  echo URL.'RendezVous/edit/'.$rv[0];?>">Editer</a> </td>
        <td><a href="<?php  echo URL.'RendezVous/delete/'.$rv[0];?>">Delete</a> </td>
        <?php
       echo  "</tr> ";
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


