<?php
include("konek.php");
$id=@$_GET['id'];
$ambil=mysqli_query($c,"select*from berita where id=$id") or die(mysqli_error());
$lihat=mysqli_fetch_array($ambil);
echo "<b>$lihat[judul]</b>";
echo "<p>$lihat[isi_lengkap]</p>"; 
?>