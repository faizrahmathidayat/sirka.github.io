<?php
include '../koneksi.php';
$username =$_POST['username'];
$password =$_POST['password'];
if (empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=login admin.php'>";
}else if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=login admin.php'>";
}else{
$login = mysql_query("SELECT  * from admin where username='$username' and password='$password'");
 $result = mysql_num_rows($login);
$row =mysql_fetch_array($login);
if ($row['username'] == $username AND $row['password'] == $password) {
 session_start(); // memulai fungsi session
 $_SESSION['username'] = $username;
header("location:index_admin.php");
}else {
echo "<script>alert('Username atau Password salah')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}
}
?>

