<?php
    session_start();
    include_once "config.php";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
               $row = mysqli_fetch_assoc($sql);
             }
    $outgoing_id = $_SESSION['unique_id'];
    $idEntreprise = $row['idEntreprise'];
    $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND idEntreprise = {$idEntreprise} AND state != 'no' ORDER BY user_id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "";
    }elseif(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
        $output .="<tr>
      <td>
        <div class=\"d-flex align-items-center\">
          <img
              src=\"php/images/{$row['img']}\"
              alt=\"\"
              style=\"width: 45px; height: 45px\"
              class=\"rounded-circle\"
              />
          <div class=\"ms-3_\">
            <p class=\"fw-bold mb-1\">{$row['lname']} {$row['fname']}</p>
            <p class=\"text-muted mb-0\">{$row['email']}</p>
          </div>
        </div>
      </td>
      <td>
        <p class=\"fw-normal mb-1\">{$row['work']}</p>
      </td>
      <td>
      <p class=\"fw-normal mb-1\">{$row['state']}</p>
      </td>
    </tr>";

        }
    }
    echo $output;
?>