<?php 
  require('../config/connector.php');
  $title = "MyCar";
  $mobil = query("SELECT * FROM modul3");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/style/index.css">
    <title>List Car</title>
</head>
<body>

<?php include "Navbar.php" ?>

    <div class="container text-left">
        <h3>My Show Room</h3>
        <p style="opacity:80%;">List Show Room Shauman - 1202202118</p>

        <?php if( count($mobil) == 0 ) : ?>
          <?php header("Location: ./Add-Shauman.php") ?>
        <?php else : ?>
        <div class="row">
        <?php foreach( $mobil as $mobi ) : ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../assets/images/<?= $mobi['foto_mobil'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $mobi["nama_mobil"] ?></h5>
                        <p class="card-text"><?= substr($mobi['deskripsi'], 0, 100) . ' ...' ?></p>
                        <a href="./Detail-Shauman.php?id=<?= $mobi['id_mobil'] ?>" class="btn btn-primary ">Detail</a>
                        <a href="../config/delete.php?id=<?= $mobi['id_mobil'] ?>" class="btn btn-danger mx-4">Delete</a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
        <p>Jumlah Mobil: <?= count($mobil) ?></p>
      <?php endif; ?>
    </div>
</body>
</html>