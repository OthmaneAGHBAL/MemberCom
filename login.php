<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: Acceuil.php");
  }
?>

<?php include_once "header.php"; ?>
<style>
  body{
    display:flex;
    align-items:center;
    overflow:hidden;
  }
  body img{
    position:absolute;
    top:10px;
  }@media (max-width:700px) {
    body img{
      width:15em; 
      position:absolute;
      top:5px;
    }
  }

</style>
<body class="bg-light">
<img src="imagesProjet/logo_login_sinup.svg" alt="" width="300em" >
  <div class="wrapper bg-light">
    <section class="form login">
      <header>Connexion</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input" >
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye" ></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="sinup.php">Signup now</a></div>
      <div class="link"><= <a href="index.php"> page d'acceuil</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
