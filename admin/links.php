<?php
session_start();
if(isset($_SESSION['username'])) {
include("../konek.php");
echo"   <a href=\"isi.php\">Isi artikel</a> | <a href=\"logout.php\">Logout</a><br>
	<form action=\"$_SERVER[PHP_SELF]\" method=post>
	<table>
	<tr><td>Nama</td><td>:</td><td><input type=text name=\"nama\" size=\"20\"></td></tr>
	<tr><td>URLz</td><td>:</td><td><input type=text name=\"url\" size=\"30\"></td></tr>
	<tr><td colspan=\"3\"><input type=\"submit\" value=\"save\"></td></tr>
	</table>
	</form>";
	$nama=@$_POST['nama'];
	$url=@$_POST['url'];
		
	if ((!$nama=="")&&(!$url=="")) {
	$query=@mysql_query("insert into links values(null,'$nama','$url')");
	if($query) { 
	 	echo "$nama saved!";
	}
	}
	}
else {
echo "gada apa2 bro";
}
?>