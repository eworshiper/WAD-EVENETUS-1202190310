<?php
    include('Even_connect.php');

        $id = $_GET['id'];

        $query = "DELETE FROM buku_table WHERE id_buku='$id'";
        $delete = mysqli_query($koneksi, $query);
?>