<?php
include '../../koneksi.php';
$id_tahun= $_GET['id'];
$query1= "select * from tahun where id_tahun='$id_tahun'";
$sql= mysql_query($query1);
$data1 = mysql_fetch_array($sql);
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=REKAP RKA UPT Cibodas Tahun ".$data1['tahun'].".xls");
//header("Content-type:   application/x-msexcel; charset=utf-8");
?>
<html>
<head>
</head>
<body>
<h2><strong><center><p>LAPORAN REKAPITULASI RENCANA KERJA DAN ANGGARAN (RKA-BOP)</P></center></strong></h2>
<strong><center><h2>TAHUN ANGGARAN <?php echo $data1['tahun'];?></h2></center></strong>
<strong><center><h2>UPT PENDIDIKAN KECAMATAN CIBODAS</h2></center></strong>
<table border="1">
<tr>
	<th>No</th>
  <th>Nama Sekolah</th>
	<th>Jumlah Siswa</th>
	<th>Anggaran Pertahun</th>
	<th>BELANJA PERALATAN KEBERSIHAN DAN ALAT PEMBERSIH</th>
  <th>Perbulan</th>
	<th>BELANJA PEMELIHARAAN GEDUNG</th>
  <th>Perbulan</th>
	<th>BELANJA PEMELIHARAAN BUKAN GEDUNG</th>
  <th>PERBULAN</th>
	<th>BIAYA CETAK DAN PENGGANDAAN</th>
  <th>PERBULAN</th>
	<th>BELANJA PENGGANDAAN</th>
  <th>PERBULAN</th>
	<th>BELANJA JASA PELAYANAN PENDIDIKAN</th>
  <th>PERBULAN</th>
  <th>Total Anggaran Perbulan</th>
</tr>
<?php
include '../../koneksi.php';
$id= $_GET['id'];
$query=mysql_query("select * from anggaranbulan,sekolah,anggarantahun where id_tahun='$id' and sekolah.noregist=anggarantahun.noregist and anggaranbulan.id_anggarantahun=anggarantahun.id_anggarantahun")or die(mysql_error());
		$no=1;
  while ($data = mysql_fetch_array($query)){
 ?>
<tr>
<td><?php echo $no;?></td>
<td><?php echo $data['tempattugas'];?></td>
<td><?php echo $data['jmlsiswa'];?></td>
<td><?php echo $data['jmlanggaran'];?></td>
<td><?php echo $data['dana1'];?></td>
<td><?php echo $data['dana1bulan'];?></td>
<td><?php echo $data['dana2'];?></td>
<td><?php echo $data['dana2bulan'];?></td>
<td><?php echo $data['dana3'];?></td>
<td><?php echo $data['dana3bulan'];?></td>
<td><?php echo $data['dana4'];?></td>
<td><?php echo $data['dana4bulan'];?></td>
<td><?php echo $data['dana5'];?></td>
<td><?php echo $data['dana5bulan'];?></td>
<td><?php echo $data['dana6'];?></td>
<td><?php echo $data['dana6bulan'];?></td>
<td><?php echo $data['total'];?></td>
</tr>
<?php
$no++;
}
?>
<td colspan="3" align="center"><b>JUMLAH</b></td>
<td align="center"><?php
$jumlahkan = "SELECT SUM(jmlanggaran) AS jumlah_total FROM anggaranbulan,sekolah,anggarantahun where id_tahun='$id' and sekolah.noregist=anggarantahun.noregist and anggaranbulan.id_anggarantahun=anggarantahun.id_anggarantahun"; //perintah untuk menjumlahkan
$hasil =@mysql_query($jumlahkan) or die (mysql_error());//melakukan query dengan varibel $jumlahkan
$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t
echo "<b>" . $t['jumlah_total'] . " </b>";//menampilkaan hasil penjumlahan
?></td>

<td align="center"><?php
$jumlahkan1 = "SELECT SUM(dana1) AS jumlah_total1 FROM anggaranbulan,sekolah,anggarantahun where id_tahun='$id' and sekolah.noregist=anggarantahun.noregist and anggaranbulan.id_anggarantahun=anggarantahun.id_anggarantahun"; //perintah untuk menjumlahkan
$hasil =@mysql_query($jumlahkan1) or die (mysql_error());//melakukan query dengan varibel $jumlahkan
$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t
echo "<b>" . $t['jumlah_total1'] . " </b>";//menampilkaan hasil penjumlahan
?></td>

<td align="center"><?php
$jumlahkan2 = "SELECT SUM(dana1bulan) AS jumlah_total2 FROM anggaranbulan,sekolah,anggarantahun where id_tahun='$id' and sekolah.noregist=anggarantahun.noregist and anggaranbulan.id_anggarantahun=anggarantahun.id_anggarantahun"; //perintah untuk menjumlahkan
$hasil =@mysql_query($jumlahkan2) or die (mysql_error());//melakukan query dengan varibel $jumlahkan
$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t
echo "<b>" . $t['jumlah_total2'] . " </b>";//menampilkaan hasil penjumlahan
?></td>

<td align="center"><?php
$jumlahkan3 = "SELECT SUM(dana2) AS jumlah_total3 FROM anggaranbulan,sekolah,anggarantahun where id_tahun='$id' and sekolah.noregist=anggarantahun.noregist and anggaranbulan.id_anggarantahun=anggarantahun.id_anggarantahun"; //perintah untuk menjumlahkan
$hasil =@mysql_query($jumlahkan3) or die (mysql_error());//melakukan query dengan varibel $jumlahkan
$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t
echo "<b>" . $t['jumlah_total3'] . " </b>";//menampilkaan hasil penjumlahan
?></td>

<td align="center"><?php
$jumlahkan4 = "SELECT SUM(dana2bulan) AS jumlah_total4 FROM anggaranbulan,sekolah,anggarantahun where id_tahun='$id' and sekolah.noregist=anggarantahun.noregist and anggaranbulan.id_anggarantahun=anggarantahun.id_anggarantahun"; //perintah untuk menjumlahkan
$hasil =@mysql_query($jumlahkan4) or die (mysql_error());//melakukan query dengan varibel $jumlahkan
$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t
echo "<b>" .$t['jumlah_total4'] . " </b>";//menampilkaan hasil penjumlahan
?></td>

<td align="center"><?php
$jumlahkan5 = "SELECT SUM(dana3) AS jumlah_total5 FROM anggaranbulan,sekolah,anggarantahun where id_tahun='$id' and sekolah.noregist=anggarantahun.noregist and anggaranbulan.id_anggarantahun=anggarantahun.id_anggarantahun"; //perintah untuk menjumlahkan
$hasil =@mysql_query($jumlahkan5) or die (mysql_error());//melakukan query dengan varibel $jumlahkan
$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t
echo "<b>" . $t['jumlah_total5'] . " </b>";//menampilkaan hasil penjumlahan
?></td>

<td align="center"><?php
$jumlahkan6 = "SELECT SUM(dana3bulan) AS jumlah_total6 FROM anggaranbulan,sekolah,anggarantahun where id_tahun='$id' and sekolah.noregist=anggarantahun.noregist and anggaranbulan.id_anggarantahun=anggarantahun.id_anggarantahun"; //perintah untuk menjumlahkan
$hasil =@mysql_query($jumlahkan6) or die (mysql_error());//melakukan query dengan varibel $jumlahkan
$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t
echo "<b>" . $t['jumlah_total6'] . " </b>";//menampilkaan hasil penjumlahan
?></td>

<td align="center"><?php
$jumlahkan7 = "SELECT SUM(dana4) AS jumlah_total7 FROM anggaranbulan,sekolah,anggarantahun where id_tahun='$id' and sekolah.noregist=anggarantahun.noregist and anggaranbulan.id_anggarantahun=anggarantahun.id_anggarantahun"; //perintah untuk menjumlahkan
$hasil =@mysql_query($jumlahkan7) or die (mysql_error());//melakukan query dengan varibel $jumlahkan
$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t
echo "<b>" . $t['jumlah_total7'] . " </b>";//menampilkaan hasil penjumlahan
?></td>

<td align="center"><?php
$jumlahkan8 = "SELECT SUM(dana4bulan) AS jumlah_total8 FROM anggaranbulan,sekolah,anggarantahun where id_tahun='$id' and sekolah.noregist=anggarantahun.noregist and anggaranbulan.id_anggarantahun=anggarantahun.id_anggarantahun"; //perintah untuk menjumlahkan
$hasil =@mysql_query($jumlahkan8) or die (mysql_error());//melakukan query dengan varibel $jumlahkan
$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t
echo "<b>" .$t['jumlah_total8'] . " </b>";//menampilkaan hasil penjumlahan
?></td>

<td align="center"><?php
$jumlahkan9 = "SELECT SUM(dana5) AS jumlah_total9 FROM anggaranbulan,sekolah,anggarantahun where id_tahun='$id' and sekolah.noregist=anggarantahun.noregist and anggaranbulan.id_anggarantahun=anggarantahun.id_anggarantahun"; //perintah untuk menjumlahkan
$hasil =@mysql_query($jumlahkan9) or die (mysql_error());//melakukan query dengan varibel $jumlahkan
$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t
echo "<b>" . $t['jumlah_total9'] . " </b>";//menampilkaan hasil penjumlahan
?></td>

<td align="center"><?php
$jumlahkan10 = "SELECT SUM(dana5bulan) AS jumlah_total10 FROM anggaranbulan,sekolah,anggarantahun where id_tahun='$id' and sekolah.noregist=anggarantahun.noregist and anggaranbulan.id_anggarantahun=anggarantahun.id_anggarantahun"; //perintah untuk menjumlahkan
$hasil =@mysql_query($jumlahkan10) or die (mysql_error());//melakukan query dengan varibel $jumlahkan
$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t
echo "<b>" . $t['jumlah_total10'] . " </b>";//menampilkaan hasil penjumlahan
?></td>

<td align="center"><?php
$jumlahkan11 = "SELECT SUM(dana6) AS jumlah_total11 FROM anggaranbulan,sekolah,anggarantahun where id_tahun='$id' and sekolah.noregist=anggarantahun.noregist and anggaranbulan.id_anggarantahun=anggarantahun.id_anggarantahun"; //perintah untuk menjumlahkan
$hasil =@mysql_query($jumlahkan11) or die (mysql_error());//melakukan query dengan varibel $jumlahkan
$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t
echo "<b>" .$t['jumlah_total11'] . " </b>";//menampilkaan hasil penjumlahan
?></td>

<td align="center"><?php
$jumlahkan12 = "SELECT SUM(dana6bulan) AS jumlah_total12 FROM anggaranbulan,sekolah,anggarantahun where id_tahun='$id' and sekolah.noregist=anggarantahun.noregist and anggaranbulan.id_anggarantahun=anggarantahun.id_anggarantahun"; //perintah untuk menjumlahkan
$hasil =@mysql_query($jumlahkan12) or die (mysql_error());//melakukan query dengan varibel $jumlahkan
$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t
echo "<b>" . $t['jumlah_total12'] . " </b>";//menampilkaan hasil penjumlahan
?></td>

<td align="center"><?php
$jumlahkan13 = "SELECT SUM(dana6bulan) AS jumlah_total13 FROM anggaranbulan,sekolah,anggarantahun where id_tahun='$id' and sekolah.noregist=anggarantahun.noregist and anggaranbulan.id_anggarantahun=anggarantahun.id_anggarantahun"; //perintah untuk menjumlahkan
$hasil =@mysql_query($jumlahkan13) or die (mysql_error());//melakukan query dengan varibel $jumlahkan
$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t
echo "<b>" . $t['jumlah_total13'] . " </b>";//menampilkaan hasil penjumlahan
?></td>
</table>
</body>
</html>
