<?php
    session_start();
    include("connect.php");
    $id = $_SESSION['id'];
    $tempat = $_POST['namatempat'];
    $lokasi = $_POST['lokasi'];
    $harga = $_POST['harga'];
    $tanggal =  $_POST['tanggal'];

    $query = "INSERT INTO bookings (users_id,nama_tempat,lokasi,harga,tanggal) VALUES ('$id', '$tempat', '$lokasi', '$harga', '$tanggal')";
    $insert = mysqli_query($koneksi, $query); 
    header("Location:../index.php");
    exit();
?>