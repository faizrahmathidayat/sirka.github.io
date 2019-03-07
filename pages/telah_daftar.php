<html>
<style type="text/css">

      .table{
  width: 100%;
  font-size: 17px;
  background: #eee;
}

.table th{
  text-align: center;
  font-size: 20px;

}

    </style>

<body>
<?php
$regist=$_GET['noregist'];
$sqlTampil="select * from sekolah Where noregist='$regist'";
      $qryTampil=mysql_query($sqlTampil);
      $dataTampil=mysql_fetch_array($qryTampil);
?>
<hr>
<hr>
 <div class="alert alert-info" role="alert"> <h3>Selamat Datang Di SI-RKA</h3> <span class="glyphicon glyphicon-info-sign"></span> Silahkan Klik <b><a href="login.php">LOGIN</a></b> Bila Akun anda sudah aktif <br>
					 * Apa bila sudah lebih dari 3 hari akun anda belum aktif, silahkan hub: 089652527378 (Faiz)<br>
					 * Informasi Akan di Update 24 jam sekali</i><br>
           * Silakan Konfirmasi Via Chat <a href="https://api.whatsapp.com/send?phone=6289652527378&amp;text=Operator%20SDN...........%20Sudah%20Melakukan%20Registrasi" target="blank">Whatsapp</a></i><br>
					 * Silahkan Login Menggunakan NIK anda : <b><?php echo $dataTampil['noregist'];?></b></div>

 <table class="table table-bordered">
                  <th colspan="4" class="info" >Calon Anggota</th>

               <tr>
               <td align="center" rowspan="9" ><?php echo "<img class=media-obect src='foto_anggota/".$dataTampil['sk']."' width='220px' height='300px' float='left'/>"?></td>
                 <td>No Registrasi</td>
                 <td align="center" >:</td>
               <td><?php echo $dataTampil['noregist'];?></td>
            </tr>
            <tr>
              <td>Nama Operator</td>
                  <td align="center" >:</td>
               <td><?php echo $dataTampil['namaoperator'];?></td>
               </tr>
            <tr> <td>Tempat Tugas</td>
            <td align="center" >:</td>
               <td><?php echo $dataTampil['tempattugas'];?></td></tr>
            </tr>
             <tr> <td>Alamat Sekolah</td>
              <td align="center" >:</td>
               <td><?php echo $dataTampil['alamatsekolah'];?></td></tr>
            </tr>
             <tr> <td>No Telpon</td>
              <td align="center" >:</td>
               <td><?php echo $dataTampil['tlp'];?></td></tr>
            </tr>
             <tr> <td>Email</td>
              <td align="center" >:</td>
               <td><?php echo $dataTampil['email'];?></td></tr>
            </tr>
             <tr> <td>Status</td>
              <td align="center" >:</td>
               <td><b><?php echo $dataTampil['status'];?></b></td></tr>
            </tr>
            </table>

</body>
</html>
