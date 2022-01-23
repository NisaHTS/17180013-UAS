<?php

$nama=$_POST['nama_siswa'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$hoby=$_POST['hoby'];
include_once("index.php");
$result=mysqli_query($connect,"INSERT INTO tabel_siswa(nama_siswa,jenis_kelamin,alamat,hoby) VALUES ('$nama_siswa','$jenis_kelamin','$alamat','$hoby'WHERE nama='$nama_siswa'") or die(mysql_error());

if ( $result){
  echo "<script>alert('Data berhasil disimpan!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal disimpan');</script>";
}

?>