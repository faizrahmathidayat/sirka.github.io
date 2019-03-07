<?php

include "../../koneksi.php";
$nama=$_POST['nama'];
$regist=$_POST['regist'];
$password=$_POST['password'];
$tempat_tugas=$_POST['tempattugas'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$no_tlp=$_POST['tlp'];
$status=$_POST['status'];
$fileName = $_FILES['image']['name'];

if (empty($nama && $tempat_tugas && $alamat && $email && $no_tlp)){
echo "<script>alert('Belum Terisi Semua')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?p=daftar_anggota'>";
} else {

$query=mysql_query("insert into sekolah value('$regist',
												'$password',
												'$nama',
												'$tempat_tugas',
												'$alamat',
												'$no_tlp',
												'$email',
												'$status',
												'$fileName')")or die(mysql_error());

if ($query)
{
	move_uploaded_file($_FILES['image']['tmp_name'], "../../foto_anggota/".$_FILES['image']['name']);
	echo "<script>alert('Anda Telah Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php?p=telah_daftar&noregist=$regist'>";
} else {
	echo 'gagal upload';
}
}
?>
