<?php 
include 'index.php';

$nama_siswa = $_POST['nama_siswa'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat= $_POST['alamat'];
$hoby= $_POST['hoby'];


$query = mysql_query("UPDATE tabel_siswa SET nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin', alamat='$alamat', hoby='$hoby' WHERE nama='$nama_siswa'") or die(mysql_error());

if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='save.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}
