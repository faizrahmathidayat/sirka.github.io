  <?php  
       
      $sqlTampil="select * from NIK Where NIK='$_GET[NIK]' "; 
      $qryTampil=mysql_query($sqlTampil); 
      $dataTampil=mysql_fetch_array($qryTampil); 
     ?> 

 <style type="text/css">
      
      .table{
  width: 60%;
  font-size: 15px;
}

.table th{
  text-align: center;
  background-color:  #eee;
}
.table tr{
  text-align: ;

}
    </style>

    <div class="col-md-10" style="padding:0px margin-bottom10px; ">
      <ol class="breadcrumb" style="margin-bottom:20px;border-radius:0;">
         <li><a href="?p=user">Data Anggota</a></li>
         <li class="Active">Jadikan Anggota</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px;">

<?php
$query="SELECT max(NIK) as maxKode FROM anggota";
$hasil = mysql_query($query);
$data=mysql_fetch_array($hasil);
$kodebarang=$data['maxKode'];

$noUrut=(int) substr($kodebarang,3,3);
$noUrut++;
$char="AWN";
$newID=$char . sprintf("%03s",$noUrut);
?>



            <table class="table table-bordered">
               <tr>
                  <th colspan="4" class="info">Calon Anggota</th>
               </tr>
               <tr>
               <td align="center" rowspan="8" ><?php echo "<img class=media-obect src='../foto_anggota/".$dataTampil['gambar']."' width='220px' height='300px' float='left'/>"?></td>
                 <td>NIK</td>
                 <td>:</td>
               <td><?php echo $newID; ?></td>
            </tr>
            <tr>
              <td>Nama</td>
                 <td>:</td>
               <td><?php echo $dataTampil['nama_pendaftar'];?></td>
               </tr>
            <tr> <td>Tempat Lahir</td>
            <td>:</td>
               <td><?php echo $dataTampil['tmpt_lahir'];?></td></tr>
            </tr>
             <tr> <td>Tanggal Lahir</td>
             <td>:</td>
               <td><?php echo date('d-M-Y',strtotime($dataTampil['tgl_lahir'])) ;?></td></tr>
            </tr>
             <tr> <td>Jenis Kelamin</td>
             <td>:</td>
               <td><?php echo $dataTampil['jns_kelamin'];?></td></tr>
            </tr>
             <tr> <td>Alamat</td>
             <td>:</td>
               <td><?php echo $dataTampil['alamat'];?></td></tr>
            </tr>
             <tr> <td>No Telpon</td>
             <td>:</td>
               <td><?php echo $dataTampil['no_tlp'];?></td></tr>
            </tr>
             <tr> <td>Email</td>
             <td>:</td>
               <td><?php echo $dataTampil['email'];?></td></tr>
            </tr>
            </table>
            </div>

<a href="sms:/* 085648131722 */?body=/* Sudah Aktif */">Kirim SMS Ke saya</a>


