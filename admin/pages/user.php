<style>
div.dataTables_wrapper {
        width: 1095px;
        margin: 0 auto;
    }
</style>
    <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="?p=home">Home</a></li>
         <li class="active">Data Sekolah</a></li>
      </ol>
      <!DOCTYPE html>
      <html>
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/datatables/css/dataTables.bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/datatables/css/jquery.dataTables.css">

      </head>
      <body>
        <table id="tabel-data" class="table table-bordered display" style="width:100%">
              <thead>
                  <tr>
                    <th>No</th>
                    <!-- <th>No Registrasi</th> -->
                    <th>Tempat Tugas</th>
                    <th>Nama Operator</th>
                    <th>Alamat Sekolah</th>
                    <th>No Telp</th>
                    <th>Surat Keterangan</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <?php
                    $query=mysql_query("select * from sekolah order by tempattugas")or die(mysql_error());
                        $no=1;
                      while ($data = mysql_fetch_array($query)){
                     ?>
                    <td align="center"><?php echo $no;?></td>
                    <!-- <td><a href=index_admin.php?p=update_status_aktif&noregist=$data[noregist] class="href"><?php echo $data['noregist'];?></a></td> -->
                    <td><?php echo  $data['tempattugas'];?></td>
                    <td><?php echo $data['namaoperator'];?></td>
                    <td><?php echo  $data['alamatsekolah'];?></td>
                    <td><?php echo  $data['tlp'];?></td>
                  <td align="center"><?php
                        echo "<a href='../foto_anggota/".$data['sk']."'> <img class=media-obect src='../foto_anggota/".$data['sk']."' width='200px' height='100px' float='left'/></a>";
                        ?></td>
                    <td align="center"> <?php if ($data['status'] == 'Tidak Aktif') {
                          echo "<a href=index_admin.php?p=update_status_aktif&noregist=$data[noregist] class='btn btn-danger'> $data[status]";
                    }  else {
                      echo "<a href=index_admin.php?p=sms class='btn btn-success'> $data[status]";
                      } ?>

                    <td align="center">
                    <a href="index_admin.php?p=deletesekolah&noregist=<?php echo $data['noregist']; ?>"  onclick="return confirm('Yakin mau di hapus?');" class="btn btn-danger"  title="Hapus"><span class="glyphicon glyphicon-trash" ></span></a></td>
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
                  </tbody>
          </table>
          <script src="assets/jquery-3.3.1.min.js" type="text/javascript"></script>
          <script src="assets/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
          <script src="assets/datatables/js/jquery.dataTables.js" type="text/javascript"></script>
          <script src="assets/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
          <script>
          $(document).ready(function() {
        $('#tabel-data').DataTable( {
          "scrollY": 450,
          "scrollX": true
        } );
        } );
          </script>
         </div>
      </body>
      </html>
