<?php
include "../../koneksi.php";
$regist=$_POST['regist'];
$data="select * from sekolah Where noregist='$regist'";
if($regist){
  echo "Data Ditemukan, Mohon Tunggu ....<meta http-equiv='refresh' content='1 url=../../index.php?p=hasil_cek_akun&noregist=$regist'>";
}else{
  echo "Kode Registrasi Tidak ditemukan <meta http-equiv='refresh' content='1 url=../../index.php?p=cek_akun'>";
}
 ?>
