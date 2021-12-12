<?php
session_start();
include('method/connect.php');
if(!$_SESSION['id']){
    header("Location: login.php");
    exit();
}
if (isset($_COOKIE['navbar-color'])) {
    $nav = $_COOKIE['navbar-color'];
}
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>EAD Travel</title>
    </head>
    <body>
    <?php
        if($_SESSION['login'] == true) { ?>
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: <?= $nav;?>;">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.php">EAD Travel</a>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <div class="nav-item">
                                <a href="bookingcart.php" class="nav-link"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            </div>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo $_SESSION['nama'];?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                    <li><a class="dropdown-item" href="method/logout.php">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        <?php } else { ?>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: <?= $nav;?>;">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php">EAD Travel</a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="login.php">Login</a>
                        <a class="nav-link" href="register.php">Register</a>
                    </div>
                </div>
            </div>
        </nav>
        <?php } ?>
        <div class="container mt-4 pb-5 px-5">
            <div class="container p-5" style="background-color:lightgreen">
                <p class="text-center lead fw-bold fs-1">EAD TRAVEL</p>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4 mt-1">
                <div class="col">
                    <div class="card h-100">
                        <img src="https://www.papuaexplorers.com/wp-content/uploads/2016/07/Wayag3.jpg" class="card-img-top" alt="rajaampat">
                        <div class="card-body">
                            <h5 class="card-title">Raja Ampat, Papua</h5>
                            <p class="card-text">
                                Kepulauan Raja Ampat adalah kepulauan Indonesia di ujung barat laut Semenanjung Kepala Burung di Papua Barat. 
                                Terdiri dari ratusan pulau yang tertutup hutan, Raja Ampat dikenal dengan pantai dan terumbu karangnya yang kaya dengan kehidupan laut.
                                Lukisan batu dan gua kuno berada di Pulau Misool, sedangkan cendrawasih merah hidup di Pulau Waigeo. 
                                Batantara dan Salawati adalah pulau pulau utama lainnya di nusantara.  
                            </p>
                            <hr class="border border-2 border-secondary rounded">
                            <p class="fw-bold">Rp. 7.000.000</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-grid">
                                <form action="method/book.php" method="POST">                                     
                                    <a href="#Modal1" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal1" type="button" name="raja_ampat">Pesan Tiket</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://gos3.ibcdn.com/indonesia-162129537425o.jpeg" class="card-img-top" alt="bromo">
                        <div class="card-body">
                            <h5 class="card-title">Gunung Bromo, Malang</h5>
                            <p class="card-text">
                            Gunung Bromo merupakan sebuah gunung berapi somma aktif dan bagian dari pegunungan Tengger, di Jawa Timur, Indonesia. 
                            Pada 2.329 meter itu bukan puncak tertinggi dari massif, tetapi juga yang paling terkenal. 
                            Kawasan ini merupakan salah satu destinasi wisata yang paling banyak dikunjungi di Jawa Timur, dan gunung berapi ini termasuk dalam Taman Nasional Bromo Tengger Semeru.
                            </p>
                            <hr class="border border-2 border-secondary rounded">
                            <p class="fw-bold">Rp. 2.000.000</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-grid">
                                <form action="method/book.php" method="POST"> 
                                    <a href="#Modal2" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal2" type="button" name="bromo">Pesan Tiket</a>
                                </form>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://www.pegipegi.com/travel/wp-content/uploads/2017/10/shutterstock_130548068.jpg" class="card-img-top" alt="tanahlot">
                        <div class="card-body">
                            <h5 class="card-title">Tanah Lot, Bali</h5>
                            <p class="card-text">
                            Tanah Lot adalah formasi batuan di lepas pantai pulau Bali, Indonesia. 
                            Ini adalah rumah bagi kuil ziarah Hindu kuno Pura Tanah Lot, ikon wisata dan budaya yang populer untuk fotografi. 
                            Di sini ada dua pura yang terletak di atas batu besar. Satu terletak di atas bongkahan batu dan satunya terletak di atas tebing mirip dengan Pura Uluwatu. 
                            Pura Tanah Lot ini merupakan bagian dari pura Dang Kahyangan.
                            </p>
                            <hr class="border border-2 border-secondary rounded">
                            <p class="fw-bold">Rp. 5.000.000</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-grid">
                                <form action="method/book.php" method="POST"> 
                                    <a href="#Modal3" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal3" type="button" name="tanah_lot">Pesan Tiket</a>
                                </form>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 1-->
        <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="method/book.php" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="namatempat" value="Raja Ampat">
                        <input type="hidden" name="lokasi" value="Papua">
                        <input type="hidden" name="harga" value="7000000">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="dd-mm-yyyy">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" name="tambah">Tambahkan</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="method/book.php" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="namatempat" value="Bromo">
                        <input type="hidden" name="lokasi" value="Malang">
                        <input type="hidden" name="harga" value="2000000">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="dd-mm-yyyy">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" name="tambah">Tambahkan</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="method/book.php" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="namatempat" value="Tanah Lot">
                        <input type="hidden" name="lokasi" value="Bali">
                        <input type="hidden" name="harga" value="5000000">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="dd-mm-yyyy">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" name="tambah">Tambahkan</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <?php include('method/footer2.php'); ?>
    </body>
</html>