<?php
    include('../koneksi.php');
 
    $nim=$_POST['NIM'];
    $kode=$_POST['kode'];
    function logingagal(){
        header("location:CSA.php?login=false");
    }
    function sqlgagal(){
        header("location:CSA.php?login=sqlfail");
    }
    function sudahpilih(){
        header("location:CSA.php?login=pilih");
    }
    //cek isi nim dan kode
    if($nim=="" || $kode=="")logingagal();
    
    //cek nim dan kode di database dan cek kelaikan database
    $query=mysqli_query($link,"select pilih,kode,nim,pilihan,nama,jurusan,binusian from kpubinus2019.mscsa where NIM='$nim' and Kode='$kode'");
    if(!$query)sqlgagal();
    $result=mysqli_num_rows($query);
    if($result<1)logingagal();
    else{
            $row=mysqli_fetch_array($query);
        if(!$row['pilih']){
            //echo "anda belum memilih";
            $update=mysqli_query($link,"update kpubinus2019.mscsa set pilih=1 where NIM='$nim' and kode='$kode'");
            //if($update)echo "<br/>sukses";
            header("location:pilihCSA.php?nim=$nim");  
        }
        else sudahpilih();

    }
    
 
?>

