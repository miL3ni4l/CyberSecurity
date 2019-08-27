<?php session_start();
$paswd=@$_POST['paswd'];
if($paswd=="rahasia") {
	$_SESSION['paswd']=1;
	header('location:home.php');
	}
	else 
	if(isset($_SESSION['paswd'])) {
	header('location:home.php');
	}
else
{ echo "<form action=index.php method=post>
<input type=text name=paswd><input type=submit>
</form><br /><b>password: rahasia</b>
";
}
?>
