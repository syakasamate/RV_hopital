
<?php require_once'view/head.php' ?>
<body class="card text-white bg-success">
<div class="container   col-md-8 col-md-offset-2 ">
        <div class="panel panel-info" >
            <div class="panel-heading">Liste des Planing</div>
            <div class="panel-body">
            <table class="table table-bordered">
             <caption></caption>
         
          <tr>
         
          <th scope="col">Date Planing</th>
          <th scope="col">Heure Debut</th>
          <th scope="col">Heure Fin</th>
          <th scope="col">ID Medecin</th>
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
        <td><a href=''>Editer</a> </td>
        <td><a href=''>Delete</a> </td>
        </tr> ";
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


