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

<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container-fluid container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../pages/Home-Shauman.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/ListCar-Shauman.php">MyCar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container text-center">
    <div class="row mt-5">
        <h1></h1>
        <p>Detail mobil</p>
      </div>

  <div class="row">
    <div class="col">
    <br><br><br><br><img src="" alt="">
    </div>

    <div class="col">
    <form style="padding : 100px 10%">
    <h3>Tambah Mobil</h3>
    <p style="opacity:80%;">Tambah Mobil Baru Anda Ke List Show Room</p>

    <div class="mb-3">
        <label for="name" class="form-label">Nama Mobil</label>
        <input type="text" class="form-control" id="car" name="car" placeholder="" disabled>
    </div>

    <div class="mb-3">
        <label for="owner" class="form-label">Nama Pemilik</label>
        <input type="text" class="form-control" id="owner" name="owner" placeholder="" disabled>
    </div>

    <div class="mb-3">
        <label for="merk" class="form-label">Merk</label>
        <input type="text" class="form-control" id="merk" name="merk" placeholder="" disabled>
    </div>

    <div class="mb-3">
        <label for="date" class="form-label">Tanggal Beli</label>
        <input type="date" class="form-control" id="date" name="date" placeholder="" disabled>
    </div>

    <div class="form-group">
        <label for="description">Deskripsi</label>
        <textarea class="form-control" id="description" rows="3" placeholder="" disabled></textarea>
    </div>
    <br>
    <div class="form-group">
        <label for="image">Foto</label><br>
        <input type="file" class="form-control-file" id="image" disabled>
    </div>
    <br>
    <label for="statusbayar">Status Pembayaran</label><br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="statusbayar" id="Lunas" value="Lunas" disabled>
        <label class="form-check-label" for="Lunas">Lunas</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="statusbayar" id="BelumLunas" value="BelumLunas" disabled>
        <label class="form-check-label" for="BelumLunas">Belum Lunas</label>
    </div>

    <div class="mb-3">
        <div>
            <br><a href="./Edit-Shauman.php?id=" class="btn btn-primary ">Edit</a>
        </div>
    </div>
</form>
</body>
</html>