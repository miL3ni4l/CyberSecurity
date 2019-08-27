<?php session_start();

if(isset($_SESSION['paswd'])) {
include("konek.php");
$kategori=@$_GET['kategori'];
$menu=@$_GET['menu'];
$id=@$_GET[id];
	
				if(isset($id)) { 

				?>
				<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Informasimu: Perkaya Wawasanmu dan Imajinasimu!</title>  <meta name="robots" content="index, follow" />
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
    <a href="./"><img id="logo" class="correct-png" src="images/logo.png" alt="Home" title="Home" /></a>
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
                
                <!-- active member -->
              <!--  <div class="active_member">
                  <h5>Active Members</h5>
                  <ul>
                    <li>
                      <div class="active_img"><img src="images/active_img1.jpg" alt="" /></div>
                      <div class="active_link"><a href="">Vina Moda Winery</a></div>
                    </li>
                    <li>
                      <div class="active_img"><img src="images/active_img1.jpg" alt="" /></div>
                      <div class="active_link"><a href="">Vina Moda Winery</a></div>
                    </li>
                    <li>
                      <div class="active_img"><img src="images/active_img1.jpg" alt="" /></div>
                      <div class="active_link"><a href="">Vina Moda Winery</a></div>
                    </li>
                    <li>
                      <div class="active_img"><img src="images/active_img1.jpg" alt="" /></div>
                      <div class="active_link"><a href="">Vina Moda Winery</a></div>
                    </li>
                  </ul>
                </div>
                <!-- / active member -->
                
                <!-- just recommended -->
                <div class="just_recommended">
                  <h5>Artikel Terbaru</h5>
                  <ul>
				  <?php
				  $recent=mysqli_query($c,"select*from _terbaru order by id desc limit 10");
				  while($recent_data=mysqli_fetch_array($recent)) {
				  
                  echo "<li><a href=mod.php?kategori=$recent_data[kategori]&id=$recent_data[id_kategori]>$recent_data[judul]</a></li>";
                  }
				  ?>
				   
                  </ul>
                </div>
                <!-- / just recommended -->
                
                <!-- new wines -->
             <!--   <div class="new_wines">
                  <h5>New Wines</h5>
                  <ul>
                    <li><a href="">2003 Tobin James Paso Robles ?James Gang Reserve? Zinfandel</a></li>
                    <li><a href="">1997 Heitz Cellars Napa Valley Cabernet Sauvignon</a></li>
                    <li><a href="">1999 Tobin James Paso Robles ?James Gang Reserve? Zinfandel</a></li>
                    <li><a href="">2006 Macchia Lodi Old Vine Maley Vineyard Voluptuous Zinfandel</a></li>
                  </ul>
                </div>
                <!-- / new wines -->
              
			   <!-- new wines -->
           <!--     <div class="new_wines">
                  <h5>Social Network</h5>
                  <ul>
                    <li><a href="">2003 Tobin James Paso Robles ?James Gang Reserve? Zinfandel</a></li>
                    <li><a href="">1997 Heitz Cellars Napa Valley Cabernet Sauvignon</a></li>
                    <li><a href="">1999 Tobin James Paso Robles ?James Gang Reserve? Zinfandel</a></li>
                    <li><a href="">2006 Macchia Lodi Old Vine Maley Vineyard Voluptuous Zinfandel</a></li>
                  </ul>
                </div>
                <!-- / new wines -->			  
			  
              </div>
            </div>
            <!-- / right column -->
            
            <!-- content column -->
            <div id="content">
            
              <!-- intro -->
              <div class="intro">
			   <h3><?php 
			   if($kategori=="tahukah_kamu") {
			   echo "Tahukah Kamu?";
			   }else
			   echo ucwords($kategori); ?></h3>
				<?php
				$ambil=mysqli_query($c,"select*from $kategori where id=$id") or die(mysqli_error());
				$data=mysqli_fetch_array($ambil);
				?>
				<div class="reviews_detail"><span class="date"><?php echo "$data[waktu]";?></span>
                <span class="title">Dipostkan oleh <?php echo "$data[author]";?></span>
				<h3><?php echo "$data[judul]"; ?></h3>
                <p>
				<?php echo "$data[artikel_lengkap]"; ?>
				</p>
				
                </div>
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
        <li><a href="mod.php?kategori=kontak">Kontak</a></li>   </ul>
    </ul>
  </div>
  <!-- footermenu -->

</div>
<!-- / footer -->
</body>
</html>
						
				<?php
				}
				else 
				
                 if(!isset($kategori)) { 
echo "<h1>Permission denied</h1>";
}
else {
switch($kategori) {
	case 'tentang': include("_tentang.php");break;
	case 'disclaimer': include("_disclaimer.php");break;
	case 'bukutamu': include("_bukutamu.php");break;
	case 'kontak': include("_kontak.php");break;
	case 'logout': include("logout.php");break;
	case 'lounge': include("_lounge.php");break;
	case 'sains': include("_sains.php");break;
	case 'teknologi': include("_teknologi.php");break;
	case 'kesehatan': include("_kesehatan.php");break;
	case 'tahukah_kamu': include("_tahukah_kamu.php");break;
	case 'humor': include("_humor.php");break;
	case 'unik': include("_unik.php");break;
	case 'proses': include("proses.php");break;
	case 'lihatbukutamu': include("_lihatbukutamu.php");break;
	case 'cari': include("cari.php");break;


	default:include ($kategori);
}
}
}
else echo "halo gan";
?>