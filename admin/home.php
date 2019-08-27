<?php session_start();?>
<style type="text/css">
td {
	border : 1px dashed #000;
	font-family : tahoma,arial,verdana;
	font-size   : 13px;
	  
}
td:hover {
	background : #d0d0d0;
	
}

body {
	font-family : tahoma,arial,verdana;
	font-size   : 16px;
	  
}

judul {
	font-family : tahoma,arial,verdana;
	font-size   : 12px;
	font-weight : bold;
	  
}

a:link {
	color : #000;
}

a {
	color : #000;
	text-decoration : none;
}
a:hover {
	color : #333;
}onClick=\"return confirm('Apakah yakin menghapus $data[nama]?')\"
</style>
<?php
 if(isset($_SESSION['username'])) {
	echo "Selamat Datang ".$_SESSION['username'];	
	$c=mysqli_connect("localhost","root","");
	mysqli_select_db($c,"portal");
	
	$no=1;
	echo "<table>";
	echo "<tr><td>No</td><td align=\"center\">Judul</td><td align=\"center\">Opsi</td></tr>";
	$ambil=mysqli_query($c,"select*from _terbaru order by waktu desc");
	while($data=mysqli_fetch_array($ambil)) {
	  echo "<tr><td>$no</td><td>$data[judul]</td><td><a href=\"edit.php?id=$data[id]\">Edit</a> | <a href=\"hide.php?id=$data[id]\" onClick=\"return confirm('Apakah yakin sembunyikan $data[judul]?')\" >Hide | Remove</td></tr>";

	 $no++;

		}
	echo "</table><br>";	
	echo "Upload File: <input type=\"file\"><br><input type=\"submit\" value=\"Upload\">";
	echo "<p /><a href=\"?out=yes\">Logout</a>";
		
		if(@$_GET['out']=="yes") {
			session_destroy();
			echo "<meta http-equiv=\"refresh\" content=\"0; url=./\">";

			}
		
	}

  else echo "You must login";


?>
