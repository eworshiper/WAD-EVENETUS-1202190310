<?php
session_start();
require "connect.php";

if(isset($_POST["login"])) {  
    $email = $_POST["email"];
    $katasandi = $_POST["katasandi"];

    $checkemail = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");

    if(mysqli_num_rows($checkemail) == 1){
        $barisdata = mysqli_fetch_assoc($checkemail);
        if (password_verify($katasandi, $barisdata["passwords"])){
            $_SESSION['id'] = $barisdata['id'];
            $_SESSION['nama'] = $barisdata['nama'];
            $_SESSION['no_hp'] = $barisdata['no_hp'];
            $_SESSION['login'] = true;
            header("Location: ../index.php");
            exit();
        }
    }
    $error = true;

    if (isset($error)){
        echo "<script>
        alert('Email atau Password Tidak Sesuai')
        </script>";
    }
}
?>
