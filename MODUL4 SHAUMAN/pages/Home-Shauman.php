<?php
if(!isset($_SESSION)){
    session_start();
}
require "../config/connector.php";
$query = "SELECT * FROM showroom_shauman_table";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/style/index.css">
    
    <title>Home</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <?php if(isset($_SESSION["login"])) { ?>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container-fluid container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active <?php if ($title == "Home") echo "active" ?>" aria-current="page" href="../pages/Home-Shauman.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($title == "MyCar") echo "active" ?>" href="../pages/ListCar-Shauman.php">MyCar</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="Add-Shauman.php"><button class="btn btn-light px-3 py-1"> Add Car</button></a>
            </li>
            <div class="dropdown">
                <button class="btn btn-info text-light bg-dark dropdown-toggle px-3 py-1" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION["nama"]; ?>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="Profile-Shauman.php">Profile</a></li>
                    <li><a class="dropdown-item" href="../config/logout.php">Log out</a></li>
                </ul>
            </div>
        </ul>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    </div>
  </nav>
  <?php } else {?>
    <nav class="navbar navbar-expand-lg shadow bg-primary text-white py-3">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  ">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="">Home</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="Login-Shauman.php">Login</a>
                </li>
            </ul>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
  <?php };?>

    <?php if(isset($_SESSION["message"])) : ?>
    <div class="alert alert-success alert-dismissible fade show fade in" role="alert">
        <?= $_SESSION["message"]; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
    <?php unset($_SESSION["message"]); endif; ?>

    <div class="container text-center" style="padding : 100px 10%">
      <div class="row">
        <div class="col" style="text-align:left">
        <h3 id="aboutus" style=""><br><br><b>Selamat Datang Di <br> Show Room [Shauman]</b></h3>
          <p style="opacity:80%;">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at finibus leo, vel rutrum dolor.
          </p>
          <li class="list-group-item"><a href="./ListCar-Shauman.php" class="btn btn-primary">MyCar</a></li>

      <footer>

        <div class="text-center p-3">
          <img width= "70px" height= "20px" src="../asset/images/logoead.png" >
          <a style="text-decoration: none">Shauman_1202202118</a>
        </div>
      </footer>
    </div>
        
        <div class="col">
            <img width="540" height="360" src = "https://media.ed.edmunds-media.com/ford/mustang/2022/oem/2022_ford_mustang_coupe_ecoboost-premium_fq_oem_1_1280.jpg">
        </div>
      </div>
    </div>

</body>
</html>