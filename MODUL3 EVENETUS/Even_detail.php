<?php
    include('method/Even_connect.php');
    $id = $_GET["id"];
    $query = "SELECT * FROM buku_table WHERE id_buku = '$id'"; 
    $select = mysqli_query($koneksi,$query);
    $selects = mysqli_fetch_assoc($select);

    $judul = $selects ['judul_buku'];
    $penulis = $selects ['penulis_buku'];
    $tahun = $selects ['tahun_terbit'];
    $deskripsi = $selects ['deskripsi'];
    $bahasa = $selects ['bahasa'];
    $tag = $selects ['tag'] ;
    $gambar = $selects ['gambar'];
    $tagArray = explode(',',$selects['tag']);
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
                    <p class="lead fs-2 fw-bold text-center mt-3">Tambah Data Buku</p>
                    <div class="col px-5">
                        <div class="col text-center">
                            <img src="images\<?=$gambar;?>" class="img-thumbnail" width="250px" >
                        </div>
                        <hr class="border border-2 border-primary rounded">
                        <div class="mb-4">
                            <p class="lead fw-bold">Judul Buku :</p>
                            <p class="lead"><?= $judul ?></p>
                        </div>
                        <div class="mb-4">
                            <p class="lead fw-bold">Penulis :</p>
                            <p class="lead"><?= $penulis ?></p>
                        </div>
                        <div class="mb-4">
                            <p class="lead fw-bold">Tahun Terbit :</p>
                            <p class="lead"><?= $tahun ?></p>
                        </div>
                        <div class="mb-4">
                            <p class="lead fw-bold">Deskripsi :</p>
                            <p class="lead"><?= $deskripsi ?></p>
                        </div>
                        <div class="mb-4">
                            <p class="lead fw-bold">Bahasa :</p>
                            <p class="lead"><?= $bahasa ?></p>
                        </div>
                        <div class="mb-4">
                            <p class="lead fw-bold">Tag :</p>
                            <p class="lead"><?= $tag ?></p>
                        </div>
                        <div class="row">
                            <div class="d-grid col-6">
                                <!-- <a class="btn btn-primary" href="method/Even_update.php?id=<?= $selects['id_buku'] ?>" role="button">Sunting</a> -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Sunting</button>
                            </div>
                            <div class="d-grid col-6">
                                <a class="btn btn-danger" href="method/Even_delete.php?id=<?= $selects['id_buku'] ?>" role="button">Hapus</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sunting</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="JudulBuku" class="form-label fw-bold">Judul Buku</label>
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Contoh: Pemrograman WEB Bersama EAD" value='<?= $judul;?>'>
                            </div>
                            <div class="mb-3">
                                <label for="Penulis" class="form-label fw-bold">Penulis</label>
                                <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $penulis ?>" aria-label="readonly" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="TahunTerbit" class="form-label fw-bold">Tahun Terbit</label>
                                <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Contoh: 1990" value='<?= $tahun;?>'>
                            </div>
                            <div class="mb-3">
                                <label for="Deskripsi" class="form-label fw-bold">Deskripsi</label>
                                <textarea rows="4" cols="50" class="form-control" id="deskripsi" name="deskripsi" placeholder="Contoh: Buku ini menjelaskan tentang ..."><?= $deskripsi;?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="Bahasa" class="form-label fw-bold me-5">Bahasa</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="bahasa" name="bahasa" value="Indonesia"  <?php if($bahasa == "Indonesia") echo "checked";?>">
                                    <label class="form-check-label" for="indonesia">Indonesia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="bahasa" name="bahasa" value="Lainnya">
                                    <label class="form-check-label" for="lainnya">Lainnya</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Tag" class="form-label fw-bold me-5">Tag</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="tag" name="tag[]" value="Pemrograman" <?php if(in_array("Pemrograman",$tagArray)) echo "checked";?>>
                                    <label class="form-check-label" for="inlineCheckbox1">Pemrograman</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="tag" name="tag[]" value="Website" <?php if(in_array("Website",$tagArray)) echo "checked";?>>
                                    <label class="form-check-label" for="inlineCheckbox2">Website</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="tag" name="tag[]" value="Java" <?php if(in_array("Java",$tagArray)) echo "checked";?>>
                                    <label class="form-check-label" for="inlineCheckbox3">Java</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="tag" name="tag[]" value="OOP" <?php if(in_array("OOP",$tagArray)) echo "checked";?>>
                                    <label class="form-check-label" for="inlineCheckbox4">OOP</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="tag" name="tag[]" value="MVC" <?php if(in_array("MVC",$tagArray)) echo "checked";?>>
                                    <label class="form-check-label" for="inlineCheckbox5">MVC</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="tag" name="tag[]" value="Kalkulus" <?php if(in_array("Kalkulus",$tagArray)) echo "checked";?>>
                                    <label class="form-check-label" for="inlineCheckbox6">Kalkulus</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="tag" name="tag[]" value="Lainnya" <?php if(in_array("Lainnya",$tagArray)) echo "checked";?>>
                                    <label class="form-check-label" for="inlineCheckbox7">Lainnya</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="method/Even_update.php?id=<?= $selects['id_buku'] ?>"><button type="button" class="btn btn-primary">Save changes</button></a>
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

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>