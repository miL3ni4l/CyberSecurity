<?php
session_start();
if(isset($_SESSION['username'])) {
include("../konek.php");

//tanggal indonesia
$array_hari = array(1=>'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');
$hari = $array_hari[date('N')];
$tanggal = date ('j');
$array_bulan = array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
$bulan = $array_bulan[date('n')];
$tahun = date('Y');
//end tanggal

$kategori=$_POST['kategori'];
$judul=$_POST['judul'];
$artikel=$_POST['isi'];
$artikel_lengkap=$_POST['lengkap'];
$author=$_POST['author'];
$waktu=$hari.", ".$tanggal." ".$bulan." ".$tahun;
$sumber=$_POST['sumber'];




$masuk=mysql_query("insert into $kategori values(NULL,'$judul','$author','$artikel','$artikel_lengkap','$waktu','$sumber')");

$ambil=mysql_query("select id from $kategori order by id desc limit 1");
$dataid=mysql_fetch_array($ambil);
$masukid=$dataid['id'];

$masuk=mysql_query("insert into _terbaru values(NULL,'$judul','$author','$artikel','$artikel_lengkap','$waktu','$sumber','$kategori','$masukid')");

if($masuk) {
echo "berhasil di simpan";
}
else echo "gagal disimpan";

echo "
<script language=\"javascript\" src=\"jscripts/tiny_mce.js\">
</script>
<script language=\"javascript\">
tinyMCE.init ({
		mode:\"textareas\",
		theme:\"advanced\",
	})
</script>
<a href=\"links.php\">submit link</a><br>
<form action=\"isi_success.php\" method=\"post\">
<table>
<tr><td>Kategori</td>
<td>:</td>
<td >
<select name=\"kategori\">
<option value=\"humor\">Humor</opiton>
<option value=\"kesehatan\">Kesehatan</opiton>
<option value=\"lounge\">Lounge</opiton>
<option value=\"sains\">Sains</opiton>
<option value=\"tahukah_kamu\">Tahukah Kamu</opiton>
<option value=\"teknologi\">Teknologi</opiton>
<option value=\"unik\">Unik</opiton>
</select>
</td></tr>
<tr><td>Judul
<td>:</td>
<td ><input type=\"text\" name=\"judul\" size=\"40\"></td></tr>

<tr><td>Author
<td>:</td>
<td ><input type=\"text\" name=\"author\" size=\"25\"></td></tr>

<tr><td  valign=\"top\">Isi</td>
<td valign=\"top\">:</td>
<td><textarea name=\"isi\" cols=\"60\" rows=\"20\"></textarea></td></tr>
<tr><td valign=\"top\">Lengkap</td>
<td valign=\"top\">:</td>
<td><textarea name=\"lengkap\" cols=\"100\" rows=\"30\"></textarea></td>
</tr>
<tr><td>Sumber
<td>:</td>
<td ><input type=\"text\" size=\"40\" name=\"sumber\"></td></tr>
<tr><td colspan=\"6\">
<input type=\"submit\" value=\"simpan\">
</td>
</tr>
</table>
</form>
<a href=\"logout.php\">logout</a>";


}
else 
echo "gada apa2 bro";

?>


