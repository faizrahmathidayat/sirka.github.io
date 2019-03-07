!DOCTYPE html>
<html lang="en">
<!-- 
Judul  : Validasi Dengan PHP dan Bootstrap
Level  : Basic
Author : Hakko Bio Richard
Email  : hakkobiorichard@gmail.com
Web    : www.hakkoblogs.com  / www.niqoweb.com
Untuk tutorial yang lain silahkan kunjungi www.hakkoblogs.com.
-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Validasi Form dengan PHP dan Bootstrap 3</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://www.hakkoblogs.com">Hakko Blog's</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://www.hakkoblogs.com">Pemrograman</a></li>
            <li><a href="http://www.hakkoblogs.com">Tutorial</a></li>
            <li><a href="http://www.hakkoblogs.com">Template</a></li>
            <!--<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>-->
          </ul>
          <!--<ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>-->
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      
<?php
//    mengatur error nip menjadi blank
    $error_nim = "";
 
//dijalankan jika tombol submit ditekan
if(isset($_POST['submit'])){
//    menangkap $post nip dan mengamankan inputan dengan fungsi
//    trim, htmlspecialchars dan stripslashes
    $nim = htmlspecialchars(stripslashes(trim(($_POST['nim']))));
    
//    nip tidak boleh kosong
    if($nim == ""){
        $error_nim= "<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                NIM tidak boleh kosong
                </div>";
    }else{
//        nip harus 18 karakter. menggunakan fungsi strlen untuk
//        mengecek panjang karakter
        if(strlen($nim)<>10){
        $error_nim= "<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                NIM Harus 10 digit
                </div>";
        };
        
//        nip harus berupa angka. menggunakan fungsi is_numeric untuk
//        mengecek angka atau bukan
        if(!is_numeric($nim)){
            $error_nim= "<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                NIM Harus berupa angka
                </div>";
        };
    };
    
//    jika error nip blank (artinya tidak ada kesalahan)
    if($error_nim === ""){
//    proses query disini, pada contoh ini hanya 
//    menampilkan pesan lolos validasi
        echo "<div class='alert alert-success alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                Sukses Di Input
                </div>";
    };
    
}
?>
 <div class="col-lg-12">
    <div class="panel panel-success">
        <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Data Mahasiswa </h3> 
                </div>
                <div class="panel-body">
                <!-- <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>-->
                <?php echo $error_nim; ?>
                <form action="index.php" method="post">
                <table>
                <tr>
                <td>NIM :</td> 
                <td><input type="text" placeholder="Masukan NIM Anda" name="nim" class="form-control" id="nim"/></td>
                <td><input type="submit" name="submit" class="btn btn-sm btn-primary" value="simpan" /></td>
                </tr>
                </table>
                </form>
                </div>
                </div>
    
    </div>
    </div>
    </div> <!-- /container -->

<center><a href="http://www.hakkoblogs.com">Hakko Bio Richard &copy; 2015</a></center>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>