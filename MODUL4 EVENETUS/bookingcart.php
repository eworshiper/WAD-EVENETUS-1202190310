<?php
    session_start();
    include('method/connect.php');
    $query = "SELECT * FROM bookings";
    $select = mysqli_query($koneksi, $query);
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
        <div class="container mt-3 p-5">
            <table class="table table-striped">
                <thead>
                    <th>No</th>
                    <th>Nama Tempat</th>
                    <th>Lokasi</th>
                    <th>Tanggal Perjalanan</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php while ($selects = mysqli_fetch_assoc($select)) { ?>
                        <tr>
                            <td><?= $selects['id'] ?></td>
                            <td><?= $selects['nama_tempat'] ?></td>
                            <td><?= $selects['lokasi'] ?></td>
                            <td><?= $selects['tanggal'] ?></td>
                            <td><?= $selects['harga'] ?></td>
                            <td>
                                <a name="detail" id="delete" class="btn btn-danger" href="method/delete.php?id=<?= $selects['id'] ?>" role="button">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <?php include('method/footer.php'); ?>
    </body>
</html>