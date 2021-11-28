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
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="login.php">Login</a>
                        <a class="nav-link active" aria-current="page" href="#">Register</a>
                    </div>
                </div>
            </div>
        </nav>
        
        <div class="container p-5">
            <div class="card mx-auto" style="width: 24rem;">
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">Register</h5>
                    <hr class="border border-2 rounded">
                    <form action="method/registermethod.php" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" value="">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Alamat Email" value="">
                        </div>
                        <div class="mb-3">
                            <label for="nomor" class="form-label">Nomor Handphone</label>
                            <input type="text" class="form-control" id="nomor" name="nomor" placeholder="Masukkan Nomor Handphone" value="">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi Anda" value="">
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">Konfirmasi Kata Sandi</label>
                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Konfirmasi Kata Sandi Anda" value="">
                        </div>
                        <div class="d-grid col-6 mx-auto mb-3">
                            <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
                        </div>
                    </form>
                    <p class="text-center">Anda sudah punya akun? <a href="login.php">Login</a></p>
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