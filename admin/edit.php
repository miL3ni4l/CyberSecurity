<?php session_start();
 if(isset($_SESSION['username'])) {
	echo "Selamat Datang ".$_SESSION['username'];	
	$c=mysqli_connect("localhost","root","");
	mysqli_select_db($c,"portal");

		if(isset($_POST['simpan'])) {
		$artikel=@$_POST['edit'];
		$update=mysqli_query($c,"update terbaru set isi='$artikel' where id='$_GET[uid]'");
			if($update) {
				echo "<br>edit artikel berhasil<br>";
				echo "<a href=\"./\">Kembali</a>";

				}		
			}

else {
	$ambil=mysqli_query($c,"select * from _terbaru where id='$_GET[id]'");
	$data=mysqli_fetch_array($ambil);
	
	echo "<form action=\"$_SERVER[PHP_SELF]?uid=$data[id]\" method=\"POST\">";
	echo "<br><textarea name=\"edit\" cols=\"95\" rows=\"30\">$data[artikel_lengkap]</textarea><br>";
	echo "<input type=\"submit\" name=\"simpan\" value=\"Simpan\"></form>";
}
		
}
else {echo "you must login";}
?>
