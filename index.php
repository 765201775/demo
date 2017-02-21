<?php
require_once("inc/conn.php");
require_once("inc/function.php");
$site = getWebSiteInfo();
$pid = isset($_GET["pid"]) && is_numeric($_GET["pid"]) ? $_GET["pid"] : "";
if (empty($pid))
    $pid = 1;
$sql = "select * from news_data where I_InfoClassID=$pid order by I_InfoAddTime desc";
$query = mysql_query($sql);
$i = 0;
$BigPicHtml = "";
$SmallPicHtml = "";
$adPic=GetBigAD($pid);
while ($m = mysql_fetch_array($query)) {
    $on = $i == 0 ? "class=\"on\"" : "";
    $spic = $m["log_FromUrl"];
    $bpic = $m["I_Pic"];
    $title = $m["I_InfoTitle"];
    $context1 = $m["I_Content1"];
    $SmallPicHtml.=$pid == 2 ?
            "<li $on ><a href=\"show.php?pid=$m[I_ID]\" target=\"_blank\"><img  src=\"$spic\" alt=\"$title\" /><br>$title</a><div style=\"display:none\">$context1</div></li>" :
            "<li $on ><a href=\"show.php?pid=$m[I_ID]\" target=\"_blank\"><img src=\"$spic\" alt=\"$title\" /><br>$title</a></li>";
    $BigPicHtml.=$pid == 2 ?
            "<li><a href=\"show.php?pid=$m[I_ID]\" target=\"_blank\"><img width=\"287\" height=\"410\" src=\"$bpic\" alt=\"$title\" /></a></li>" :
            "<li><a href=\"show.php?pid=$m[I_ID]\" target=\"_blank\"><img width=\"592\" height=\"410\" src=\"$bpic\" alt=\"$title\" /></a></li>";
    $i++;
}
switch($pid){
		case 1:
			$aID1=3;
			$aID2=4;
		break;
		case 2:
			$aID1=5;
			$aID2=6;
		break;
		case 3:
		case 4:
		case 6:
			$aID1=7;
			$aID2=8;
			break;
		case 5:
			$aID1=9;
			$aID2=10;
			break;
		}
?>
<html>
    <head>
        <title><?php echo $site["w_websitename"] ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="keywords" content="<?php echo $site["w_websitekeyword"] ?>"/>
        <meta name="description" content="<?php echo $site["w_websiteintr"] ?>" />        
        <link href="css/css.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery-1.6.4.js"></script>
    </head>
    <body>
<?php require_once("inc_top.php"); ?>
        <div id="contact" class="cf">
            <div class="hp_con1 cf <?php echo $pid == 2 ? "mod" : "mod18" ?>">
                <div class="cf">
				<div class="ad"><?php $ad1 = getContentById($aID1); echo stripslashes($ad1[1]); ?></div>
                <div id="picBox" class="picBoxNew"><a href="<?php echo $adPic->picLink?>" target="_blank"> <img src="<?php echo str_replace("../", "", $adPic->picUrl) ?>" border="0" /></a></div>
				</div>
                <div id="listBoxNew" class="listBoxNew cf">
                    <ul>
					 <div class="listBoxNew_t"><h2><?php echo getClassNameByCid($pid)?></h2></div>
					<!--
					<div class="titleNew">
					 <div class="titleNewcon cf">
					  <dl>
					  <dd><a href="index.php?pid=1">挂图</a></dd>
					  <dd><a href="index.php?pid=3">中国世界地图</a></dd>
					  <dd><a href="#">装饰地图</a></dd>
					  <dd><a href="#">影像地图</a></dd>
					  <dd><a href="index.php?pid=5">地球仪</a></dd>
					  <dd><a href="index.php?pid=2">图书</a></dd>
					  </dl>
					 </div>
					</div>-->
                    <?php echo $SmallPicHtml ?>
                    </ul>
                </div>

                <div class="spacer"></div>
            </div>
<?php require_once("inc_foot.php") ?> 
    </body>
</html>