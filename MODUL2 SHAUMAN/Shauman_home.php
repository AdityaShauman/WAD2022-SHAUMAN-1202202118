  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="Shauman_style.css"/>
      <title>Home</title>
  </head>
  <body>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

      <section class = "cardcomp" >
        <br>
        <h2 align="center">WELCOME TO EAD RENT</h2>
        <br>
        <p align="center">Find your best deal, here!</p>
        <br>
        <div class="row" >
          <div class="column" >
            <div class="card" style="width: 18rem;">
              <div class="card-header" align="center">
                <img src="https://www.toyota.astra.co.id/sites/default/files/2021-08/1-white.png" width = 200px/>
                <h6 align="left">Toyota Rush</h6>
                <p align="left">Rp200000/day</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">7 Kursi</li>
                <li class="list-group-item">1500 CC</li>
                <li class="list-group-item">Manual</li>
                <li class="list-group-item"><a href="Shauman_booking.php?" class="btn btn-primary">Book Now</a></li>
              </ul>
            </div>
          </div>

          <div class="column">
            <div class="card" style="width: 18rem;">
              <div class="card-header" align="center">
                <img src="https://www.toyota.astra.co.id/sites/default/files/2022-08/1-agya-2022-red.png" width = 200px/>
                <h6 align="left">Toyota Agya</h6>
                <p align="left">Rp100000/day</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">5 Kursi</li>
                <li class="list-group-item">1200 CC</li>
                <li class="list-group-item">Manual</li>
                <li class="list-group-item"><a href="Shauman_booking.php?" class="btn btn-primary">Book Now</a></li>
              </ul>
            </div>
          </div>

          <div class="column">
            <div class="card" style="width: 18rem;">
              <div class="card-header" align="center">
                <img src="https://www.toyota.astra.co.id/sites/default/files/2022-08/1-citrus-mica-metallic.png" width = 200px/>
                <h6 align="left">Toyota Yaris</h6>
                <p align="left">Rp150000/day</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">5 Kursi</li>
                <li class="list-group-item">1200 CC</li>
                <li class="list-group-item">Manual</li>
                <li class="list-group-item"><a href="Shauman_booking.php?" class="btn btn-primary">Book Now</a></li>
                
              </ul>
            </div>
          </div>
        </div>
    </section>

    <?php 
    if(isset($_GET['subpage'])){
      $subpage = $_GET['subpage'];
  
      switch ($subpage) {
        case 'Shauman_booking.php?':
          include "Shauman_booking.php";
          break;			
        default:
          echo "Error!";
          break;
      }
    }
  
    ?>


      <br>
      <section class="footer" style="background-color: rgba(0, 0, 0, 0.05);">
        Created by
        <a>Muhammad Aditya Shauman_1202202118</a>

  </body>
  </html>