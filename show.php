<?php 
require_once("inc/conn.php");
require_once("inc/function.php");
	$site=getWebSiteInfo();
	$pid=(isset($_GET["pid"]) && is_numeric($_GET["pid"]))?$_GET["pid"]:"";
	$id=(isset($_GET["id"]) && is_numeric($_GET["id"]))?$_GET["id"]:"";
	if(empty($pid) && !empty($id)){
		$act="a";
		$sql="select * from onearticle where id=$id";	
		$title="title";
		$txt="content";
	}else if(!empty($pid) && empty($id)){
		$act="p";
		$sql="select * from news_data where I_ID=$pid";	
		$title="I_InfoTitle";
		$txt="I_Content";
	}else{
		echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">"."<script>alert('参数错误!');location.href='index.php';</script>>";
		break;	
	}
	$rs=mysql_query($sql);
	$model=mysql_fetch_array($rs);
	$title=$model[$title];
	if($act=="p"){
		$cid=$model["I_InfoClassID"];	
	}
	$txt=$model[$txt];
?>
<html>
<head>
<title><?php echo $title." ".$site["w_websitename"]?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo  $title." ".$site["w_websitekeyword"]?>"/>
<meta name="description" content="<?php echo  $title." ".$site["w_websiteintr"]?>" />        
<link href="css/css.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php require_once("inc_top.php")?>
<div id="contact" class="cf">
  <div class="hp_con cf">
    <div class="subnav">
      <ul>
      	<li><a href="index.php?pid=3"  <?php echo ($p=="show" && isset($_GET["pid"]) && $cid==3)?"class=\"dj\"":""; ?>  target="_self">中国世界地图</a></li>
		
        <li><a href="index.php?pid=1" <?php echo ($p=="show" && isset($_GET["pid"]) && $cid==1)?"class=\"dj\"":""; ?>  target="_self">挂&nbsp;&nbsp;图</a></li>
        <li><a href="index.php?pid=4"  <?php echo ($p=="show" && isset($_GET["pid"]) && $cid==4)?"class=\"dj\"":""; ?>  target="_self">装饰地图</a></li>
        <li><a href="index.php?pid=6"  <?php echo ($p=="show" && isset($_GET["pid"]) && $cid==6)?"class=\"dj\"":""; ?>  target="_self">影像地图</a></li>
		<li><a href="index.php?pid=5"  <?php echo ($p=="show" && isset($_GET["pid"]) && $cid==5)?"class=\"dj\"":""; ?>  target="_self">地球仪</a></li>
        <li><a href="index.php?pid=2"  <?php echo ($p=="show" && isset($_GET["pid"]) && $cid==2)?"class=\"dj\"":""; ?>  target="_self">图&nbsp;&nbsp;书</a></li>
      </ul>
    </div>
    <div class="piclist">
	<?php if($act=="p"){ ?>
	     <h2><?php echo $title?></h2>
	 <div class="pic"><img src="<?php echo str_replace("../","",$model["I_Pic"]);?>"></div>
	 <p><?php echo stripslashes($model["I_Content"]);?></p>
	<?php }else{ echo stripslashes($txt); }?>
    </div>
  </div>
</div>
<?php require_once("inc_foot.php");?> 
</body>
</html>