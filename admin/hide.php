<?php session_start();
 if(isset($_SESSION['username'])) {
	mysql_connect("localhost","root","");
	mysql_select_db("sqli");
	
	$up=mysql_query("update berita set publish='T' where id='$_GET[id]'");
	 if($up) {
	  echo "berhasil di sembunyikan<br>";
	  echo "<a href=\"./\">Kembali</a>";

		}
}
else
echo "you must login";
?>
