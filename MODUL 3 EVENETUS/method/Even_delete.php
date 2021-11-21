<?php
    include('connect.php');

        $id = $_GET['id_buku'];

        $query = "DELETE FROM buku_table WHERE id_buku='$id'";
        $delete = mysqli_query($konek, $query);
?>