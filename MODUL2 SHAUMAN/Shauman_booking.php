<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="Shauman_style.css"/>
    <title>Booking</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <div class="menu">
      <ul>
        <li><a href ="Shauman_index.php?page=home">Home</a></li>
        <li><a href ="Shauman_mybooking.php?page=mybooking">Booking</a></li>
      </ul>
    </div>
    <br>
    <h3 align="center">Rent your car now!</h3>
    <br>

    <div class="container">
    <div class="row">
        <div class="col-sm" align="center">
        <img src="https://www.toyota.astra.co.id/sites/default/files/2021-08/1-white.png" width = 600px/>
        </div>

        <div class="col-sm">
        <form action="Shauman_mybooking.php" method ="GET">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Lengkapmu">
            </div>

            <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date">Date</label>
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
      </div>

            <div class="mb-3">
                <label for="number" class="form-label">No Handphone</label>
                <input type="tel" class="form-control" id="number" name="number" placeholder="Masukkan No. Handphonemu">
            </div>

            <div class="mb-3">
                <label for="duration" class="form-label">Duration (Days)</label><br>
                <input type="number" class="form-control" id="duration" name="duration" min="1">
            </div>

            <div class="mb-3">
                <label for="mobil" class="form-label">Car Type</label>
                <select name="mobil" id="mobil" class="form-select">
                    <option selected disabled>-</option>
                    <option value="Toyota Rush">Toyota Rush</option>
                    <option value="Toyota Agya">Toyota Agya</option>
                    <option value="Toyota Avanza">Toyota Avanza</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="service">Add Service(s)</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Health Protocol" id="flexCheckDefault" name="services[]">
                    <label class="form-check-label">
                        Health Protocol / Rp25.000
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Driver" id="flexCheckChecked" name="services[]">
                    <label class="form-check-label">
                        Driver / Rp100.000
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Fuel Filled" id="flexCheckChecked" name="services[]">
                    <label class="form-check-label">
                        Fuel Filled / Rp250.000
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <div>
                    <button class="btn btn-success" type="submit">Book</button>
                </div>
            </div>
        </form>
        </div>
    </div>
    </div>

    <br>
    <section class="footer" style="background-color: rgba(0, 0, 0, 0.05);">
      Created by
      <a>Muhammad Aditya Shauman_1202202118</a>

</body>
</html>