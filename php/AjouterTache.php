<?php
  if(isset($_POST['submit'])){
    include_once "config.php";
    // Date conversion
    $date1 =date('y/m/d',strtotime($_POST['dateD'])) ;
    $date2 =date('y/m/d',strtotime($_POST['dateF'])) ;

    // Chercher l'id Entreprise
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
               $row = mysqli_fetch_assoc($sql);
             }
    $idEntreprise = $row['idEntreprise'];

    // Inserer la tacha dans db
    $insert_query = mysqli_query($conn, "INSERT INTO taches (idPerson,title, description, dateD, dateF, idEntreprise)VALUES (null,'{$_POST['title']}', '{$_POST['description']}', '{$_POST['dateD']}', '{$_POST['dateF']}', '{$idEntreprise}')");
    
    header("location: Taches.php");
  }
  
?>

<div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed bg-info fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              Ajouter Une Tache
            </button>
          </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body d-flex bg-light">
                      <div class="container rounded ">
                      
                      <div class="row justify-content-center" >
                      <div class="col-md-9">
                          <div class="p-3 py-2">
                            <form method="POST" action="Taches.php">
                              <div class="row ">
                                  <div class="col-md-12"><label class="labels">Titre du tache :</label><input type="text" class="form-control" placeholder="titre ...." value="" name="title" required></div>
                              </div>
                              <div class="row mt-3">
                                  <div class="col-md-12 mb-2"><label class="labels">Description :</label><textarea class="form-control" id="x" rows="3" placeholder="Description ..." name="description" required></textarea></div>
                                  <div class="col-md-12 mb-2"><label class="labels">Date du debut :</label><input type="date" class="form-control" placeholder="date ?" value="" name="dateD" required></div>
                                  <div class="col-md-12 mb-2"><label class="labels">Date de fin :</label><input type="date" class="form-control" placeholder="date ?" value="" name="dateF" required></div>
                              </div>
                              <div class="mt-4 text-center"><input type="submit" name ="submit" class="btn btn-primary profile-button" value="Ajouter"/></div>
                          </div>
                          <form>
                      </div>
                      </div>


                      </div>
                     </div>
                 </div>
            </div>
          </div>
        </div>
      </div>