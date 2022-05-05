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
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/boxicons.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="css/style1.css" rel="stylesheet">
  <style>
    #citation{
      display:flex;
      align-items:center;
      padding-left:5px;
      min-height: 150px;
      color:white;
      border-radius:5px;
      background-color: #001938;
      background-image: url("https://www.transparenttextures.com/patterns/clean-gray-paper.png");
    }
    #citation div p {
      font-size: 1.2rem;
      color:yellow;
      padding: 0.5rem;
      font-weight: bold;
      letter-spacing: 0.1rem;
      text-align: center;
      overflow: hidden;
    }
    #citation div p span.typed-text {
        font-weight: normal;
        color: white;
    }
    #citation div{
      width:100%
      text-align:left;
    }
    #citation div p span.cursor {
        display: inline-block;
        background-color: #ccc;
        margin-left: 0.1rem;
        width: 3px;
        animation: blink 1s infinite;
    }
    #citation div p span.cursor.typing {
        animation: none;
    }
    @keyframes blink {
        0%  { background-color: #ccc; }
        49% { background-color: #ccc; }
        50% { background-color: transparent; }
        99% { background-color: transparent; }
        100%  { background-color: #ccc; }
    }
  </style>


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
          <li><a href="Acceuil.php" class="nav-link scrollto active"><i class="fa-solid fa-house-chimney"></i> <span>Acceuil</span></a></li>
          <li><a href="chatAcceuil.php" class="nav-link scrollto "><i class="fa-solid fa-comment"></i> <span>Chat</span></a></li>
          <li><a href="Profile.php" class="nav-link scrollto"><i class="fa-solid fa-id-badge"></i> <span>Profile</span></a></li>
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
    <section class="">
    <main class="container">

    <div class="col-md-12  text-center mb-2 " id="citation">
        <div>
             <p>Citation : <span class="typed-text"></span><span class="cursor">&nbsp;</span></p>
        </div>       
    </div>

    <div class="p-2 p-md-2 mb-1 text-white rounded bg-dark text-center d-flex justify-content-center">
    <div class="col-md-4 text-center ">
        <h5 class="display-8 fst-italic">Utilisation d'API news</h5>
      </div>
    </div>

  <div class="row g-6">
    <div class="col-md-9">
    <div class="col-md-12" id="news">
      
    </div>


      <article class="blog-post">
        <h2 class="blog-post-title">Another blog post</h2>
        <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>

        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <blockquote>
          <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
        </blockquote>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <h3>Example table</h3>
        <p>And don't forget about tables in these posts:</p>
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Upvotes</th>
              <th>Downvotes</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Alice</td>
              <td>10</td>
              <td>11</td>
            </tr>
            <tr>
              <td>Bob</td>
              <td>4</td>
              <td>3</td>
            </tr>
            <tr>
              <td>Charlie</td>
              <td>7</td>
              <td>9</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td>Totals</td>
              <td>21</td>
              <td>23</td>
            </tr>
          </tfoot>
        </table>

        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
      </article>

    </div>

    <div class="col-md-3">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>
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
  <!-- <script src="javascript/main.js"></script> -->
  <script src="javascript/news.js"></script>
  <script src="javascript/citation.js"></script>
  <script src="javascript/main.js"></script>

</body>



</html>