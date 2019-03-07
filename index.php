<?php
include"koneksi.php";
?>
<html>
<head>
	<title>SI-RKA
</title>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="css/js/jquery.js"></script>
	<script type="text/javascript" src="css/js/bootstrap.js"></script>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
		<style type="text/css">

		body {

			/*background-image: url('images/background-awani.jpg');*/
			background: white;
		}


			div {
				float:
			}
			.header {
				/*background: linear-gradient(90deg,  #00BFFF,#1E90FF);
				 /*background:-webkit-linear-gradient(top,black 0%,red 75%);
     background:-moz-linear-gradient(top,black 0%,red 75%);
     background:-o-linear-gradient(top,black 0%,red 75%);
     background:-ms-linear-gradient(top,black 0%,red 75%);*/
				background-image: url('images/header-3.png');
				height: 250px;
				/* width: 100%; */
				color: white;

			}

			.content {
				background: white;
				height:1300px;
				color: #222;
				padding-left: 10px;
				padding-top: 5px;
				padding-bottom: 10px;
				text-align: left;
				overflow: auto;
				border-top:  5px ;
				border-bottom:  5px ;
				border-right: #000 3px solid;
			}
			.right {
				background: white;
				color:#222;
				padding-top: 10px;
				margin-top: 2px;
				margin-left: 0px;
				text-align: left;
				width: 380px;
				overflow: auto;
				border-top: 5px;
				border-bottom: 5px;
			}
			.footer {
				background:#221;
				height:150px;
				color:white;
				padding: 70px;
				margin-left: 0px;
				border-top: 5px;
			}
		</style>
	</head>
<body>
  <link rel="icon" href="images/tng-icon.png">
<!-- <div class="container"> -->
<div class="header">
<img src="images/logo-tng.png" width="250" height="230" align="left" style="margin: 10px;">
<br><br>
	<font style="font-size: 55px; color: white; font-weight: bold; margin-top: 20px">SI-RKA</font><br>
	<font style="font-size: 30px; color: white; font-weight: bold; font-style: italic; ">Sistem Informasi Rencana Kerja dan Anggaran (RKA - BOP)</font><br>
	<p style="font-size: 15px;color: white; font-weight: bold; ">Kota Tangerang<br>

				Telp     : -<br>
				Kode Pos : 15138</p>
</div>
			<?php
			session_start();
			if (!isset($_SESSION['noregist'])){
			include 'navigasi.php';
			} else {
				include'nav-login.php';
			}
			?>
<div class="col-xs-8" style="background: white;">
<?php
            $pages_dir = 'pages';
            if(!empty($_GET['p'])){
                $pages = scandir($pages_dir, 0);
                unset($pages[0], $pages[1]);

                $p = $_GET['p'];
                if(in_array($p.'.php', $pages)){
                    include($pages_dir.'/'.$p.'.php');
                } else {
                    echo 'Halaman tidak ditemukan! :(';
                }
            } else {
                include($pages_dir.'/home.php');
            }
      ?>

</div>
<div class="col-xs-4" style="background:white; border-left: #eee 5px solid; margin-top: 0px; " >
<?php
                $pagesright = 'pages-right';
                if(!empty($_GET['pg'])){
                $pagesright = scandir($pagesright, 0);
                unset($login[0], $pagesright[1]);

                $pagesright = $_GET['pg'];
                if(in_array($l.'.php', $pagesright)){
                include($pagesright.'/'.$l.'.php');
                } else {
                echo 'Hello';
                }
                } else {
                include($pagesright.'/right.php');
                }
            ?>
</div>
<div class="col-xs-12 footer" >
<center>Copyright @ UPT Cibodas 2018
<br>
<?php
if (!isset($_SESSION['noregist'])){
echo "<a href=admin/ style=color: white; text-decoration: bold; text-align: center; >Admin</a></center>";
} else {
	echo "";
}
?>
</div>
</body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5af435c05f7cdf4f053407d5/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>
