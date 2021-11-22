<?php
include('method/Even_connect.php');
$query = "SELECT * FROM buku_table";
$select = mysqli_query($konek, $query);
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>EAD Library</title>
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://drive.google.com/uc?id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="" width="120">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="tambahbuku.php"><button class="btn btn-primary me-2 justify-content-end" type="button">Tambah Buku</button></a>
        </div>
    </nav>
    <div class="container my-5">
        <div class="justify-content-center mt-5">
            <div class="container bg-body rounded p-3" style="box-shadow: 0px 0px 3px 2px rgba(0,0,0,0.1);">
                <div class="container mt-4">
                    <?php if ($select->num_rows > 0) { ?>
                        <table class="table table-striped">
                            <thead>
                                <th>Id</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Tahun Terbit</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Tag</th>
                                <th>Bahasa</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php while ($selects = mysqli_fetch_assoc($select)) { ?>
                                    <tr>
                                        <td><?= $selects['id_buku'] ?></td>
                                        <td><?= $selects['judul_buku'] ?></td>
                                        <td><?= $selects['penulis_buku'] ?></td>
                                        <td><?= $selects['tahun_terbit'] ?></td>
                                        <td><?= $selects['deskripsi'] ?></td>
                                        <td><?= $selects['gambar'] ?></td>
                                        <td><?= $selects['tag'] ?></td>
                                        <td><?= $selects['bahasa'] ?></td>
                                        <td>
                                            <a name="detail" id="edit" class="btn btn-primary" role="button">Edit</a>
                                            <a name="detail" id="delete" class="btn btn-danger" href="asset/delete.php?id=<?= $selects['id_buku'] ?>" role="button">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                                <div class="container mt-5">
                                    <h3 class="text-center mt-5">Belum Ada Buku</h3>
                                    <hr class="border border-2 border-primary rounded">
                                    <p class="text-center">Silahkan Tambah Data Buku</p>
                                </div>
                            <?php } ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer mt-auto pt-5">
        <div class="container">
            <div class="text-center mb-3">
                <img src="https://drive.google.com/uc?id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="" width="160">
            </div>
            <p class="fs-3 fw-bold text-center">Perpustakaan EAD</p>
            <p class="text-center">Evenetus_1202190310</p>
        </div>
    </footer>
</body>

</html>