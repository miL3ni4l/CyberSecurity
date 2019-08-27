<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Social Network Wine Community by Studio 7 Designs</title>
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
	<?php
	include("konek.php");
	?>
<!-- wrapper -->
<div class="rapidxwpr floatholder">

  <!-- header -->
  <div id="header">
  
    <!-- logo -->
    <a href="index.html"><img id="logo" class="correct-png" src="images/logo.png" alt="Home" title="Home" /></a>
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
              <!-- wine reviews -->
              <div class="wine_reviews">
                <h3>Tahukah Kamu?</h3>
				<ul>
				<?php
				$ambil=mysqli_query($c,"select*from tahukah_kamu order by id desc");
				while($data=mysqli_fetch_array($ambil)) {			
                echo "
                  <li>
                    <div class=\"reviews_imgborder\">
                      <div class=\"reviews_img\"><img src=\"images/reviews_img.jpg\" alt=\"\" /><a href=\"\" class=\"reviews_link\">Italylover</a></div>
                    </div>
                    <div class=\"reviews_detail\"><span class=\"date\">$data[waktu]</span>
                      <h4><a href=mod.php?kategori=tahukah_kamu&id=$data[id]>$data[judul]</a></h4>
                      <span class=\"title\">Dipostkan oleh $data[author]</span>
                      <p>$data[artikel]</p>
                      <span class=\"tags\">&nbsp</span>
                    </div>
                  </li>";
				  }
                  ?>
                </ul>
              </div>
              <!-- / wine reviews -->
            
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
  </div>
  <!-- footermenu -->
</div>
<!-- / footer -->

</body>
</html>