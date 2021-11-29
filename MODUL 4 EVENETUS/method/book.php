<<<<<<< HEAD
<?php
    include("connect.php");

    if(isset($_POST["raja_ampat"])){
        $userid = $_POST[""];
        $tempat = $_POST["Raja Ampat"];
        $lokasi = $_POST["Papua"];
        $harga = $_POST["Rp.7.000.000"];
        $tanggal = $_POST[""];
    } elseif(isset($_POST["bromo"])){
        $userid = $_POST[""];
        $tempat = $_POST["Bromo"];
        $lokasi = $_POST["Malang"];
        $harga = $_POST["Rp.2.000.000"];
        $tanggal = $_POST[""];
    } elseif(isset($_POST["tanah_lot"])){
        $userid = $_POST[""];
        $tempat = $_POST["Tanah Lot"];
        $lokasi = $_POST["Bali"];
        $harga = $_POST["Rp.5.000.000"];
        $tanggal = $_POST[""];
    }
        
    $query = "INSERT INTO bookings (users_id,nama_tempat,lokasi,harga,tanggal) VALUES ($userid, $tempat, $lokasi, $harga, $tanggal)";
    $insert = mysqli_query($koneksi, $query); 

=======
<?php
    include("connect.php");

    if(isset($_POST["raja_ampat"])){
        $userid = $_POST[""];
        $tempat = $_POST["Raja Ampat"];
        $lokasi = $_POST["Papua"];
        $harga = $_POST["Rp.7.000.000"];
        $tanggal = $_POST[""];
    } elseif(isset($_POST["bromo"])){
        $userid = $_POST[""];
        $tempat = $_POST["Bromo"];
        $lokasi = $_POST["Malang"];
        $harga = $_POST["Rp.2.000.000"];
        $tanggal = $_POST[""];
    } elseif(isset($_POST["tanah_lot"])){
        $userid = $_POST[""];
        $tempat = $_POST["Tanah Lot"];
        $lokasi = $_POST["Bali"];
        $harga = $_POST["Rp.5.000.000"];
        $tanggal = $_POST[""];
    }
        
    $query = "INSERT INTO bookings (users_id,nama_tempat,lokasi,harga,tanggal) VALUES ($userid, $tempat, $lokasi, $harga, $tanggal)";
    $insert = mysqli_query($koneksi, $query); 

>>>>>>> f1b173bfa777351202ba68df1bc5a6a95794930a
?>