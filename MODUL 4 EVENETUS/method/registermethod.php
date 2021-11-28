<?php
session_start();
require "connect.php";

function register($data) {
    global $koneksi;
    $nama = $data["nama"];
    $email = $data["email"];
    $nohp = $data["nomor"];
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    if ($password !== $password2){
        echo "<script>
        alert('Pasword Tidak Sesuai')
        </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (nama, email, passwords, no_hp) VALUES ('$nama', '$email', '$nohp', '$password')";
    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);
}

if(isset($_POST["daftar"])){
    if (register($_POST) > 0){
        $_SESSION["registersuccess"];
        header("location:../login.php");
    }
    else{
        echo mysqli_error($koneksi);
    }
} 

?>