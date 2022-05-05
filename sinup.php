<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location:chatAcceuil.php");
  }
?>

<style>
  body{
    display:flex;
    align-items:center;
    overflow:hidden;
  }
  body img{
    position:absolute;
    top:5px;
  }
  .wrapper{
    margin-top:100px;
  }
  @media screen and (max-width:600px) {
    body img{
      width:15em; 
      position:absolute;
      top:5px;
    }
    body{
      overflow:scroll;
    }
  }
  @media (min-width: 600px) {
    body{
      overflow:hidden;
    }
  }
</style>
<?php include_once "header.php"; ?>

<body class="bg-light">
<img src="imagesProjet/logo_login_sinup.svg" alt="" width="300em" >
  <div class="wrapper bg-light">
    <section class="form signup">
      <header>Inscription</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input my-0">
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input my-0">
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <input type="password" name="password" placeholder="Enter new password" required>
            <i class="fas fa-eye"></i>
        </div>
        <div class="name-details">
          <div class="field input my-0">
            <input type="text" name="entreprise" placeholder="Entreprise name" required>
          </div>
          <div class="field input my-0">
            <input type="text" name="work" placeholder="Your work" required>
          </div>
        </div>
        <div class="field image my-0"><label for="image">Image de Profil*</label><input type="file"  name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required class="form-control" ></div>
        <div class="field button my-0">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
      <div class="link"><= <a href="index.php"> page d'acceuil</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
