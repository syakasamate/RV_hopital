
<?php require_once'view/head.php' ?>
<body>
<div class="container   col-md-8 col-md-offset-3 ">
        <div class="panel panel-info" >
            <div class="panel-heading">Liste des Employes</div>
            <div class="panel-body">
            <table class="table table-bordered">
             <caption></caption>
         
          <tr>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">Age</th>
          <th scope="col">Genre</th>
          <th scope="col">Tel</th>
          <th scope="col">Adresse</th>
          <th scope="col">Email</th>
          <th scope="col" colspan="2 ">Action</th>
        </tr>
<?php
foreach($data as $pa){
    foreach($pa as $patient){
        echo "<tr>
        <td>$patient[Nom_p]</td>
        <td>$patient[Prenom_p]</td>
        <td>$patient[Age_p]</td>
        <td>$patient[Genre_P]</td>
        <td>$patient[Tel_p]</td>
        <td>$patient[Adresse_p]</td>
        <td>$patient[Email_p]</td>
        <td>editer</td>
        <td>delete</td>
       
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


