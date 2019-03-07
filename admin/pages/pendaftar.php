 <style type="text/css">
      
      .table{
  width: 100%;
  font-size: 12px;
}

.table th{
  text-align: center;
  background-color:  #eee;
}
    </style>

    <div class="col-md-10" style="padding:0px; margin-bottom: 10px;">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="?p=home">Home</a></li>
         <li class="active">Pendafar</a></li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
            <table class="table table-bordered">
               <tr>
                  <th class="info">No</th>

                  <th class="info">Nama</th>
                  <th class="info">Tempat Lahir</th>
                  <th class="info">Tanggal Lahir</th>
                  <th class="info" colspan="2">Action</th>
               </tr>
              <tr>
<?php
  
  $query=mysql_query("select * from anggota where NIK")or die(mysql_error());
  $no=1;
  while ($data = mysql_fetch_array($query)){
?>
<tr>
<td><?php echo $no;?></td>
<td><?php echo $data['nama_pendaftar'];?></td>
<td><?php echo  $data['tmpt_lahir'];?></td>
<td><?php echo date('d-M-Y', strtotime($data['tgl_lahir'])) ;?></td>
<td align="center"><a href="?p=jadikan_anggota&id_daftar=<?php echo $data['id_daftar']; ?>" class="btn btn-warning" title="Jadikan Anggota">Jadikan Anggota</a>
<a href="pages/delete_data_warga.php?no_rumah=<?php echo $data['no_rumah']; ?>"  onclick="return confirm('Yakin mau di hapus?');" class="btn btn-danger"  title="Hapus"><span class="glyphicon glyphicon-trash" ></span></a></td>
</tr>
<?php
$no++;
}
?>
            </table>
            <div class="col-md-12">
               <nav align="center">
                 <ul class="pagination">
                   <li>
                     <a href="#" aria-label="Previous">
                       <span aria-hidden="true">&laquo;</span>
                     </a>
                   </li>
                   <li><a href="#">1</a></li>
                   <li><a href="#">2</a></li>
                   <li><a href="#">3</a></li>
                   <li><a href="#">4</a></li>
                   <li><a href="#">5</a></li>
                   <li>
                     <a href="#" aria-label="Next">
                       <span aria-hidden="true">&raquo;</span>
                     </a>
                   </li>
                 </ul>
               </nav>

            </div>
   </div>