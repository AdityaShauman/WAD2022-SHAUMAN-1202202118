<?php 
  require "../config/edit.php";

    $id = $_GET["id"];
    $mobil = querydata("SELECT * FROM modul3 WHERE id_mobil=$id")[0];

    if ( isset($_POST["save"]) ) {
        if ( editing($_POST) > 0 ) {
            echo "
                <script>
                    alert('Data changed');
                    document.location.href = './ListCar-Shauman.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data not changed');
                    document.location.href = './ListCar-Shauman.php';
                </script>
            ";
        }
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/style/index.css">
    <title>Document</title>
</head>
<body>

<?php include "Navbar.php" ?>

    <div class="container text-center">
    <div class="row mt-5">
        <h1><?= $mobil["nama_mobil"] ?></h1>
        <p>Detail mobil <?= $mobil["nama_mobil"] ?></p>
      </div>
      <div class="row">
        <div class="col">
        <br><br><br><br><img src="../asset/images/<?= $mobil["foto_mobil"] ?>" alt="">
        </div>

        <div class="col">
        <form style="padding : 100px 10%" method="post" action="" enctype="multipart/form-data">
        <h3>Tambah Mobil</h3>
        <p style="opacity:80%;">Tambah Mobil Baru Anda Ke List Show Room</p>

        <input type="hidden" name="id_mobil" value="<?=$mobil['id_mobil'] ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Nama Mobil</label>
            <input type="text" class="form-control" id="car" name="car" value="<?=$mobil['nama_mobil'] ?>">
        </div>

        <div class="mb-3">
            <label for="owner" class="form-label">Nama Pemilik</label>
            <input type="text" class="form-control" id="owner" name="owner" value="<?=$mobil['pemilik_mobil'] ?>">
        </div>

        <div class="mb-3">
            <label for="merk" class="form-label">Merk</label>
            <input type="text" class="form-control" id="merk" name="merk" value="<?=$mobil['merk_mobil'] ?>">
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Tanggal Beli</label>
            <input type="date" class="form-control" id="date" name="date" value="<?=$mobil['tanggal_beli'] ?>">
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="description" rows="3" ><?= $mobil['deskripsi'] ?></textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="image">Foto</label><br>
            <input type="file" class="form-control-file" id="image" name="fotofile">
        </div>
        <br>
        <label for="statusbayar">Status Pembayaran</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="statusbayar" id="Lunas" value="Lunas" <?= $mobil['status_pembayaran'] == 'Lunas'? 'checked':' '?>>
            <label class="form-check-label" for="Lunas">Lunas</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="statusbayar" id="BelumLunas" value="BelumLunas" <?= $mobil['status_pembayaran'] == 'Belum Lunas'? 'checked':' '?>>
            <label class="form-check-label" for="BelumLunas">Belum Lunas</label>
        </div>

        <div class="mb-3">
            <div>
                <br><button class="btn btn-primary" type="submit" name="save">Selesai</button>
            </div>
        </div>
    </form>
</body>
</html>