<?php

include('../koneksi.php');
$id_tahun=$_POST['id_tahun'];
$delete="Delete from tahun Where id_tahun='$id_tahun'";
mysql_query($delete) or die ("Error tu");
if($delete){
echo "<script>alert('Data Berhasil Dihapus')</script>";
echo "<meta http-equiv='refresh' content='1 url=index_admin.php?p=rekap_laporan'>";
}else{
echo "<script>alert('Gagal Hapus')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin/index_admin.php?p=rekap_laporan'>";
}


?>
