
           <div class="container    col-md-3 -xs-10 col-md-offset-3" style=" margin-top:-450px; border:1px solid black;padding:40px;padding-bottom:2%;">
            
                 <h4>Hopital La Paix  </h4>
           <h3>Code Rv:</h3>   <?= $data[1] ?> <br><br>
           <h3>Date: </h3> <?= (new DateTime($data[2]))->format('d/m/Y')?>  <br><br>
          <h3> Heure:</h3>  <?= (new DateTime($data[3]))->format('H:i') ?> ,<br><br>
            <h3>Nom Patient:</h3>   <?=  $data[4]?><br><br>
            <h3> Nom Medecin:</h3>  <?=  $data[5]?><br><br>
            </div>
    