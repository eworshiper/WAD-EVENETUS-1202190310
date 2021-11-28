<?php
    include('method/connect.php');
    $query = "SELECT * FROM bookings";
    $select = mysqli_query($koneksi, $query);
?>

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
                <a class="navbar-brand" href="index.php">EAD Travel</a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="login.php">Login</a>
                        <a class="nav-link" href="register.php">Register</a>
                    </div>
                </div>
            </div>
        </nav>

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
    </body>
</html>