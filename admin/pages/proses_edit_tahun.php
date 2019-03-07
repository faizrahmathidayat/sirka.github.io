<?php
    include '../koneksi.php';
    $id_tahun = $_POST['id_tahun'];
    $tahun = $_POST['tahun'];
    $cekdata="select * from tahun where id_tahun and tahun='$tahun'";
    $ada=mysql_query($cekdata) or die(mysql_error());
    if(mysql_num_rows($ada) > 0)
    {
    echo "<script>alert('Gagal Menyimpan ! Anda Menginput Tahun Yang Sama')</script>";
    echo "<meta http-equiv='refresh' content='1 url=index_admin.php?p=rekap_laporan'>";
    }else if (empty($tahun)){
      echo "<script>alert('Gagal Menyimpan ! Tahun Anggaran Sudah Ada')</script>";
      echo "<meta http-equiv='refresh' content='1 url=index_admin.php?p=rekap_laporan'>";
    }else{
    $query=  mysql_query("update tahun set tahun='$tahun' where id_tahun='$id_tahun'");
    echo "<script>alert('Data Berhasil diubah')</script>";
    echo "<meta http-equiv='refresh' content='1 url=index_admin.php?p=rekap_laporan'>";
  }
?>
