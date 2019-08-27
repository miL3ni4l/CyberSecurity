<?php
function tanggal($str) {
setlocale (LC_TIME, 'id_ID');
$date = strftime( "%A, %d %B %Y", strtotime($str));
return $date;
}
$array_hari = array(1=>'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');
$hari = $array_hari[date('N')];
$tanggal = date ('j');
$array_bulan = array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
$bulan = $array_bulan[date('n')];
$tahun = date('Y');
$waktu=$hari.", ".$tanggal." ".$bulan." ".$tahun;
//echo $waktu;

//echo date('|N,j-n-Y');

echo sha1($_GET['sha1']);
?>