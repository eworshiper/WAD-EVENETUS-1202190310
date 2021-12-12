<?php
    include("Even_connect.php");

    if(isset($_POST["tambah"])){
        $judul = $_POST["judul"];
        $penulis = $_POST["penulis"];
        $tahun = $_POST["tahun"];
        $deskripsi = $_POST["deskripsi"];
        $bahasa = $_POST["bahasa"];
        $tag = implode (',',$_POST["tag"]);
        $namaGambar = $_FILES["gambarbuku"]["name"];
        $tmp_file = $_FILES["gambarbuku"]["tmp_name"];
        
        $path = "../images/";
        
        move_uploaded_file($tmp_file,$path.$namaGambar);
        
        $query = "INSERT INTO buku_table (judul_buku, penulis_buku, tahun_terbit, deskripsi, gambar, tag, bahasa) VALUES ('$judul', '$penulis', '$tahun', '$deskripsi', '$namaGambar', '$tag', '$bahasa')";
        $insert = mysqli_query($koneksi, $query); 
    }

?>