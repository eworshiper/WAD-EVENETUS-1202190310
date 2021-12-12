<?php
    session_start();
    include('method/connect.php');
    $id=$_SESSION['id'];
    $query = "SELECT * FROM user WHERE id = '$id'";
    $select = mysqli_query($koneksi, $query);
    $selects = mysqli_fetch_array($select);
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
    <body class="d-flex flex-column min-vh-100">
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
        <div class="container bg-body rounded p-3 mt-5" style="box-shadow: 0px 0px 3px 2px rgba(0,0,0,0.1);">
            <p class="lead fs-2 fw-bold text-center mt-3">Profile</p>
            <div class="col px-5">
                <form action="method/update.php" method="POST">
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col">
                            <input type="text" class="form-control-plaintext" id="email" name="email" value="<?= $selects['email'];?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="penulis" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $selects['nama'];?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tahun" class="col-sm-2 col-form-label">Nomor Handphone</label>
                        <div class="col">
                            <input type="text" class="form-control" id="nomor" name="nomor" value="<?= $selects['no_hp'];?>">
                        </div>
                    </div>
                    <hr class="border border-2 border-secondary rounded">
                    <div class="row mb-3">
                        <label for="tahun" class="col-sm-2 col-form-label">Kata Sandi</label>
                        <div class="col">
                            <input type="password" class="form-control" id="katasandi" name="katasandi" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tahun" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
                        <div class="col">
                            <input type="password" class="form-control" id="katasandi2" name="katasandi2" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tahun" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
                        <div class="col">
                            <select class="form-select" name="navbar">
                                <option value="#6495ED">Cornflower Blue</option>
                                <option value="#8B0000">Dark Red</option>
                                <option value="#008B8B">Dark Cyan</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button class="btn btn-primary me-md-2" type="submit" name="update">Simpan</button>
                        <button class="btn btn-warning" type="submit" name="cancel">Cancel</button>
                    </div>
                </form>
            </div>
        </div>

        <?php include('method/footer.php'); ?>
    </body>
</html>