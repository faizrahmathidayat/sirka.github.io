<?php
include "../koneksi.php";
session_start();
$q=mysql_query("select * from admin where username='".$_SESSION['username']."'");
$b=mysql_fetch_array($q);
?>

<!doctype>
<html lang='ind'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="assets/css/styles-menu-admin.css">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/css/bootstrap.css">
   <link rel="stylesheet" href="assets/css/font-awesome.min.css">
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/script.js"></script>
   <title>Admin</title>
</head>
<body>
   <div class="col-md-2 colmenu" style="padding:0;">
      <div class="col-md-12" style="padding:10px;"><center><img src="assets/images/profil.jpg" alt="" height="100px" width="100px"></center></div>
      <div class="col-md-12" style="padding:5px;padding-bottom:10px;color:#fff;"><center><?php echo $b['nama']; ?></center></div>
         <?php include "menu.php"; ?>
   </div>
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

   <div class="col-md-12" style="background:#1682ba;padding:8px;color:#fff;"><center>create by <a href="#" style="color:#fff">UPTCibodas</a> &copy 2018</center></div>
</body>
<html>
