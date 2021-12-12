<?php 
$name = $_POST["name"];
$check_in = date('d-m-Y h:i:sa');
$check_out = date('d-m-Y h:i:sa');
$buildingtype = $_POST["buildingtype"];
$phone = $_POST["phonenumber"];
$duration = $_POST["duration"];
$addservice = array($_POST["service"]);
$totalprice = 0;
$totalprice += isset($_POST["addservice"]);
switch ($_POST["buildingtype"]) {
    case "Nusantara Hall":
        $totalprice += ($duration*2000);
        break;
    case "Garuda Hall":
        $totalprice += ($duration*1000);
        break;
    case "Gedung Serba Guna":
        $totalprice += ($duration*500);
        break;
}

if (!empty($addservice)) {
    foreach ($addservice as $service) {
        if ($service === "Catering") {
            $totalprice += 700;
        } else if ($service === "Decoration") {
            $totalprice += 450;
        } else if ($service === "Sound System") {
            $totalprice += 250;
        }
    }
}
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>ESD Venue</title>
    </head>
    <body style="zoom: 80%;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="booking.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-3">
            <p class="fs-2 text-center mb-0">Thank you <?= $_POST["name"]?> for Reserving</p>
            <p class="fs-4 text-center">Please double check your reservation details</p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Booking Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Check-in</th>
                        <th scope="col">Check-out</th>
                        <th scope="col">Type</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Service</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= rand()?></td>
                        <td><?= $name?></td>
                        <td><?= $check_in?></td>
                        <td><?= $check_out?></td>
                        <td><?= $buildingtype?></td>
                        <td><?= $phone?></td>
                        <td><?php
                                foreach ($addservice as $service){
                                    echo $service."\n";}
                            ?>
                        </td>
                        <td><?= $totalprice?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <footer class="footer fixed-bottom">
            <p class="text-center">Created by: evenetus_1202190310</p>
        </footer>
    </body>
</html>