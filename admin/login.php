<?php session_start();
include("../konek.php");
$uname=@$_POST['username'];
$paswd=sha1(@$_POST['paswd']);

//Pencocokan Usnm dan Pswd
$pilih=mysqli_query($c,"select * from admin where paswd='$paswd' and uname='$uname'");
$cek=mysqli_num_rows($pilih);
 if($cek>0) {
	$_SESSION['username']=$uname;
	header("location:home.php");
}
else {
	echo "<form action=\"login.php\" method=\"post\">
<table>
<tr /><td />Username<td />:<td /><input type=\"text\" name=\"username\">
<tr /><td />Password<td />:<td /><input type=\"password\" name=\"paswd\">
<tr /><td align=\"right\" colspan=\"3\" /><input type=\"submit\" value=\"Login\">
<tr /><td align=\"right\" colspan=\"3\" />Username atau Password salah
</table>
</form>
"; 


}

?>
