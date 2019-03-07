<?php

    include '../koneksi.php';
    $id_tahun = $_GET['id_tahun'];
    $query = mysql_query("select * from tahun where id_tahun='$id_tahun'");
    while($row=  mysql_fetch_array($query)){
?>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
          <div class="table-responsive">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title" id="myModalLabel">Hapus Tahun</h4>
            </div>

            <form class="form-horizontal" action="?p=proses_edit_tahun" name="modal-popup" enctype="multipart/form-data" method="POST">
              <input style="width: 200px;"  class="form-control" type="hidden" name="id_tahun" value="<?php echo $row['id_tahun']; ?>"/>
                                <div class="form-group">
                                <label class="col-lg-3 control-label">Tahun</label>
                                    <div class="col-lg-5">
                                        <input style="width: 200px;"  class="form-control" type="text" name="tahun" value="<?php echo $row['tahun']; ?>"/>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-warning">Ubah</button>
                                <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Keluar</button>
                                </div>
            </form>
            <?php
    }
            ?>

          </div>
        </div>
    </div>
</div>
