<?php 
		if(isset($_SESSION['paswd'])) {
		include("konek.php");
		if(isset($_POST['submit'])) {
		$nama=$_POST['nama'];
		$alamat=$_POST['alamat'];
		$pesan=$_POST['pesan'];
		$kode=$_POST['kode'];
		$pattern=$_POST['asd'];
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Informasimu: Perkaya Wawasanmu dan Imajinasimu!</title>
  <meta name="robots" content="index, follow" />
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="author" content="RapidxHTML" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <!--[if lte IE 7]><link href="css/iehacks.css" rel="stylesheet" type="text/css" /><![endif]-->
  <script type="text/javascript" src="js/jquery.js"></script>
  <!--[if IE 6]>
  <script type="text/javascript" src="js/ie6pngfix.js"></script>
  <script type="text/javascript">
    DD_belatedPNG.fix('img, ul, ol, li, div, p, a, h1, h2, h3, h4, h5, h6, input, span');
  </script>
  <![endif]-->
</head>

<body id="page">
	
<!-- wrapper -->
<div class="rapidxwpr floatholder">

  <!-- header -->
  <div id="header">
    <!-- logo -->
    <a href="./"><img id="logo" class="correct-png" src="images/logo.png" alt="Beranda" title="Beranda" /></a>
    <!-- / logo -->
    
	<!-- loginform -->
    <div class="loginform">
     <img src="images/ad.jpg">
    </div>
    <!-- / loginform -->
	
  </div>
  <!-- / header -->
  
  <!-- menu -->
  <div id="menu">
  
    <div class="searchform">
      <form action="cari.php" method="GET">
        <ul>
          <li><input type="text" name="search" class="search-field" value="" /></li>
          <li><input type="submit" name="submit" class="search-submit" value="Cari" /></li>
        </ul>
      </form>
    </div>
    
    <!-- navigation -->
    <?php
	include("menu.php");
	?>
    <!-- / navigation -->
  
  </div>
  <!-- / menu -->
  
  <!-- main body -->
  <div id="middle">
    <div class="background layoutleft">
    
      <div id="main">
        <div id="main_container" class="clearingfix">
          <div id="mainmiddle" class="floatbox withright" >
          
            <!-- right column -->
            <div id="right">
              <div id="right_container" class="clearingfix">
              
                <!-- articles -->
                <div class="articles">
                  <img src="images/adspace.gif">
                </div>
                <!-- / articles -->
                
                              
                <!-- just recommended -->
                <div class="just_recommended">
                  <h5>Artikel Terbaru</h5>
                  <ul>
				  <?php
				  $recent=mysql_query("select*from _terbaru order by id desc limit 10");
				  while($recent_data=mysql_fetch_array($recent)) {
				  
                  echo "<li><a href=mod.php?kategori=$recent_data[kategori]&id=$recent_data[id_kategori]>$recent_data[judul]</a></li>";
                  }
				  ?>
				   
                  </ul>
                </div>
              
              </div>
            </div>
            <!-- / right column -->
            
            <!-- content column -->
            <div id="content">
            
              <!-- intro -->
              <div class="intro">
                <h3>Buku Tamu</h3>
				<p align="justify">
				<form action="mod.php?kategori=proses" method="post">
				<table>
				<tr><td>Nama*</td></tr>
				<tr><td><input type="text" name="nama" size="30"></td></tr>
				<tr><td>&nbsp;</td></tr>
				<tr><td>Email/Website*</td></tr>
				<tr><td><input type="text" name="alamat" size="20"></td></tr>
				<tr><td>&nbsp;</td></tr>
				<tr><td>Pesan*</td></tr>
				<tr><td>
				<textarea name="pesan" cols="50" rows="10"></textarea>
				</td></tr>
				<tr><td>&nbsp;</td></tr>
				<tr><td>Masukkan Kode Verifikasi*</td></tr>
				<?php
				$acak=rand(0,999999);
				?>
				<tr><td><b><?php echo $acak; ?></b><input type="text" name="kode"><input type="hidden" name="asd" value="<?php echo $acak; ?>"></td></tr>
				<tr><td>&nbsp;</td></tr>
				<tr><td colspan="2"><input type="submit" name="submit" value="Simpan"></td></tr>
				</table>
				</form>
				</p>
				<p>
				*) harus diisi.
				</p>
				<p><a href="mod.php?kategori=lihatbukutamu">Lihat Buku Tamu</a></p>

				<?php
				if(($nama=="")||($alamat=="")||($pesan=="")||($kode!=$pattern)) {
					echo "<p><b>semua field harus diisi!</b></p>";
					}
					else if(($nama!="")&&($alamat!="")&&($pesan!="")&&($kode==$pattern)) {
					
					$masuk=mysql_query("insert into bukutamu values (NULL,'$nama','$alamat','$pesan')");
					 if($masuk) {
						echo "<p><b>pesan berhasil disimpan!</b></p>";
						}
						else echo "<p><b>pesan gagal disimpan</b></p>";
				}
				?>
               
                </div>
              <!-- / intro -->            
            </div>
            <!-- / content column -->
          
          </div>
        </div>
      </div>
    
    </div>
  </div>
  <!-- / main body -->

</div>
<!-- / wrapper -->

<!-- footer -->
<div id="footer" class="clearingfix">

  <!-- footermenu -->
  <div class="footermenu">
    <a href="http://studio7designs.com/contact-quote/">Design By STUDIO7DESIGNS</a>
    <ul>
    <li><a href="./">Awal</a></li>
        <li><a href="mod.php?kategori=tentang">Tentang</a></li>
        <li><a href="mod.php?kategori=disclaimer">Disclaimer</a></li>
        <li><a href="mod.php?kategori=bukutamu">Buku Tamu</a></li>
        <li><a href="mod.php?kategori=kontak">Kontak</a></li>
    </ul>
  </div>
  <!-- footermenu -->
  
</div>
<!-- / footer -->

</body>
</html>
<?php
}
}
else echo "halo gan";
?>