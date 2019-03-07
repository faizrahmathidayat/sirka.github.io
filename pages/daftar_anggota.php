<html>
<head>
<style type="text/css">
.table{
	width: 70%;
}

.textarea{
	width: 100%;
	height: 120px;
}

.select {
	margin:2px;
}
</style>
  <script type="text/javascript">
        function readURL(input) { // Mulai membaca inputan gambar
if (input.files && input.files[0]) {
var reader = new FileReader(); // Membuat variabel reader untuk API FileReader

reader.onload = function (e) { // Mulai pembacaan file
$('#preview_gambar') // Tampilkan gambar yang dibaca ke area id #preview_gambar
.attr('src', e.target.result)
.width(200); // Menentukan lebar gambar preview (dalam pixel)
//.height(200); // Jika ingin menentukan lebar gambar silahkan aktifkan perintah pada baris ini
};

reader.readAsDataURL(input.files[0]);
}
}
</script>
</head>
<body>
<?php
$query="SELECT max(noregist) as maxKode FROM sekolah";
$hasil = mysql_query($query);
$data=mysql_fetch_array($hasil);
$kodebarang=$data['maxKode'];

$noUrut=(int) substr($kodebarang,3,3);
$noUrut++;
$char="UPT";
$newID=$char . sprintf("%03s",$noUrut);
?>

<form method="POST" action="pages/proses/proses_daftar_anggota.php"  enctype="multipart/form-data">
<input type="hidden" name="status" value="Tidak Aktif">
<center>
<h2>Daftar Operator</h2>
<br>
<div class="table-responsive">
<table class="table">
<tr>
  <td>No Registrasi</td>
  <td>:</td>
  <td><input class="form-control background"  name="regist" id="nama" type="text" placeholder="" readonly="readonly" value="<?php echo $newID; ?>"></td>
  </tr>
  <tr>
   <td>Password</td>
  <td>:</td>
  <td><input class="form-control background"  name="password" id="nama" type="password" placeholder="Password"></td>
</tr>
<tr>
<td>Nama Operator</td>
<td>:</td>
<td>
 <input class="form-control background"  name="nama" id="nama" type="text" placeholder="Nama Lengkap" >
 </td>
 </tr>

<tr>
<td>Tempat Tugas</td>
<td>:</td>
<td>
	       <select class="form-control background" name="tempattugas">
	       <option>SD Negeri Cibodas 1</option>
	       <option>SD Negeri Cibodas 2</option>
	       <option>SD Negeri Cibodas 4</option>
	       <option>SD Negeri Cibodas 5</option>
	       <option>SD Negeri Cibodas 6</option>
	       <option>SD Negeri Cibodas 8</option>
	       <option>SD Negeri Cibodas 9</option>
	       <option>SD Negeri Jati 3</option>
	       <option>SD Negeri Jati 4</option>
	       <option>SD Negeri Panunggangan 1</option>
	       <option>SD Negeri Panunggangan 2</option>
	       <option>SD Negeri Panunggangan 3</option>
				 <option>SD Negeri Panunggangan 4</option>
				 <option>SD Negeri Parapat 1</option>
	       <option>SD Negeri Parapat 2</option>
	       <option>SD Negeri Parapat 3</option>
				 <option>SD Negeri Parapat 4</option>
				 <option>SD Negeri Perumnas 1</option>
	       <option>SD Negeri Perumnas 2</option>
	       <option>SD Negeri Perumnas 3</option>
				 <option>SD Negeri Perumnas 5</option>
				 <option>SD Negeri Perumnas 7</option>
				 <option>SD Negeri Perumnas 9</option>
				 <option>SD Negeri Rama 1</option>
				 <option>SD Negeri Rama 2</option>
				 <option>SD Negeri Uwung Jaya</option>
	        </select>

 </td>
 </tr>

 <tr>
<td>Alamat Sekolah</td>
<td>:</td>
<td>
<textarea class="textarea" name="alamat" placeholder="Alamat Sekolah"></textarea>
 </td>
 </tr>

 <tr>
<td>No Tlp</td>
<td>:</td>
<td>

 <SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))

    return false;
    return true;
    }
    </SCRIPT>

 <input class="form-control background"  name="tlp" type="text" placeholder="Telepon"  maxlength="13" onkeypress="return isNumberKey(event)">
 </td>
 </tr>

<tr>
<td>Email</td>
<td>:</td>
<td>
 <input class="form-control background"  name="email" type="email" placeholder="example@example" >
 </td>
 </tr>

<tr>
<td>Surat Tugas</td>
<td>:</td>
<td><input type="file" name="image" accept="image/*" class="file" onchange="readURL(this);"><br><br>
        <img id="preview_gambar" src="#" alt="picture">

</td>
</tr>

 </table>
</div>
<div class="form-group">
      <label class="col-sm-4 control-label"> </label>
      <div class="col-lg-5">
       <input type="submit" class="btn btn-success btn-lg" value="Daftar"></button>&nbsp;
       <a href="index.php"><input  type="button" class="btn btn-danger btn-lg" value="Cancel"></button></a>
      </div>
    </div>
 </center>
 </form>
</body>
</html>
