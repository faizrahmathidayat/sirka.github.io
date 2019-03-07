<?php

include('../koneksi.php');
$noregist=$_GET['noregist'];
$delete="Delete from sekolah Where noregist='$noregist'";
mysql_query($delete) or die ("Error tu");
if($delete){
echo "<script>alert('Data Berhasil Dihapus')</script>";
echo "<meta http-equiv='refresh' content='1 url=index_admin.php?p=user'>";
}else{
echo "<script>alert('Gagal Hapus')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin/index_admin.php?p=user'>";
}


?>
