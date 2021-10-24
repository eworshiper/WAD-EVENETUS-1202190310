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
            <div class="container">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="booking.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-3">
            <h5 class="b text-center">WELCOME TO ESD VENUE RESERVATION</h5>
            <p class="text-center bg-dark text-light p-2 mt-3">Find your best deal for your event, here!</p>

            <div class="row row-cols-md-3 g-4 pt-2 pb-5 px-3">
                <div class="col">
                    <div class="card">
                        <img src="http://allthevenues.com/images/main/1486672385_WaldorfGrandBallroom.jpg" class="card-img-top" alt="nusantarahall" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Nusantara Hall</h5>
                            <h6 class="card-subtitle text-muted lh-base">
                                $2000 / Hour
                                <br>
                                5000 Capacity
                            </h6>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item fw-bold text-success">Free Parking</li>
                            <li class="list-group-item fw-bold text-success">Full AC</li>
                            <li class="list-group-item fw-bold text-success">Cleaning Service</li>
                            <li class="list-group-item fw-bold text-success">Covid-19 Health Protocol</li>
                            <li class="list-group-item" style="background-color: #f1f1f1;">
                                <form action="booking.php" method="POST">
                                    <button type="submit" class="btn btn-primary" id="nh" name="nh">Book now</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="https://www.hkcec.com/sites/default/files/imce/Convention%20Hall_b.jpg" class="card-img-top" alt="garudahall" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Garuda Hall</h5>
                            <h6 class="card-subtitle text-muted lh-base">
                                $1000 / Hour
                                <br>
                                2000 Capacity
                            </h6>
                        </div>
                        <ul class="list-group list-group-flush text-center">                               
                            <li class="list-group-item fw-bold text-success">Free Parking</li>
                            <li class="list-group-item fw-bold text-success">Full AC</li>
                            <li class="list-group-item fw-bold text-danger">No Cleaning Service</li>
                            <li class="list-group-item fw-bold text-success">Covid-19 Health Protocol</li>
                            <li class="list-group-item" style="background-color: #f1f1f1;">
                                <form action="booking.php" method="POST">
                                    <button type="submit" class="btn btn-primary" id="gh" name="gh">Book now</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="https://id.yamaha.com/id/files/jpg_eis_hall_main_1200x600_0892d7db9d88873041cda38e6845ecfc.jpg" class="card-img-top" alt="gedungserbaguna" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Gedung Serba Guna</h5>
                            <h6 class="card-subtitle text-muted lh-base">
                                $500 / Hour
                                <br>
                                500 Capacity
                            </h6>
                        </div>
                        <ul class="list-group list-group-flush text-center">   
                            <li class="list-group-item fw-bold text-danger">No Free Parking</li>
                            <li class="list-group-item fw-bold text-danger">No Full AC</li>
                            <li class="list-group-item fw-bold text-danger">No Cleaning Service</li>
                            <li class="list-group-item fw-bold text-success">Covid-19 Health Protocol</li>
                            <li class="list-group-item" style="background-color: #f1f1f1;">
                                <form action="booking.php" method="POST">
                                    <button type="submit" class="btn btn-primary" id="gsb" name="gsb" >Book now</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer fixed-bottom">
            <p class="text-center">Created by: evenetus_1202190310</p>
        </footer>
    </body>
</html>