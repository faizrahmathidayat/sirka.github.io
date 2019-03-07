<?php
$id= $_GET['id_tahun'];
$query= "select * from tahun where id_tahun='$id'";
$sql= mysql_query($query);
$data = mysql_fetch_array($sql);
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
         <li class="active">Data Anggota</a></li>
      </ol>
      &nbsp;&nbsp;<a href="pages/print_laporan.php?id=<?php echo $data['id_tahun']; ?>"><button type="button" class="btn btn-primary btn-lg-succes">Export To Excel</button></a>
      <br>
      <br>
      <!DOCTYPE html>
      <html>
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Data Tables</title>

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
                    <th>Kebersihan</th>
                    <th>Gedung</th>
                    <th>Bukan Gedung</th>
                    <th>Biaya Cetak</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <?php
                    $query=mysql_query("select * from sekolah,anggarantahun where id_tahun='".$data['id_tahun']."'")or die(mysql_error());
                        $no=1;
                      while ($data = mysql_fetch_array($query)){
                     ?>
                    <td align="center"><?php echo $no;?></td>
                    <td><?php echo $data['tempattugas'];?></td>
                    <td><?php echo  $data['jmlsiswa'];?></td>
                    <td><?php echo  $data['jmlanggaran'];?></td>
                    <td><?php echo  $data['dana1'];?></td>
                    <td><?php echo  $data['dana2'];?></td>
                    <td><?php echo  $data['dana3'];?></td>
                    <td><?php echo  $data['dana4'];?></td>
                    <td align="center"><a href="pages/detail_perbulan.php?id_anggarantahun=<?php echo $data['id_anggarantahun']; ?>"  data-toggle="modal" data-target="#myModal" title="Lihat"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                    </td>
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
                  </tbody>
          </table>

        <script>
        $(document).ready(function() {
      $('#tabel-data').DataTable( {
        scrollY:        '65vh',
      scrollCollapse: false,
      } );
  } );
        </script>
        <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Detail Perbulan</h4>
                        </div>
                        <div class="modal-body">
                            <div class="fetched-data"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                        </div>
                    </div>
                </div>
            </div>

            <script language="javascript">
            $('body').on('hidden.bs.modal', '.modal', function () {
                $(this).removeData('bs.modal');
            });
          </script>

      </body>
      </html>

   </div>
