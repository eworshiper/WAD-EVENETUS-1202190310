<?php
session_start();
require "connect.php";

function update($data) {
    global $koneksi;
    $id = $_SESSION["id"];
    $nama = $data["nama"];
    $email = $data["email"];
    $nohp = $data["nomor"];
    $password = mysqli_real_escape_string($koneksi, $data["katasandi"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["katasandi2"]);

    if ($password == $password2){
        if ($password == ""){
            $query = "UPDATE user SET nama='$nama', email='$email', no_hp='$nohp' WHERE id='$id'";
            mysqli_query($koneksi,$query);
            setcookie('navbar-color', $_POST['navbar'], strtotime('+1 days'), '/');
            header("location:../profile.php");
            exit();
        }
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "UPDATE user SET nama='$nama', email='$email', passwords='$password', no_hp='$nohp' WHERE id='$id'";
        mysqli_query($koneksi,$query);
        setcookie('navbar-color', $_POST['navbar'], strtotime('+1 days'), '/');
        header("location:../profile.php");
        exit();
    }
    $query = "UPDATE user SET nama='$nama', email='$email', no_hp='$nohp' WHERE id='$id'";
    mysqli_query($koneksi,$query);
    setcookie('navbar-color', $_POST['navbar'], strtotime('+1 days'), '/');
    header("location:../profile.php");
    exit();
}

if(isset($_POST["update"])){
    update($_POST);
    // if ( > 0){
    //     header("location:../profile.php");
    // }
    // else{
    //     echo mysqli_error($koneksi);
    // }
} 

?>