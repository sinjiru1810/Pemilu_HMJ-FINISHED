<?php
    include '../koneksi.php';
    $nim=$_GET['nim'];
    $pil=$_GET['id'];
    mysqli_query($link,"update msuspr set pilihan=$pil where nim=$nim ");
    header("location:../index.php");
?>