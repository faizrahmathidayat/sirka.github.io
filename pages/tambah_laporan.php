<?php
$q=mysql_query("select * from sekolah where noregist='".$_SESSION['noregist']."'");
$b=mysql_fetch_array($q);
?>
<html>
<head>
  <script language='javascript'>
function validAngka(a)
{
	if(!/^[0-9.]+$/.test(a.value))
	{
	a.value = a.value.substring(0,a.value.length-1000);
	}
}
</script>
 <script>
function startCalc(){
interval = setInterval("calc()",1);}
function calc(){
jmlsiswa = document.autoSumForm.jmlsiswa.value;
jmlanggaran = document.autoSumForm.jmlanggaran.value;
dana1 = document.autoSumForm.dana1.value;
dana2 = document.autoSumForm.dana2.value;
dana3 = document.autoSumForm.dana3.value;
dana4 = document.autoSumForm.dana4.value;
dana5 = document.autoSumForm.dana5.value;
dana6 = document.autoSumForm.dana6.value;
danaawal=document.autoSumForm.jmlanggaran.value = (jmlsiswa * 12 * 50000);
document.autoSumForm.selisih.value = (danaawal * 1) - (dana1 * 1) - (dana2 * 1) - (dana3 * 1) - (dana4 * 1) - (dana5 * 1) - (dana6 * 1);
dana1bulan=document.autoSumForm.dana1bulan.value = (dana1 / 12);
dana2bulan=document.autoSumForm.dana2bulan.value = (dana2 / 12);
dana3bulan=document.autoSumForm.dana3bulan.value = (dana3 / 12);
dana4bulan=document.autoSumForm.dana4bulan.value = (dana4 / 12);
dana5bulan=document.autoSumForm.dana5bulan.value = (dana5 / 12);
dana6bulan=document.autoSumForm.dana6bulan.value = (dana6 / 12);
document.autoSumForm.anggaranbulan.value = (dana1bulan) + (dana2bulan) + (dana3bulan) + (dana4bulan) + (dana5bulan) + (dana6bulan);}
function stopCalc(){
clearInterval(interval);}
</script>
  </head>
<body>
<form class="form-horizontal" method="POST" name='autoSumForm' enctype="multipart/form-data" action="pages/proses/proses_tambah_laporan.php">
<input type="hidden" name="noregist" value="<?php echo $b['noregist'];?>">
 <h1><span class="glyphicon glyphicon-save"></span>&nbsp;&nbsp;TAMBAH LAPORAN</h1>
     <hr>
     <hr>
     <strong>LAPORAN</strong>
	<div class="form-group">
      <label class="col-sm-4 control-label">Tahun : </label>
      <div class="col-lg-5">
        <select class="form-control background" name="id_tahun">
       <option value="">--PILIHAN--</option>
       <?php
       $sql = mysql_query("select * from tahun WHERE id_tahun");
       if(mysql_num_rows($sql) != 0){
        while($data = mysql_fetch_assoc($sql)){
           echo "<option value=$data[id_tahun]>$data[tahun]</option>";
        }
       }
       ?>
        </select>
        </div>
    </div>

    <div class="form-group">
      <label class="col-sm-4 control-label">Jumlah Siswa : </label>
      <div class="col-lg-5">
        <input class="form-control background" name="jmlsiswa" placeholder="0" type="number" onFocus="startCalc();" onBlur="stopCalc();" value="0">
        </div>
    </div>
    <strong>PENERIMAAN DANA</strong>
    <div class="form-group">
        <label class="col-sm-4 control-label">Anggaran : </label>
        <div class="col-lg-5">
        <input class="form-control background" name="jmlanggaran" type="number" onchange='tryNumberFormat(this.form.thirdBox);' readonly="readonly"/>
          </div>
      </div>

      <strong>PENGGUNAAN DANA PERKOMPONEN</strong>
      <div class="form-group">
      <label class="col-sm-4 control-label">1. Belanja Peralatan Kebersihan dan Bahan Pembersih : </label>
      <div class="col-lg-5">
        <input class="form-control background" name="dana1" type="text" placeholder="0" onkeyup="validAngka(this)" onFocus="startCalc();" onBlur="stopCalc();" value="0" />
        <input class="form-control background" name="dana1bulan" type="hidden" placeholder="0" onchange='tryNumberFormat(this.form.thirdBox);' value="0" />
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-4 control-label">2. Belanja Pemeliharaan Gedung : </label>
      <div class="col-lg-5">
        <input class="form-control background" name="dana2" type="text" onkeyup="validAngka(this)" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();" value="0" />
        <input class="form-control background" name="dana2bulan" type="hidden" placeholder="0" onchange='tryNumberFormat(this.form.thirdBox);' value="0" />
      </div>
    </div>

       <div class="form-group">
         <label class="col-sm-4 control-label">3. Belanja Pemeliharaan Bukan Gedung : </label>
         <div class="col-lg-5">
           <input class="form-control background" name="dana3" type="text" onkeyup="validAngka(this)" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();" value="0" />
           <input class="form-control background" name="dana3bulan" type="hidden" placeholder="0" onchange='tryNumberFormat(this.form.thirdBox);' value="0" />
         </div>
       </div>

       <div class="form-group">
         <label class="col-sm-4 control-label">4. Belanja Cetak dan Penggandaan : </label>
         <div class="col-lg-5">
           <input class="form-control background" name="dana4" type="text" onkeyup="validAngka(this)" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();" value="0" />
           <input class="form-control background" name="dana4bulan" type="hidden" placeholder="0" onchange='tryNumberFormat(this.form.thirdBox);' value="0" />
         </div>
       </div>

       <div class="form-group">
         <label class="col-sm-4 control-label">5. Belanja Penggandaan : </label>
         <div class="col-lg-5">
           <input class="form-control background" name="dana5" type="text" onkeyup="validAngka(this)" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();" value="0" />
           <input class="form-control background" name="dana5bulan" type="hidden" placeholder="0" onchange='tryNumberFormat(this.form.thirdBox);' value="0" />
         </div>
       </div>

       <div class="form-group">
         <label class="col-sm-4 control-label">6. Belanja Jasa Pelayanan Pendidikan : </label>
         <div class="col-lg-5">
           <input class="form-control background" name="dana6" type="text" onkeyup="validAngka(this)" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();" value="0" />
           <input class="form-control background" name="dana6bulan" type="hidden" placeholder="0" onchange='tryNumberFormat(this.form.thirdBox);' value="0" />
         </div>
       </div>

       <div class="form-group">
         <label class="col-sm-4 control-label"> Selisih : </label>
         <div class="col-lg-5">
           <input class="form-control background" name="selisih" type="number" onchange='tryNumberFormat(this.form.thirdBox);' readonly="readonly"/>
           <input class="form-control background" name="anggaranbulan" type="hidden" placeholder="0" onchange='tryNumberFormat(this.form.thirdBox);' value="0" />
         </div>
       </div>

       <!-- <div class="form-group">
         <label class="col-sm-4 control-label">Scan Kwitansi Penerimaan : </label>
         <div class="col-lg-5">
           <input type="file" id=image name="image">
         </div>
       </div> -->

<div class="form-group">
      <label class="col-sm-4 control-label"> </label>
      <div class="col-lg-5">
       <button type="submit" class="btn btn-success btn-lg">SUBMIT</button>&nbsp;
       <a href="index.php?p=daftar_laporan"><input  type="button" class="btn btn-danger btn-lg" value="BATAL"></button></a>
      </div>
    </div>
    </div>
</body>
</html>
