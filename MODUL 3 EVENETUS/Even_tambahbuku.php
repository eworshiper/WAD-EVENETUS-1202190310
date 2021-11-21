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
    <body style="zoom: 80%;">
        <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
            <div class="container">    
                <a class="navbar-brand" href="#">
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
                        <form action="method/Even_create.php" method="POST">
                            <div class="mb-3">
                                <label for="judul" class="form-label fw-bold">Judul Buku</label>
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Contoh : Pemrograman Web Bersama EAD" value="">
                            </div>
                            <div class="mb-3">
                                <label for="penulis" class="form-label fw-bold">Penulis</label>
                                <input type="text" class="form-control" id="penulis" name="penulis" value="Evenetus_1202190310" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="tahun" class="form-label fw-bold">Tahun Terbit</label>
                                <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Contoh : 1990" value="">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label mb-0 fw-bold">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="Bahasa" class="form-label fw-bold me-5">Bahasa</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="Indonesia" id="bahasa" name="bahasa">
                                    <label class="form-check-label" for="indonesia">Indonesia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="Lainnya" id="bahasa" name="bahasa">
                                    <label class="form-check-label" for="lainnya">Lainnya</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Tag" class="form-label fw-bold me-5">Tag</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="Pemrograman" id="tag" name="tag">
                                    <label class="form-check-label" for="pemrograman">Pemrograman</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="Website" id="tag" name="tag">
                                    <label class="form-check-label" for="website">Website</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="Java" id="tag" name="tag">
                                    <label class="form-check-label" for="java">Java</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="OOP" id="tag" name="tag">
                                    <label class="form-check-label" for="oop">OOP</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="MVC" id="tag" name="tag">
                                    <label class="form-check-label" for="mvc">MVC</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="Kalkulus" id="tag" name="tag">
                                    <label class="form-check-label" for="kalkulus">Kalkulus</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="Lainnya" id="tag" name="tag">
                                    <label class="form-check-label" for="lainnya">Lainnya</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label fw-bold">Gambar</label>
                                <input class="form-control" type="file" id="gambar" name="gambar">
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto mt-5">
                                <button type="submit" class="btn btn-primary" name="tambah">+ Tambah</button>
                            </div>
                        </form>
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