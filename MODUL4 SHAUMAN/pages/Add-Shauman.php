<?php 
    session_start();
    if(!isset($_SESSION["login"])){
        header("location: index.php");
        exit;
    }
    require "../config/insert.php";
    if ( isset($_POST["submitselesai"]) ) {
        if ( adding($_POST) > 0 ) {
            echo "
                <script>
                    alert('Data added');
                    document.location.href = './ListCar-Shauman.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data not added');
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
    <title>Add</title>
</head>
<body>

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
    </div>
</nav>

    <form style="padding : 100px 10%" action="" method ="POST" enctype="multipart/form-data">
        <h3>Tambah Mobil</h3>
        <p style="opacity:80%;">Tambah Mobil Baru Anda Ke List Show Room</p>

        <div class="mb-3">
            <label for="name" class="form-label">Nama Mobil</label>
            <input type="text" class="form-control" id="car" name="car" placeholder="Nama Mobil">
        </div>

        <div class="mb-3">
            <label for="pemilik" class="form-label">Nama Pemilik</label>
            <input type="text" class="form-control" id="pemilik" name="pemilik" placeholder="Nama - NIM">
        </div>

        <div class="mb-3">
            <label for="merk" class="form-label">Merk</label>
            <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk">
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Beli</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name = "deskripsi" rows="3" placeholder="Isi Deskripsi"></textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="image">Foto</label><br>
            <input type="file" class="form-control-file" id="image" name = "fotomobil">
        </div>
        <br>
        <label for="statusbayar">Status Pembayaran</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="statusbayar" id="Lunas" value="Lunas">
            <label class="form-check-label" for="Lunas">Lunas</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="statusbayar" id="BelumLunas" value="BelumLunas">
            <label class="form-check-label" for="BelumLunas">Belum Lunas</label>
        </div>

        <div class="mb-3">
            <div>
                <br><button class="btn btn-primary" type="submit" name="submitselesai">Selesai</button>
            </div>
        </div>
    </form>
</body>
</html>