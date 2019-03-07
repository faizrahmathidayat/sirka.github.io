<?php
include '../../koneksi.php';
$regist =$_POST['noregist'];
$password =$_POST['password'];
if (empty($regist)){
echo "<script>alert('NIK belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../login.php'>";
}else if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../login.php'>";
}else{

$login = mysql_query("SELECT  * from sekolah where noregist='$regist' and password='$password'");
$row =mysql_fetch_array($login);

if ($row['noregist'] == '' AND $row['password'] == '') {
	echo "<script>alert('Nomor Registrasi atau Password salah')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../login.php'>";

} else if  ($row['status'] == 'Tidak Aktif'){
echo "<script>alert('Akun Anda Tidak Aktif, Silakan Hubungi Admin')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../login.php'>";

} else{


 session_start(); // memulai fungsi session
 $_SESSION['noregist'] = $regist;
Echo "<script>alert('Selamat Datang $row[tempattugas]')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../index.php'>";


}
}
?>
