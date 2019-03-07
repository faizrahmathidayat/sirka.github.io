<?php

include "../koneksi.php";
$tahun=$_POST['tahun'];

$cekdata="select * from tahun where id_tahun and tahun='$tahun'";
$ada=mysql_query($cekdata) or die(mysql_error());
if(mysql_num_rows($ada) > 0)
{
echo "<script>alert('Gagal Menyimpan ! Anda Menginput Tahun Yang Sama')</script>";
echo "<meta http-equiv='refresh' content='1 url=index_admin.php?p=rekap_laporan'>";
}else if (empty($tahun)){
  echo "<script>alert('Gagal Menyimpan ! Kolom Tidak Boleh Kosong')</script>";
  echo "<meta http-equiv='refresh' content='1 url=index_admin.php?p=rekap_laporan'>";
}else{
$query=mysql_query("insert into tahun value('','$tahun')")or die(mysql_error());
  echo "<script>alert('Tahun Anggaran Berhasil Ditambah')</script>";
  echo "<meta http-equiv='refresh' content='1 url=index_admin.php?p=rekap_laporan'>";
}
?>
