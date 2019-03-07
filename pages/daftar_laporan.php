<html>
<head>
</head>
<body>
<h1><span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;Daftar Laporan</h1>
<hr>
<hr>
<br>
<a href="index.php?p=tambah_laporan"><button type="button" class="btn btn-primary btn-lg-succes">Tambah Laporan</button></a>
<table class="design-table" >
<th align="center">No</th>
<th >Tahun</th>
<th >Jumlah Siswa</th>
<th >Jumlah Anggaran</th>
<th >DANA 1</th>
<th >DANA 2</th>
<th >DANA 3</th>
<th >DANA 4</th>
<th >DANA 5</th>
<th>DANA 6</th>
<th>Aksi</th>
<?php

	$query=mysql_query("select * from anggarantahun,tahun WHERE noregist='".$_SESSION['noregist']."' and tahun.id_tahun=anggarantahun.id_tahun order by tahun");
	$no=1;
	while ($data = mysql_fetch_array($query)){
?>
<tr>
<td align="center"><?php echo $no;?></td>
<td align="center"><?php echo $data['tahun'];?></td>
<td align="center"><?php echo $data['jmlsiswa'];?></td>
<td align="center"><?php echo number_format($data['jmlanggaran']);?></td>
<td align="center"><?php echo number_format($data['dana1']);?></td>
<td align="center"><?php echo number_format($data['dana2']);?></td>
<td align="center"><?php echo number_format($data['dana3']);?></td>
<td align="center"><?php echo number_format($data['dana4']);?></td>
<td align="center"><?php echo number_format($data['dana5']);?></td>
<td align="center"><?php echo number_format($data['dana6']);?></td>
<td align="center">
<a href="index.php?p=edit_laporan&id_anggarantahun=<?php echo $data['id_anggarantahun']; ?>"><span class="glyphicon glyphicon-wrench"></span></a>
<a href="index.php?p=delete_laporan&id_anggarantahun=<?php echo $data['id_anggarantahun']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');"><span class="glyphicon glyphicon-trash"></span></a></td>
</tr>
<?php
$no++;
}
?>
<td colspan="3" align="center">JUMLAH</td>
<td align="center"><?php

$jumlahkan = "SELECT SUM(jmlanggaran) AS jumlah_total FROM anggarantahun where noregist='".$_SESSION['noregist']."'"; //perintah untuk menjumlahkan

$hasil =@mysql_query($jumlahkan) or die (mysql_error());//melakukan query dengan varibel $jumlahkan

$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t

echo "<b>" . number_format($t['jumlah_total']) . " </b>";//menampilkaan hasil penjumlahan

?></td>
<td align="center"><?php

$jumlahkan1 = "SELECT SUM(dana1) AS jumlah_total1 FROM anggarantahun where noregist='".$_SESSION['noregist']."'"; //perintah untuk menjumlahkan

$hasil =@mysql_query($jumlahkan1) or die (mysql_error());//melakukan query dengan varibel $jumlahkan

$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t

echo "<b>" . number_format($t['jumlah_total1']) . " </b>";//menampilkaan hasil penjumlahan

?></td>
<td align="center"><?php

$jumlahkan1 = "SELECT SUM(dana2) AS jumlah_total2 FROM anggarantahun where noregist='".$_SESSION['noregist']."'"; //perintah untuk menjumlahkan

$hasil =@mysql_query($jumlahkan1) or die (mysql_error());//melakukan query dengan varibel $jumlahkan

$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t

echo "<b>" . number_format($t['jumlah_total2']) . " </b>";//menampilkaan hasil penjumlahan

?></td>
<td align="center"><?php

$jumlahkan1 = "SELECT SUM(dana3) AS jumlah_total3 FROM anggarantahun where noregist='".$_SESSION['noregist']."'"; //perintah untuk menjumlahkan

$hasil =@mysql_query($jumlahkan1) or die (mysql_error());//melakukan query dengan varibel $jumlahkan

$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t

echo "<b>" . number_format($t['jumlah_total3']) . " </b>";//menampilkaan hasil penjumlahan

?></td>
<td align="center"><?php

$jumlahkan1 = "SELECT SUM(dana4) AS jumlah_total4 FROM anggarantahun where noregist='".$_SESSION['noregist']."'"; //perintah untuk menjumlahkan

$hasil =@mysql_query($jumlahkan1) or die (mysql_error());//melakukan query dengan varibel $jumlahkan

$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t

echo "<b>" . number_format($t['jumlah_total4']) . " </b>";//menampilkaan hasil penjumlahan

?></td>
<td align="center"><?php

$jumlahkan1 = "SELECT SUM(dana5) AS jumlah_total5 FROM anggarantahun where noregist='".$_SESSION['noregist']."'"; //perintah untuk menjumlahkan

$hasil =@mysql_query($jumlahkan1) or die (mysql_error());//melakukan query dengan varibel $jumlahkan

$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t

echo "<b>" . number_format($t['jumlah_total5']) . " </b>";//menampilkaan hasil penjumlahan

?></td>
<td align="center"><?php

$jumlahkan1 = "SELECT SUM(dana6) AS jumlah_total6 FROM anggarantahun where noregist='".$_SESSION['noregist']."'"; //perintah untuk menjumlahkan

$hasil =@mysql_query($jumlahkan1) or die (mysql_error());//melakukan query dengan varibel $jumlahkan

$t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t

echo "<b>" . number_format($t['jumlah_total6']) . " </b>";//menampilkaan hasil penjumlahan

?></td>
</table>
</body>
</html>
