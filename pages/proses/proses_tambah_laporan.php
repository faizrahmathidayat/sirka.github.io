<?php
include '../../koneksi.php';


// $id_anggarantahun=$_POST['id_anggarantahun'];
$tempattugas=$_POST['noregist'];
$jmlsiswa=$_POST['jmlsiswa'];
$jmlanggaran=$_POST['jmlanggaran'];
$dana1=$_POST['dana1'];
$dana2=$_POST['dana2'];
$dana3=$_POST['dana3'];
$dana4=$_POST['dana4'];
$dana5=$_POST['dana5'];
$dana6=$_POST['dana6'];
$selisih=$_POST['selisih'];
$anggaranbulan=$_POST['anggaranbulan'];
$dana1bulan=$_POST['dana1bulan'];
$dana2bulan=$_POST['dana2bulan'];
$dana3bulan=$_POST['dana3bulan'];
$dana4bulan=$_POST['dana4bulan'];
$dana5bulan=$_POST['dana5bulan'];
$dana6bulan=$_POST['dana6bulan'];
$id_tahun=$_POST['id_tahun'];

$cekdata="select noregist,id_tahun from anggarantahun where id_tahun='$id_tahun' and noregist='$tempattugas'";
$ada=mysql_query($cekdata) or die(mysql_error());
if(mysql_num_rows($ada)>0)
{
  echo "<script>alert('Gagal Menyimpan ! Anda Menginput Tahun Yang Sama')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?p=tambah_laporan'>";
}else if ($selisih > 0 ){
	echo "<script>alert('Gagal Menyimpan ! Anggaran Anda Masih Ada Selisih')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?p=tambah_laporan'>";
}else if ($dana1 < 0 ){
	echo "<script>alert('Gagal Menyimpan ! Inputan Tidak Boleh Minus (-)')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?p=tambah_laporan'>";
}else{

// if (empty($tahun)){
// echo "<script>alert('Tahun Belum Di isi !!')</script>";
// echo "<meta http-equiv='refresh' content='1 url=index.php?p=bku_bop'>";
// }else if(empty($bulan)){
// echo "<script>alert('Bulan Belum Di isi !!')</script>";
// echo "<meta http-equiv='refresh' content='1 url=index.php?p=bku_bop'>";
// }else if(empty($danaawal)){
// echo "<script>alert('Dana Awal Belum Di isi !!')</script>";
// echo "<meta http-equiv='refresh' content='1 url=index.php?p=bku_bop'>";
// }else if(empty($fileName)){
// echo "<script>alert('Scan Kwitansi Belum Di isi !!')</script>";
// echo "<meta http-equiv='refresh' content='1 url=index.php?p=bku_bop'>";
// }else if(empty($tahun && $bulan && $danaawal && $fileName)){
// echo "<script>alert('Tahun,Bulan,Dana Awal dan Scan Tidak Boleh Kosong !!')</script>";
// echo "<meta http-equiv='refresh' content='1 url=index.php?p=bku_bop'>";
// }else{

$query=mysql_query("insert into anggarantahun value('','$tempattugas',
                                              '$id_tahun',
                      											  '$jmlsiswa',
                                              '$jmlanggaran',
                      												'$dana1',
                                  						'$dana2',
                                  						'$dana3',
                                  						'$dana4',
                                  						'$dana5',
                                  						'$dana6',
          												            '$selisih')")or die(mysql_error());
$query = "select max(id_anggarantahun) as last_id from anggarantahun limit 1";
	$hasil = mysql_query($query);
	$row = mysql_fetch_array($hasil);
	$lastId = $row['last_id'];
$query1=mysql_query("insert into anggaranbulan value('$lastId',
                                                    '$dana1bulan',
                                                    '$dana2bulan',
                                                    '$dana3bulan',
                                                    '$dana4bulan',
                                                    '$dana5bulan',
                                                    '$dana6bulan',
                                                    '$anggaranbulan')")or die(mysql_error());

if ($query && $query1)
{
	echo "<script>alert('Laporan Berhasil Di Tambah')</script>";
  echo "<meta http-equiv='refresh' content='1 url=../../index.php?p=daftar_laporan'>";
} else {
	echo 'gagal menambah laporan';
}
}
?>
