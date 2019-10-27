
    <?php require_once'view/head.php' ;
     require_once'view/headS.php';
     ?>
    <body class="card text-white bg-success">
    <div style="margin-left:680px;width:500px;margin-top:-520px;margin-bottom:30px;" >
      <form action="<?php echo URL.'RendezVous/recherche';?>" method="get">
      <div class="input-group">
      <input type="text" name="recherche"  id="btn-input" class="form-control input-sm-4 fas fa-search"placeholder="Saisir le  nom du pattient à rechercher " >
       <span class="input-group-btn">
       <input type="submit" id="btn-chat" class="btn btn-primary btn-md" value="Rechercher"  >
      
       </span>
       </div>
      </form> 
     </div>
    <div class="container    col-md-8 -xs-10 col-md-offset-3" style="margin-top:-30px;">
            <div class="panel panel-info" >
                <div class="panel-heading">Liste des Rv</div>
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
            <th scope="col">Code_Rv</th>
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
            <td>$rv[4]</td>
            <td>$rv[5]</td>

            "?>
            <td><button class="btn-info"><a href="<?php  echo URL.'RendezVous/edit/'.$rv[0];?>">Editer</a></button></td>
            <td><button class="btn-danger"><a href="<?php  echo URL.'RendezVous/delete/'.$rv[0];?>"onclick="return confirm('Etes vous sur de vouloir supprimer ce Rendez-vous ?');">Delete</a></button></td>
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


