<?php 
include 'save.php';
$nama_siswa = $_GET['nama_siswa'];
$query = mysql_query("DELETE FROM tabel_siswa WHERE id = '$nama_siswa'") or die(mysql_error());
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='index.php';</script>";
}
?>