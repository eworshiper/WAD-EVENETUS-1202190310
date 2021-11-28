<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>EAD Travel</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#">EAD Travel</a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="login.php">Login</a>
                        <a class="nav-link" href="register.php">Register</a>
                    </div>
                </div>
            </div>
        </nav>
        
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
                                    <button class="btn btn-primary" type="submit" name="raja_ampat">Pesan Tiket</button>
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
                                    <button class="btn btn-primary" type="submit" name="bromo">Pesan Tiket</button>
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
                                    <button class="btn btn-primary" type="submit" name="tanah_lot">Pesan Tiket</button>
                                </form>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer mt-auto py-3 bg-dark">
            <div class="container text-center">
                <p class="text-light">&copy2021 Copyrigt : <a href="">Evenetus_1202190310</a></p>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>