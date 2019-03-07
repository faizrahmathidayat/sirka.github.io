<?php
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
$notujuan='0895610324228';
//isi pesan
$isipesan='Selamat Akun Anda Telah Aktif, Silahkan Anda Login di www.awani@adventure.com';

//mengikirim sms
$kirim=KirimSMS($notujuan,$isipesan,$userkey,$passkey);
if($kirim=='1'){
   echo 'Sukses';
}else{
   echo 'Gagal';
}
?>
