<?php
    include('connect.php');

        $id = $_GET['id'];

        $query = "DELETE FROM bookings WHERE id='$id'";
        $delete = mysqli_query($koneksi, $query);
?>