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
            <div class="justify-content-center px-5">
                <p class="text-center bg-dark text-light p-2 mt-3">Reserve your venue now!</p>
                <div class="container bg-body rounded p-3" style="box-shadow: 0px 0px 3px 2px rgba(0,0,0,0.1);">
                    <div class="row p-3 align-items-center">
                        <div class="col-5 text-center">
                            <img src="http://allthevenues.com/images/main/1486672385_WaldorfGrandBallroom.jpg" alt="nusantarahall" style="height: 200px;">
                        </div>

                        <div class="col-7">
                            <form action="mybooking.php" method="POST">
                                <div class="mb-3">
                                    <label for="name" class="form-label mb-0">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="evenetus_1202190310" readyonly>
                                </div>
                                <div class="mb-3">
                                    <label for="eventdate" class="form-label mb-0">Event Date</label>
                                    <input type="date" class="form-control" id="eventdate" name="eventdate">
                                </div>
                                <div class="mb-3">
                                    <label for="starttime" class="form-label mb-0">Start Time</label>
                                    <input type="time" class="form-control" id="starttime" name="starttime" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="duration" class="form-label mb-0">Duration (Hours)</label>
                                    <input type="number" class="form-control" id="duration" name="duration" placeholder="1">
                                </div>
                                <div class="mb-3">
                                    <label for="buildingtype" class="form-label mb-0">Building Type</label>
                                    <select class="form-select" id="buildingtype" name="buildingtype">
                                        <option value="choose">Choose...</option>
                                        <option value="Nusantara Hall">Nusantara Hall</option>
                                        <option value="Garuda Hall">Garuda Hall</option>
                                        <option value="Gedung Serba Guna">Geduang Serba Guna</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="phonenumber" class="form-label mb-0">Phone Number</label>
                                    <input type="number" class="form-control" id="phonenumber" name="phonenumber" placeholder="08xx-xxxx-xxxx">
                                </div>
                                <p class="mb-0">Add Service(s)</p>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Catering" id="catering" name="service">
                                        <label class="form-check-label" for="catering">Catering / $700</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Decoration" id="decoration" name="service">
                                        <label class="form-check-label" for="decoration">Decoration / $450</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Sound System" id="sound" name="service">
                                        <label class="form-check-label" for="sound">Sound System / $250</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer fixed-bottom">
            <p class="text-center">Created by: evenetus_1202190310</p>
        </footer>
    </body>
</html>