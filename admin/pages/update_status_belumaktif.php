<?php
 // panggil koneksi database
$regist = $_GET['noregist'];
 $sqlTampil="select * from sekolah Where noregist='$_GET[noregist]'";
      $qryTampil=mysql_query($sqlTampil);
      $dataTampil=mysql_fetch_array($qryTampil);




    function KirimSMS($notujuan,$isipesan,$userkey,$passkey){
	$isi=urlencode($isipesan);
	$hp=str_replace('+62', '0', $notujuan);
	$hp=str_replace(' ', '', $hp);
	$hp=str_replace('.', '', $hp);
	$hp=str_replace(',', '', $hp);
	$ho=trim($hp);
	$url="https://reguler.zenziva.net/apps/smsapi.php?userkey=$userkey&passkey=$passkey&nohp=$hp&pesan=$isi";
	$data=file_get_contents($url);
	if(eregi('success', $data)){
		$hasil='1';
	}else{
		$hasil='0';
	}
	return $hasil;
}

//setingan ini ada di menu API Key zenziva anda
$userkey='21yg5c';
$passkey='rahasiaku109';

//isi nomor tujuan
$notujuan= $dataTampil['tlp'];
$isipesan= 'Akun Anda Telah Di nonaaktifkan, silahkan hubungi Admin 085648131722';

//mengikirim sms
$kirim=KirimSMS($notujuan,$isipesan,$userkey,$passkey);
if($kirim=='1'){
   echo 'Sukses';
}else{
   echo 'Gagal';
}



// ambil paramater id yang diambil dari halaman index.php tadi
$update=mysql_query("UPDATE sekolah SET status='Tidak Aktif' where noregist='$regist'")or die(mysql_error());
$query = mysql_query($update);
if($query){ // cek kondisi jika sudah benar maka akan menuju ke halaman index.php dan statusnya berbubah jadi aktif
	header("location:index_admin.php?p=user");
} else  { // jika salah maka tampilkan pesan error
	echo "<b class='alert alert-danger'> Gagal update Tidak Aktif </b>";
	header("location:index_admin.php?p=user");
}
?>
