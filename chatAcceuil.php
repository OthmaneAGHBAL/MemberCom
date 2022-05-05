<?php 
  session_start();
  include_once "php/config.php";
?>


<?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
            $sqlEntreprise = mysqli_query($conn, "SELECT * FROM entreprises WHERE idEntreprise = '{$row['idEntreprise']}'");
            if(mysqli_num_rows($sqlEntreprise) > 0){
              $rowEnt = mysqli_fetch_assoc($sqlEntreprise);
            }
          ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Acceuil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/bootstrap.min.css" >
  <link rel="stylesheet" href="css/boxicons.min.css" >


  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="css/style1.css" >


</head>

<body>

  <!-- ======= Mobile nav toggle button   ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
       
           <img src="php/images/<?php echo $row['img']; ?>" alt="" class="img-fluid rounded-circle bg-white" >
  
      <h1 class="text-light mb-2"><a href="sinup.html"><?php echo $row['fname']. " " . $row['lname'] ?></a></h1>
      <h1 class="text-info fs-5"><?php echo $rowEnt['nomEntreprise'] ?></h1>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
        <li><a href="Acceuil.php" class="nav-link scrollto "><i class="fa-solid fa-house-chimney"></i> <span>Acceuil</span></a></li>
          <li><a href="chatAcceuil.php" class="nav-link scrollto active"><i class="fa-solid fa-comment"></i> <span>Chat</span></a></li>
          <li><a href="profile.php" class="nav-link scrollto"><i class="fa-solid fa-id-badge"></i> <span>Profile</span></a></li>
          <li><a href="Utilisateurs.php" class="nav-link scrollto"><i class="fa-solid fa-users"></i> <span>Utilisateurs</span></a></li>
          <li><a href="Taches.php" class="nav-link scrollto"><i class="fa-solid fa-list-check"></i><span>Taches</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <img src="imagesProjet/logo_login_sinup.svg" alt="" width="230em">
          <ol>
            <li class="fw-bold fs-6" ><a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" >Deconnecter</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
    <div class="page">
      <section class="users">
        <header>
          
        </header>
        <div class="search">
          <span class="text">Select an user to start chat</span>
          <input type="text" placeholder="Enter name to search...">
          <button><i class="fas fa-search"></i></button>
        </div>
        <div class="users-list">
    
        </div>
      </section>
  </div>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright 2022
      </div>
      <div class="credits">
        Created by <a href="">AGHBAL_Othmane</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="javascript/bootstrap.bundle.min.js"></script>


  <!-- Template Main JS File -->
  <script src="javascript/main.js"></script>
  <script src="javascript/users.js"></script>

</body>

</html>