<DIV id="divStay" style="POSITION: absolute">
<TABLE cellSpacing="0" cellPadding="0" width="100%" border="0" border="1">
<TBODY>
<TR>
<TD vAlign="top" width="7%"></TD></TR></TBODY></TABLE></DIV>
<SCRIPT language=javascript>
function picsize(obj,MaxWidth){
img=new Image();
img.src=obj.src;
if (img.width>MaxWidth)
{
return MaxWidth;
}
else
{
return img.width;
}
}
function CloseQQ()
{
divStayTopleft.style.display="none";
return true; 
}
var online= new Array();
</SCRIPT>

<DIV id="divStayTopleft" style="POSITION: absolute">
<TABLE cellSpacing="0" cellPadding="0" width=109 border="0">
<TBODY>
<TR>
<TD colSpan="3"><A onclick="CloseQQ()" href="javascript:;" shape="circle" coords="91,16,12"><IMG height="34" src="index_files/qq_top.gif" width="109" useMap="#Map" border="0"></A></TD></TR>
<TR>
<TD width="6"><IMG height="100" src="index_files/qq_life.gif" width="6"></TD>
<TD vAlign=top width="96" background="">
  <TABLE cellSpacing="0" cellPadding="0" width="90" align=center border="0">
	<TBODY>
	<TR>
	  <TD height="30">
		<TABLE cellSpacing="0" cellPadding="0" width="90" border="0">
		  <TBODY>
		  <TR>
			<TD><IMG height=13 src="index_files/qq_ico1.gif" width="16"><SPAN class="font_12"> <SPAN style="FONT-SIZE: 9pt">客户服务</SPAN></SPAN></TD></TR></TBODY></TABLE></TD></TR>
	<TR>
	  <TD>
		<TABLE id="table47" cellPadding=2 width="100%" border="0">
		  <TBODY>
		  <TR>
			<TD vAlign="top" width="15" height="23"><IMG height="16" src="index_files/qq_v01.gif" width=16 border="0"></TD>
			<TD vAlign=bottom>
			  <SCRIPT>document.write("<a target='blank' href='tencent://message/?uin=178010108&Site=&Menu=yes'><img border='0' SRC='http://wpa.qq.com/pa?p=1:615050000:10' ></a>");</SCRIPT>
			</TD></TR></TBODY></TABLE></TD></TR>
	<TR>
	  <TD></TD></TR>
	<TR>
	  <TD>
		<TABLE id=table47 cellPadding=2 width="100%" border="0">
		  <TBODY>
		  <TR>
			<TD vAlign="top" width="15" height="23"><IMG height="16" src="index_files/qq_n01.gif" width="16" border="0"></TD>
			<TD vAlign=bottom>
			 <SCRIPT>document.write("<a target='blank' href='tencent://message/?uin=178010108&Site=阿里西西&Menu=yes'><img border='0' SRC='http://wpa.qq.com/pa?p=1:615050000:10' alt='[阿里西西]'></a>");</SCRIPT>
			</TD></TR></TBODY></TABLE></TD></TR>
	<TR>
	  <TD></TD></TR></TBODY></TABLE></TD>
<TD width="7"><IMG height="100" src="index_files/qq_right.gif" width="7"></TD></TR>
<TR>
<TD colSpan="3"><IMG height="30" src="index_files/qq_bottom1.gif" width="109"></TD></TR>
<TR>
<TD colSpan=3><IMG height="33" src="index_files/qq_logo.gif" width="109"></TD></TR></TBODY></TABLE></DIV>
<SCRIPT type=text/javascript>
function FloatTop()
{
var startX1 =document.body.offsetWidth-20 ,startY1 = 5;
var startX2 =0,startY2 = 95;
var ns = (navigator.appName.indexOf("Netscape") != -1);
var d = document;
function ml(id,startX,startY)
{
var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
if(d.layers)el.style=el;
el.sP=function(x,y){this.style.left=x;this.style.top=y;};
el.x = startX;
el.y = startY;
return el;
}
window.stayTopLeft=function()
{
var pY = ns ? pageYOffset : document.body.scrollTop;
ftlObj.y += (pY + startY1 - ftlObj.y)/8;
ftlObj1.y += (pY + startY2 - ftlObj1.y)/8;
ftlObj.sP(document.body.scrollLeft+document.body.offsetWidth-20, ftlObj.y);
ftlObj1.sP(ftlObj1.x, ftlObj1.y);
setTimeout("stayTopLeft()", 30);
}
//  ftlObj = ml("divStay",document.body.scrollLeft+document.body.offsetWidth-125,0);
//  ftlObj1 = ml("divStayTopLeft",0,30);
ftlObj = ml("divStay",(document.body.scrollLeft+document.body.offsetWidth)/2+379,0);
ftlObj1 = ml("divStayTopLeft",(document.body.scrollLeft+document.body.offsetWidth)/2+379,30);
stayTopLeft();
}
FloatTop();
</SCRIPT>
