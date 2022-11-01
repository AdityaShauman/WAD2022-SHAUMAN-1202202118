    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="Shauman_style.css"/>
        <title>My Booking</title>
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
        <?php
            $nama = isset($_GET['name']) ? $_GET['name'] : '';
            $date = isset($_GET['date']) ? $_GET['date'] : '';
            $duration = isset($_GET['duration']) ? $_GET['duration'] : '';
            $number = isset($_GET['number']) ? $_GET['number'] : '';
            $mobil = isset($_GET['mobil']) ? $_GET['mobil'] : '';
            $servicename = isset($_GET['services']) ? $_GET['services'] : '';
        ?>
        

        

        <div class = "container">
            <h3 class = "text-center">Thank You <?php echo $name ?> for Reserving</h3>
            <p class = "text-center">Please double check your reservation details</p>
            <table class = "table">
                <thead>
                    <tr>
                        <th scope="col">Booking Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Starting Date</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Car Type</th>
                        <th scope="col">Services</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th scope="row"><?php echo rand() ?></th>
                        <td><?php echo $name ?></td>
                        <td><?php echo $date ?></td>
                        <td><?php echo $duration. " days"?></td>
                        <td><?php echo $number ?></td>
                        <td><?php echo $mobil ?></td>
                        <td><?php if (isset($_GET['services'])) {
                            foreach ($servicename as $services){
                            echo "- ".$services."<br />";
                        }
                        } else {
                            echo "-";
                                                } ?></td>
                    </tr>
                </tbody>
            </table>

        </div>

        <br>
        <section class="footer" style="background-color: rgba(0, 0, 0, 0.05);">
        Created by
        <a>Muhammad Aditya Shauman_1202202118</a>

    </body>
    </html>