<a href="index.php">Data User</a><br>
<form action="save.php" method="POST">
  <table width="25%" border="0">
    <tr>
      <td>Nama Siswa</td>
      <td><input type="text" name="nama_siswa"></td>
    </tr>
    <tr>
<td>jenis kelamin</td>
<td><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
<input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki</td>
</tr> 
    <tr>
      <td>Alamat</td>
      <td><textarea type="text" name="alamat"></textarea></td>
    </tr>
    <tr>
      <td>Hoby</td>
      <td><input type="text" name="hoby"></td>
    </tr>
    <tr>
      <td><input type="submit" name="update" value="update"></td>
    </tr>
  </table>
</form>