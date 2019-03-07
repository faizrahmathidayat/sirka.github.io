<style>
div.dataTables_wrapper {
        padding-left: 10px;
        width: 1095px;
        margin: 0 auto;
    }
</style>
    <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="?p=home">Home</a></li>
         <li class="active">Data Tahun Anggaran</a></li>
      </ol>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-primary" data-target="#dialog-barang" data-toggle="modal">Tambah</a>
      <br>
      <br>

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
                    <th>Tahun Anggaran</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <?php
                    $query=mysql_query("select * from tahun order by tahun")or die(mysql_error());
                        $no=1;
                      while ($data = mysql_fetch_array($query)){
                     ?>
                    <td align="center"><?php echo $no;?></td>
                    <td align="center"><?php echo $data['tahun'];?></td>
                    <td align="center">
                    <a href="index_admin.php?p=detail_laporan&id_tahun=<?php echo $data['id_tahun']; ?>" class="btn btn-primary" title="Lihat"><span class="glyphicon glyphicon-eye-open" ></span></a>
                    <a href="#" class='btn btn-warning open_modal' id='<?php echo $data['id_tahun']; ?>' title="Ubah"><span class="glyphicon glyphicon-edit" ></span></a>
                    <a href="#" class='btn btn-danger open_delete' id='<?php echo $data['id_tahun']; ?>' title="Hapus"><span class="glyphicon glyphicon-trash"></span></a>
                  </td>
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
                  </tbody>
          </table>

      <div class="modal fade" id="dialog-barang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Tahun</h4>
                    </div>
                    <div class="modal-body">
                      <form action="?p=proses_tambah_tahun" class="form-horizontal" method="POST" id="form-save">
                                <div class="form-group">
                                <label class="col-lg-3 control-label">Tahun</label>
                                    <div class="col-lg-5">
                                        <input style="width: 210px;"  class="form-control" type="text" name="tahun"/>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Keluar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        </div>

        <div id="ModalDelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        </div>
        <script type="text/javascript">
            $(document).ready(function (){
                $(".open_modal").click(function (e){
                    var m = $(this).attr("id");
                    $.ajax({
                        url: "?p=edit_tahun",
                        type: "GET",
                        data : {id_tahun: m,},
                        success: function (ajaxData){
                            $("#ModalEdit").html(ajaxData);
                            $("#ModalEdit").modal('show',{backdrop: 'true'});
                        }
                    });
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function (){
                $(".open_delete").click(function (e){
                    var m = $(this).attr("id");
                    $.ajax({
                        url: "?p=delete_tahun",
                        type: "GET",
                        data : {id_tahun: m,},
                        success: function (ajaxData){
                            $("#ModalDelete").html(ajaxData);
                            $("#ModalDelete").modal('show',{backdrop: 'true'});
                        }
                    });
                });
            });
        </script>
        <script type="text/javascript">
                    $(document).ready(function() {
                        $('#form-save')
                            .bootstrapValidator({
                                message: 'This value is not valid',
                                feedbackIcons: {
                                    valid: 'glyphicon glyphicon-ok',
                                    invalid: 'glyphicon glyphicon-remove',
                                    validating: 'glyphicon glyphicon-refresh'
                                },
                                fields: {
                                    tahun: {
                                        message: 'The username is not valid',
                                        validators: {
                                            notEmpty: {
                                                message: 'Nama Barang tidak boleh kosong'
                                            },
                                            stringLength: {
                                                min: 5,
                                                max: 30,
                                                message: 'Panjang minimal 5 karakter dan panjang maksismu 30 karakter'
                                            }
                                        }
                                    },
                                    jumlah: {
                                        message: 'The username is not valid',
                                        validators: {
                                            notEmpty: {
                                                message: 'Jumlah Barang tidak boleh kosong'
                                            },
                                            digits: {
                                                message: 'anda harus memasukkan angka'
                                            }
                                        }
                                    }
                                }
                            });
                        });
                </script>

                        <script>
                        $(document).ready(function() {
                      $('#tabel-data').DataTable( {
                        scrollY:        '65vh',
                      scrollCollapse: false,
                      } );
                  } );
                        </script>
          <!-- <script language="javascript">
          $('body').on('hidden.bs.modal', '.modal', function () {
              $(this).removeData('bs.modal');
          });
        </script> -->

      </body>
      </html>

   </div>
