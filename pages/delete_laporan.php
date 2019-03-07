<?php
mysql_connect("localhost", "root", "");
mysql_select_db("simrkadpa");
$id_anggarantahun=$_GET['id_anggarantahun'];
$delete="Delete anggarantahun,anggaranbulan from anggarantahun inner join anggaranbulan on anggaranbulan.id_anggarantahun=anggarantahun.id_anggarantahun
where anggarantahun.id_anggarantahun='$id_anggarantahun'";
mysql_query($delete) or die (mysql_error());
if($delete){
echo "<script>alert('Laporan Berhasil Dihapus')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php?p=daftar_laporan'>";
}else{
echo "<script>alert('Gagal Hapus')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php?p=daftar_laporan'>";
}


?>
