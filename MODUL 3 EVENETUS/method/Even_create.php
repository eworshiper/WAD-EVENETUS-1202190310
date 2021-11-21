<?php
    include("Even_connect.php");

    if(isset($_POST["tambah"])){
        $judul = $_POST["judul"];
        $penulis = $_POST["penulis"];
        $tahun = $_POST["tahun"];
        $deskripsi = $_POST["deskripsi"];
        $bahasa = $_POST["bahasa"];
        $tag = $_POST["tag"];
        $gambar = $_POST["gambar"];

        $query = "INSERT INTO buku_table (judul_buku, penulis_buku, tahun_terbit, deskripsi, gambar, tag, bahasa) VALUES ('$judul', '$penulis', '$tahun', '$deskripsi', '$gambar', '$tag', '$bahasa')";
        $insert = mysqli_query($konek, $query); 
    }

?>