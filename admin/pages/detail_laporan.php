<?php
$id= $_GET['id_tahun'];
$sqlTampil="select * from tahun where id_tahun='$id'";
$qryTampil=mysql_query($sqlTampil);
$data1 = mysql_fetch_array($qryTampil);
?>
<style>
div.dataTables_wrapper {
        width: 1095px;
        margin: 0 auto;
    }
</style>
    <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="?p=home">Home</a></li>
         <li><a href="?p=rekap_laporan">Data Tahun Anggaran</a></li>
         <li class="active">Tahun Anggaran </a><?php echo  $data1['tahun'];?></li>
      </ol>
      &nbsp;&nbsp;&nbsp;&nbsp;<a href="pages/print_laporan.php?id=<?php echo $id; ?>"><button type="button" class="btn btn-primary btn-lg-succes">Export To Excel</button></a>
      <a href="?p=rekap_laporan"><button type="button" class="btn btn-default btn-lg-succes">Kembali</button></a>
      <br>
      <br>
      <!DOCTYPE html>
      <html>
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
      </head>
      <body>
        <table id="tabel-data" class="table table-bordered display" width="100%" cellspacing="0">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Sekolah</th>
                    <th>Jumlah Siswa</th>
                    <th>Jumlah Anggaran</th>
                    <th>Belanja Peralatan Kebersihan dan Alat Pembersih</th>
                    <th>Belanja Pemeliharaan Gedung</th>
                    <th>Belanja Pemeliharaan Bukan Gedung</th>
                    <th>Biaya Cetak dan Penggandaan</th>
                    <th>Belanja Penggandaan</th>
                    <th>Belanja Jasa Pelayanan Pendidikan</th>
                    <th>Selisih</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <?php
                    $query=mysql_query("select * from sekolah,anggarantahun where id_tahun='$id' and sekolah.noregist=anggarantahun.noregist")or die(mysql_error());
                    if(mysql_num_rows($query) == 0){
                      echo '<tr><td colspan="12" align="center">Data Tidak Ada</td></tr>';
                    }else{
                    $no=1;
                    while ($data = mysql_fetch_assoc($query)){
                     ?>
                    <td align="center"><?php echo $no;?></td>
                    <td align="center"><?php echo  $data['tempattugas'];?></td>
                    <td align="center"><?php echo  $data['jmlsiswa'];?></td>
                    <td align="center"><?php echo  $data['jmlanggaran'];?></td>
                    <td align="center"><?php echo  $data['dana1'];?></td>
                    <td align="center"><?php echo  $data['dana2'];?></td>
                    <td align="center"><?php echo  $data['dana3'];?></td>
                    <td align="center"><?php echo  $data['dana4'];?></td>
                    <td align="center"><?php echo  $data['dana5'];?></td>
                    <td align="center"><?php echo  $data['dana6'];?></td>
                    <td align="center"><?php echo  $data['selisih'];?></td>
                    <td align="center"><a href="#" class='btn btn-primary open_modal' title='Detail' id='<?php echo $data['id_anggarantahun']; ?>'><span class="glyphicon glyphicon-eye-open"></span></a>
                    </td>
                    </tr>
                    <?php
                    $no++;
                  }
                    }
                    ?>
                  </tbody>
          </table>
          <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          </div>

                  <script type="text/javascript">
                      $(document).ready(function (){
                          $(".open_modal").click(function (e){
                              var m = $(this).attr("id");
                              $.ajax({
                                  url: "?p=detail_perbulan",
                                  type: "GET",
                                  data : {id_anggarantahun: m,},
                                  success: function (ajaxData){
                                      $("#ModalEdit").html(ajaxData);
                                      $("#ModalEdit").modal('show',{backdrop: 'true'});
                                  }
                              });
                          });
                      });
                  </script>

  <script src="assets/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script src="assets/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
  <script src="assets/datatables/js/jquery.dataTables.js" type="text/javascript"></script>
  <script src="assets/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
  <script>
  $(document).ready(function() {
$('#tabel-data').DataTable( {
  "scrollY": 340,
  "scrollX": true
} );
} );
  </script>
      </body>
      </html>

   </div>
