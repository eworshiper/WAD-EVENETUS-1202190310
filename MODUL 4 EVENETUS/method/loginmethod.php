<<<<<<< HEAD
<?php
session_start();
require "connect.php";

if(isset($_POST["login"])) {  
    $email = $_POST["email"];
    $katasandi = $_POST["katasandi"];

    $checkemail = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");

    if(mysqli_num_rows($checkemail) === 1){
        $barisdata = mysqli_fetch_assoc($checkemail);
        if (password_verify($katasandi, $barisdata["passwords"])){
            $_SESSION['login']=true;
            header("Location: ../index.php");
        }
    }
    $error = true;

    if (isset($error)){
        echo "<script>
        alert('Email atau Password Tidak Sesuai')
        </script>";
    }
}
=======
<?php
session_start();
require "connect.php";

if(isset($_POST["login"])) {  
    $email = $_POST["email"];
    $katasandi = $_POST["katasandi"];

    $checkemail = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");

    if(mysqli_num_rows($checkemail) === 1){
        $barisdata = mysqli_fetch_assoc($checkemail);
        if (password_verify($katasandi, $barisdata["passwords"])){
            $_SESSION['login']=true;
            header("Location: ../index.php");
        }
    }
    $error = true;

    if (isset($error)){
        echo "<script>
        alert('Email atau Password Tidak Sesuai')
        </script>";
    }
}
>>>>>>> f1b173bfa777351202ba68df1bc5a6a95794930a
?>