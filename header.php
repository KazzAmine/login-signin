<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">    
    <link rel="stylesheet" href="./Style/index.css">
    <title>buyIT</title>
    <link rel = "icon" href="./images/logo.png" type = "image/x-icon">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="./images/logo.png" width="60px" height="40px" alt=""> <span id="brandName"> buy<i style="color:#eeeeee;">IT</i></span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 offset-md-6">
        <li class="nav-item">
          <a class="nav-link active menu" aria-current="page" id="home" href="index.php"> <i class="fas fa-house"></i>Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle menu " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-bars"></i> Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" id="cat1" href="#">cat1</a></li>
            <li><a class="dropdown-item" id="cat2" href="#"> cat2</a></li>
            <li><a class="dropdown-item" id="cat3" href="#">cat3</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link menu" id="Shoppingkart" href="#"><i class="fas fa-cart-shopping"></i> Shopping kart</a>
        </li>

       <?php 
       require_once "./Includes/config.inc.php";
       if(!isset( $_SESSION['id'])){
       ?>
        <li class="nav-item" id="user" class="offset-md-6">
          <a class="nav-link menu" id="Login" href="./login.php"><i class="fas fa-arrow-right-to-bracket"></i>Login/Signup</a>
        </li>
    <?php 
       }else{
    ?> 
        <li class="nav-item" id="userinfo" class="offset-md-6">
          <a class="nav-link menu" id="account" href="./login.php"><i class="fas fa-user"></i> <?php 
           echo $_SESSION['First_name']." ".$_SESSION['Last_name'];
          ?></a>
        </li>
        <li class="nav-item" id="logout" class="offset-md-6">
          <a class="nav-link menu" id="logOut" href="#"><i class="fas fa-arrow-right-from-bracket"></i></a>
        </li>
      <?php }?>
      </ul>
    </div>
  </div>
</nav>
