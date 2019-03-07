<?php
$q=mysql_query("select * from sekolah where noregist='".$_SESSION['noregist']."'");
$b=mysql_fetch_array($q);
?>
<nav class="navbar-inverse">
<div class="container">
	<div class="navbar-header">
		<a class="navbar-brand" href="index.php">UPT Cibodas</a>
	</div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li><a href="index.php?p=home">Home</a></li>
			<li><a href="index.php?p=daftar_laporan">Laporan</a></li>
			<li><a href="index.php?p=ubah_password">Ubah Password</a></li>
		</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $b['tempattugas']; ?></a></li>
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>
