<?php
include('method/Even_connect.php');
$query = "SELECT * FROM buku_table";
$select = mysqli_query($koneksi, $query);
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
            <a class="navbar-brand" href="Even_Home.php">
                <img src="https://drive.google.com/uc?id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="" width="120">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="Even_tambahbuku.php"><button class="btn btn-primary me-2 justify-content-end" type="button">Tambah Buku</button></a>
        </div>
    </nav>
    <div class="container my-5">
        <div class="justify-content-center mt-5">
            <div class="container bg-body rounded p-3" style="box-shadow: 0px 0px 3px 2px rgba(0,0,0,0.1);">
                <div class="container mt-4">
                    <?php if ($select->num_rows > 0) { ?>
                        <div class="row ">
                            <?php while ($selects = mysqli_fetch_assoc($select)) { ?>
                                <div class="card mx-2" style="width: 18rem;">
                                    <img src="<?=$selects['gambar'];?>" class="card-img-top" alt="Gambar Sampul Buku" style="max-height: 300px">
                                    <div class="card-body">
                                        <h5 class="card-title"><?=$selects["judul_buku"];?></h5>
                                        <p class="card-text"><?=$selects["deskripsi"];?></p>
                                        <a href="Even_detail.php?id=<?=$selects['id_buku']?>" class="btn btn-primary">Tampilkan Lebih Lanjut</a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
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