<?php session_start();
if(isset($_SESSION['username'])) {
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
echo "gada apa2 disini bro";

?>