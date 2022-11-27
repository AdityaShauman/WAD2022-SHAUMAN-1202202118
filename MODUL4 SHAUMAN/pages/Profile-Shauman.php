<?php
  session_start();
  require "../config/connector.php";
  if ( !isset($_SESSION["login"]) ) {
      header("Location: ../Login-Shauman.php");
      exit;
  }

  require('../config/edit.php');
  $emailuser = $_SESSION["email"];
  $user = mysqli_query($connect_user, "SELECT * FROM users WHERE email = '$emailuser'");
  $display = mysqli_fetch_assoc($user);

  if (isset($_POST["update"])) {
        if (ubahUser($_POST) > 0) {
            echo "
                    <script>
                        alert('Profil berhasil diubah');
                        document.location.href = './Home-Shauman.php';
                    </script>
                ";
        } else {
            echo "
                    <script>
                        alert('Profil tidak berhasil diubah');
                        document.location.href = './Home-Shauman.php';
                    </script>
                ";
        }
    };
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>
  <main class="container mx-auto test">
    <div class="row mt-5">
      <h1 class="text-center">Profile</h1>
    </div>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $display["email"] ?>">
        <div class="mb-3">
            <label for="emailuser" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailuser" name="emailuser" aria-describedby="emailHelp" value="<?= $display["email"] ?>" disabled>
        </div>
        <div class="mb-3">
            <label for="namauser" class="form-label">Nama</label>
            <input type="text" class="form-control" id="namauser" name="namauser" value="<?= $display["nama"] ?>">
        </div>
        <div class="mb-3">
            <label for="nomorhp" class="form-label">Nomor Handphone</label>
            <input type="text" class="form-control" id="nomorhp" name="nomorhp" value="<?= $display["no_hp"] ?>">
        </div>
        <hr class="">
        <div class="mb-3">
            <label for="password" class="form-label">Kata Sandi</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi">
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Konfirmasi Kata Sandi</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Konfirmasi Kata Sandi">
        </div>

        <button type="submit" class="btn btn-primary" name="update" disabled>Update</button>
        <a class="btn btn-danger" href="./Home-Shauman.php">Back</a>
    </form>

    <div class="row mt-5">
          <div class="col-2">
            <img src="../asset/images/logoead.png" alt="" width="100" height="30">
          </div>
          <div class="col-10">
            <p class="">Muhammad Aditya Shauman - 1202202118</p>
          </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>