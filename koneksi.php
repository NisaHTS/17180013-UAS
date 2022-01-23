<?php 
$server="localhost:8080";
$username="root";
$password="";
$db="tabel_siswa";

$connect=mysql_connect($server,$username,$password);
$select_db=mysql_select_db($db);
if ($connect){
  echo "Data Tersimpan";
  if ($select_db){
    echo "Data Berhasil Disimpan";
  }else{
    echo "Database Tidak Berhasil Disimpan";
  }
}
else {
  echo "Gagal Dalam Menyimpan Data";
}
?>