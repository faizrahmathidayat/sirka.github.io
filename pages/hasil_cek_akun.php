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
include '../koneksi.php';
$name= $_POST['regist']; //get the nama value from form
$q = "SELECT * from sekolah where noregist like '%$name%' ";  //query to get the search result
$result = mysql_query($q); //execute the query $q
while ($dataTampil = mysql_fetch_array($result))  {
 ?>
 <table class="table table-bordered">
                  <th colspan="4" class="info" >Calon Anggota</th>

               <tr>
               <td align="center" rowspan="9" ><?php echo "<img class=media-obect src='../foto_anggota/".$dataTampil['sk']."' width='220px' height='300px' float='left'/>"?></td>
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
          <?php
        }
         ?>
</body>
</html>
