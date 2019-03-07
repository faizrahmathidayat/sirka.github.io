<?php
include '../koneksi.php';
$id_bulan = $_GET['id_anggarantahun'];
$tampil1 = mysql_query("select * from anggarantahun,sekolah where id_anggarantahun='$id_bulan' and sekolah.noregist=anggarantahun.noregist");
$data1 = mysql_fetch_array($tampil1);
 ?>
<div class="modal-dialog">
  <div class="modal-content">
        <div class="modal-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <?php
                    include '../koneksi.php';
                    $id = $_GET['id_anggarantahun'];
                    $tampil = mysql_query("select * from anggaranbulan where id_anggarantahun='$id'");

                    while($row=  mysql_fetch_array($tampil)){
                ?>
              <tr>
              <th class="info" colspan="4"><center>Details Perbulan <?php echo $data1['tempattugas']; ?></center></th>
              </tr>
              <tr>
              <td><center><strong>Uraian</strong></center></td>
              <td></td>
              <td><center><strong>Jumlah Anggaran</strong></center></td>
              </tr>
    <tr>
    <td>Belanja Peralatan Kebersihan dan Alat Pembersih</td>
    <td>:</td>
    <td>Rp. <?php echo number_format($row['dana1bulan']);?></td>
    </tr>
    <tr>
    <td>Belanja Pemeliharaan Gedung</td>
    <td>:</td>
    <td>Rp. <?php echo number_format($row['dana2bulan']);?></td>
    </tr>
    <tr>
    <td>Belanja Pemeliharaan Bukan Gedung</td>
    <td>:</td>
    <td>Rp. <?php echo number_format($row['dana3bulan']);?></td>
    </tr>
    <tr>
    <td>Biaya Cetak dan Penggandaan</td>
    <td>:</td>
    <td>Rp. <?php echo number_format($row['dana4bulan']);?></td>
    </tr>
    <tr>
    <td>Belanja Penggandaan</td>
    <td>:</td>
    <td>Rp. <?php echo number_format($row['dana5bulan']);?></td>
    </tr>
    <tr>
    <td>Belanja Jasa Pelayanan Pendidikan</td>
    <td>:</td>
    <td>Rp. <?php echo number_format($row['dana6bulan']);?></td>
    </tr>
    <tr>
    <td><strong>Total Anggaran Perbulan</strong></td>
    <td>:</td>
    <td><strong>Rp. <?php echo number_format($row['total']);?></strong></td>
    </tr>
    <?php
}
     ?>
</table>
<div class="modal-footer">
<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
</div>
</div>
</div>
</div>
</div>
