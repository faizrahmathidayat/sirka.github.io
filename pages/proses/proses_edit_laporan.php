<?php
include '../../koneksi.php';
mysql_query("UPDATE anggarantahun join tahun on tahun.id_tahun = anggarantahun.id_tahun join anggaranbulan on anggaranbulan.id_anggarantahun=anggarantahun.id_anggarantahun
  set tahun='$_POST[tahun]',
    	jmlsiswa='$_POST[jmlsiswa]',
    	jmlanggaran='$_POST[jmlanggaran]',
    	dana1='$_POST[dana1]',
      dana1bulan='$_POST[dana1bulan]',
    	dana2='$_POST[dana2]',
      dana2bulan='$_POST[dana2bulan]',
    	dana3='$_POST[dana3]',
      dana3bulan='$_POST[dana3bulan]',
    	dana4='$_POST[dana4]',
      dana4bulan='$_POST[dana4bulan]',
    	dana5='$_POST[dana5]',
      dana5bulan='$_POST[dana5bulan]',
    	dana6='$_POST[dana6]',
      dana6bulan='$_POST[dana6bulan]',
      selisih='$_POST[selisih]',
    	total='$_POST[anggaranbulan]'
    	where anggarantahun.id_anggarantahun='$_POST[id_anggarantahun]'") or die(mysql_error("gagal update"));
	 	echo "<script>alert('Data Berhasil Di Edit')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?p=daftar_laporan'>";
