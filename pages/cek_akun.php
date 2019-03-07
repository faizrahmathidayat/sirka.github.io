<html>
<style type="text/css">
      .table{
  width: 100%;
  font-size: 17px;
  background: #eee;
}

.table th{
  text-align: center;
  font-size: 20px;
}
    </style>
<body>
  <br>
  <label>&nbsp;&nbsp;&nbsp;&nbsp;Masukan Kode Registrasi</label>
  <form action="" method="post">
  <div class="col-lg-6">
    <div class="input-group">
	<input type="text" class="form-control" name="regist" autofocus required>
  <span class="input-group-btn">
	<input type="submit" name="submit" class="btn btn-primary" value="cari">
</div>
</div>
</span>
</form>
<br>
<hr>
<?php
if ((isset($_POST['submit'])) AND ($_POST['regist'] <> "")) {
$search = $_POST['regist'];
$sql = mysql_query("SELECT * FROM sekolah WHERE noregist='$search'") or die(mysql_error());
//menampilkan jumlah hasil pencarian
$jumlah = mysql_num_rows($sql);
if ($jumlah > 0) {
while ($dataTampil=mysql_fetch_array($sql)) {
?>
<div class="table-responsive">
<table class="table table-bordered">
                 <th colspan="4" class="info" >HASIL PENCARIAN</th>

              <tr>
              <td align="center" rowspan="9" ><?php echo "<img class=media-obect src='foto_anggota/".$dataTampil['sk']."' width='220px' height='300px' float='left'/>"?></td>
                <td>No Registrasi</td>
                <td align="center" >:</td>
              <td><?php echo $dataTampil['noregist'];?></td>
           </tr>
           <tr>
             <td>Nama Operator</td>
                 <td align="center" >:</td>
              <td><?php echo $dataTampil['namaoperator'];?></td>
              </tr>
           <tr> <td>Tempat Tugas</td>
           <td align="center" >:</td>
              <td><?php echo $dataTampil['tempattugas'];?></td></tr>
           </tr>
            <tr> <td>Alamat Sekolah</td>
             <td align="center" >:</td>
              <td><?php echo $dataTampil['alamatsekolah'];?></td></tr>
           </tr>
            <tr> <td>No Telpon</td>
             <td align="center" >:</td>
              <td><?php echo $dataTampil['tlp'];?></td></tr>
           </tr>
            <tr> <td>Email</td>
             <td align="center" >:</td>
              <td><?php echo $dataTampil['email'];?></td></tr>
           </tr>
            <tr> <td>Status</td>
             <td align="center" >:</td>
              <td><b><?php echo $dataTampil['status'];?></b></td></tr>
           </tr>
           </table>
         </div>
  <?php

}
}
else {
// menampilkan pesan zero data
echo 'Maaf, hasil pencarian tidak ditemukan.';
}
}
?>
</body>
</html>
