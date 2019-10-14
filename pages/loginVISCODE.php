<?php
    include('../koneksi.php');
 
    $nim=$_POST['NIM'];
    $kode=$_POST['kode'];
    function logingagal(){
        header("location:VISCODE.php?login=false");
    }
    function sqlgagal(){
        header("location:VISCODE.php?login=sqlfail");
    }
    function sudahpilih(){
        header("location:VISCODE.php?login=pilih");
    }
    //cek isi nim dan kode
    if($nim=="" || $kode=="")logingagal();
    
    //cek nim dan kode di database dan cek kelaikan database
    $query=mysqli_query($link,"select pilih,kode,nim,pilihan,nama,jurusan,binusian from kpubinus2019.msVISCODE where NIM='$nim' and Kode='$kode'");
    if(!$query)sqlgagal();
    $result=mysqli_num_rows($query);
    if($result<1)logingagal();
    else{
            $row=mysqli_fetch_array($query);
        if(!$row['pilih']){
            //echo "anda belum memilih";
            $update=mysqli_query($link,"update kpubinus2019.msVISCODE set pilih=1 where NIM='$nim' and kode='$kode'");
            //if($update)echo "<br/>sukses";
            header("location:pilihVCD.php");  
        }
        else sudahpilih();

    }
    
 
?>

