<?php
    session_start();
    include_once "config.php";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
               $row = mysqli_fetch_assoc($sql);
             }
    $outgoing_id = $_SESSION['unique_id'];
    $idEntreprise = $row['idEntreprise'];
    $sql = "SELECT * FROM taches WHERE idEntreprise = {$idEntreprise}";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "";
    }elseif(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
            $date1 =date('d/m/y',strtotime($row['dateD'])) ;
            $date2 =date('d/m/y',strtotime($row['dateF'])) ; 
        $output .="<div class=\"col-md-3 col-sm-6  my-md-0\">
                        <div class=\"card shadow text-center\" ";

                        if(isset($row['idPerson'])) 
                            $output .="style=\"background-color:#01FF70;\">";
                        else
                            $output .="style=\"background-color:#DDDDDD;\">";

                        $output .="<div class=\"card-header fw-bold\">
                                Tache
                            </div>
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{$row['title']}</h5>
                                <p class=\"card-text\"> {$row['description']} </p>";
                        if(isset($row['idPerson'])){
                            $sql1 = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$row['idPerson']}");
                            if(mysqli_num_rows($sql1) > 0){
                                $row1 = mysqli_fetch_assoc($sql1);
                            }
                            
                            $output .="<p class=\"fw-bold\">{$row1['lname']} {$row1['fname']}</p>";
                        }
                        else
                            $output .= "<button type=\"button\"  class=\"btn text-dark bg-info btn-rounded\" onClick=\"Affecter({$outgoing_id},{$row['idTache']})\">Affecter </button>"; 
                           
                        $output .="</div>
                        
                         <div class=\"card-footer\">
                            <p class=\"fw-bold m-0\">{$date1}</p>
                            ====
                            <p class=\"fw-bold m-0\">{$date2}</p>
                        </div>
                        </div>
                    </div>";
        }
    }
    echo $output;
?>