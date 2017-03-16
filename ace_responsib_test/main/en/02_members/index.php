<?php
 $ua = $_SERVER['HTTP_USER_AGENT'];
 if(preg_match('/(iPhone|Android.*Mobile|Windows.*Phone)/', $ua)){
    header('Location:index_boots.html');
    exit();
   }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="ACE Project,Takeshi Nanri,Kyushu University, CREST,Project Leader" />
<link href="../../style/style_members02.css" rel="stylesheet" style type="text/css" />
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<link rel="shortcut icon" href="../../images/favicon.ico" content="image/x-icon"  />
<title>ACE Project</title>
<style type="text/css">
<!--
.header {
	background-image: url(../../images/backgraund_2.png);
	border-bottom-width: 1px;
	border-bottom-style: none;
	border-bottom-color: #003;
	white-space: normal;
	width:100%;
	max-width:930px;
	min-width:900px;
	margin:0 auto;
}
.dropmenu{
  *zoom:1;
	list-style-type: none;
	padding: 0;
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
	font-size: 13px;
	margin:5px auto 30px;
	height: auto;
	border-top-width: 1px;
	border-bottom-width: 1px;
	border-top-style: none;
	border-bottom-style: none;
	border-top-color: #003;
	border-bottom-color: #003;
	font-style: normal;
	clear: both;
	color: #000;
}

.container .content .dropmenu .b { 
	background-image: url(../../images/b_cst03_18.png);
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-right-color: #FFF;
	border-bottom-color: #6CF;
	border-left-color: #FFF;
	color: #003;
}

.dropmenu:before, .dropmenu:after{
  content: "";
  display: table;
}
.dropmenu:after{
  clear: both;
}
.dropmenu li{
  position: relative;
  float: left;
  margin: 0;
  padding: 0;
  text-align: center;
    color: #FFF;
}
.dropmenu li a{
  display: block;
  line-height: 1;
  text-decoration: none;
   	display: block;
	float: left;
	width: 11em;
	border-right-width: 1px;
	border-right-style: solid;
	border-right-color: #FFFFFF;
	line-height: 35px;
	font-weight: bold;
	clear: none;
	background-image: url(../../images/blue-button-new.png);
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-bottom-style: solid;
	border-left-style: solid;
	border-bottom-color: #39F;
	border-left-color: #FFF;
	border-top-width: 1px;
	border-top-style: solid;
	border-top-color: #FFF;
	color:#FFFFFF;

}

.dropmenu li ul{
	  color: #FFF;
  list-style: none;
  position: absolute;
  z-index: 9999;
  top: 100%;
  left: 0;
  margin: 0;
  padding: 0;
}
.dropmenu li ul li{
  width: 100%;
  color: #FFF;
　background-image:url(../../images/blue-button-new.png);
}
.dropmenu li ul li a{
  padding: 0;
  color: #FFF;
  text-align: center;
   	font-weight: bold;
	background-image:url(../../images/blue-button-new.png);
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-right-color: #FFF;
	border-bottom-color: #6CF;
	border-left-color: #FFF;

}
.dropmenu li:hover > a{
 	background-image:url(../../images/blue-button-new.png);
	color: #FFF;
}
.dropmenu li a:hover{
	color: #000033;
	font-weight: bold;
	background-image: url(../../images/b_cst03_18.png);
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-right-color: #FFF;
	border-bottom-color: #6CF;
	border-left-color: #FFF;

}
p.menu {
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
	font-size: 12px;
	margin: 0px;
	height: auto;
	border-top-width: 1px;
	border-bottom-width: 1px;
	border-top-style: none;
	border-bottom-style: none;
	border-top-color: #003;
	border-bottom-color: #003;
	color: #999;
	clear: both;
	text-align: center;
}
p.menu a {
	color: #FFF;
	display: block;
	float: left;
	width: 9em;
	border-right-width: 1px;
	border-right-style: solid;
	border-right-color: #FFFFFF;
	line-height: 35px;
	font-weight: bold;
	clear: none;
	background-image: url(../../images/blue-button-new.png);
	border-top-width: 1px;
	border-bottom-width: 1px;
	border-top-style: none;
	border-bottom-style: solid;
	border-top-color: #006;
	border-bottom-color: #3CF;
	border-left-width: 1px;
	border-left-style: solid;
	border-left-color: #FFF;
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
	font-size: 12px;
}
.container .content .menu .b {
	background-image: url(../../images/b_cst03_18_2.png);
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-right-color: #FFF;
	border-bottom-color: #6CF;
	border-left-color: #FFF;
	color: #003;
}

p.menu a:hover {
	color: #000033;
	text-align: center;
	background-image: url(../../images/b_cst03_18_2.png);
	border-right-width: 1px;
	border-left-width: 1px;
	border-right-style: solid;
	border-left-style: solid;
	border-right-color: #FFF;
	border-left-color: #FFF;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #6CF;
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
	text-decoration: none;
}

.sitemap {
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
	font-size: x-small;
	color: #000;
}
.map {
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
	font-size: x-small;
	color: #333;
}
-->

</style>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onload="MM_preloadImages('../../images/jp_button_b.png','../../images/sitemap_en_a.png','../../images/hp_2.jpg','../../images/jp_button_on.png','../../images/sitemap_en_on.png')">

<div class="container">
  <div class="header"><a name="toppage" id="toppage"></a>　<a href="../../../index.html"><img src="../../images/ace-logo-20131111.png" width="141" height="93" alt="logo" /></a> 
    　<!-- end .header --><img src="../../images/ace-logo-title-ver.4.png" width="557" height="65" alt="title" /><img src="../../images/button_d.png" width="17" height="90" /><a href="../../jp/02_members/index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','../../images/jp_button_on.png',1)"><img src="../../images/jp_button_b.png" name="Image1" width="61" height="90" border="0" id="Image1" /></a> <img src="../../images/button_d.png" width="17" height="90" /><a href="../../sitemap/index_en.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','../../images/sitemap_en_on.png',1)"><img src="../../images/sitemap_en_a.png" name="Image2" width="58" height="89" border="0" id="Image2" /></a></div>

  <div class="content">
<style>
#normal li ul{
  display: none;
}
#normal li:hover ul{
  display: block;
}
</style>
  <p align="left" class="menu">
   <ul id="normal"class="dropmenu">
<li> <a href="../../../index.html" class="menu">Home</a></li>
<li><a href="index.html" class="a">Project</a>
    <ul>
        <li><a href="../01_overview/index.html" class="a">Overview	</a></li>
        <li> <a href="index.html"class="b">Members	</a></li>
        <li><a href="../03_publications/index.html"class="c">Publications</a></li>
        <li><a href="../04_links/index.html"class="c">Related Links</a></li>
    </ul>
</li> 
<li><a href="../07_document/index.html" class="f">Documents</a></li>
<li><a href="../05_downloads/index.html" class="d">Downloads</a></li>
<li><a href="../09_questions/index.html"class="h">Contact</a>
   <ul>
      <li><a href="../09_questions/index.html"class="h">Questions</a></li>
      <li><a href="http://ace-project.kyushu-u.ac.jp/mantis/login_page.php" class="c" target="_blank">Report/Proposal</a></li>
  </ul>
</li>
  <li><a href="../08_contrib/index.html" class="g">Contrib</a></li>
  <p>&nbsp;</p>
  　 <span class="map"><a href="../01_overview/index.html"><u>Project</u></a> ＞ <a href="index.html"><u>Members</u></a></span>			
 <span class="yohaku">　</span>
 <p>&nbsp;</p>
<p><img src="../../images/obi_members_en.png" width="100%" height="38" /></p>
  <p> <span class="yohaku"> 　　　　</span></p>
    <p>
    <table width="83%" height="10"border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="50">&nbsp;</td>
        <td width="747" height="15" valign="top"><img src="../../images/arrow06-002.gif" width="16" height="16" align="absmiddle" /> <a href="#p01" class="subtitle"><u>Project Leader</u></a><br />
            <img src="../../images/arrow06-002.gif" width="16" height="16" align="absmiddle" /> <a href="#p02" class="subtitle"><u>Group Leader</u></a><br />          
            <img src="../../images/arrow06-002.gif" width="16" height="16" align="absmiddle" /> <a href="#p03" class="subtitle"><u>Members</u></a>　　
      </tr>
    </table>   
    <br />
     <table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="40">&nbsp;</td>
        <td width="891"><img src="../../images/line_gray_l.png" width="99%" height="1" align="top" />　
      </tr>
    </table>
    <table width="83%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="49">&nbsp;</td>
        <td width="748" height="5" valign="top"><span class="midashi"><a name="p01" id="p01"></a>Project Leader</span>　
      </tr>
    </table>    
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="30" >&nbsp;</td>
        <td width="901" height="5"><img src="../../images/line.blue4.png" width="100%" height="15" align="texttop" />　
      </tr>
    </table>
    <br />
    
<table width="93%" border="0" cellspacing="0" cellpadding="0">
      <tr>
    <td width="64">&nbsp;</td>
    <td width="829" height="15"><span class="name">Takeshi Nanri </span><span class="links"><a href="http://hyoka.ofc.kyushu-u.ac.jp/search/details/K000018/english.html"  target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image26','','../../images/hp_2.jpg',1)"><img src="../../images/hp_1.jpg" name="Image26" width="25" height="15" border="0" align="texttop" id="Image26" /><u>Home Page</u></a></span>　<br />
   Assosiate Professor of Research Institute for Information Technology, Kyushu University 
  
    </tr>
</table>
   <table width="93%" border="0" cellspacing="0" cellpadding="0">
     <tr>
    <td width="64">&nbsp;</td>
     <td width="896" height="30">
    　　　 Email : nanri(@)cc.kyushu-u.ac.jp<br />
  　　　 　 Tel : +81-92-642-2298<br />
  　　　　 Fax : +81-92-642-3844&nbsp;&nbsp; 
  </tr>
</table>

<br />
<p>&nbsp; </p>
   <table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="40">&nbsp;</td>
        <td width="891"><img src="../../images/line_gray_l.png" width="99%" height="1" align="top" />　
      </tr>
    </table>
    <table width="83%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="49">&nbsp;</td>
        <td width="748" height="5" valign="top"><span class="midashi"><a name="p02" id="p02"></a>Group Leader</span>　
      </tr>
    </table>    
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="30" >&nbsp;</td>
        <td width="901"height="5"><img src="../../images/line.blue4.png" width="100%" height="15" align="texttop" />　
      </tr>
    </table>
   <br /> 
    <table width="93%" border="0" cellspacing="0" cellpadding="0">
      <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="20"><span class="name">Shinji Sumitomo</span><br />
       Senior Architect of Fujitsu Limited  　　
  </td>
</table>
   <br />
   <table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="20"><span class="name">Hidetomo Shibamura </span><span class="links"><a href="http://www.isit.or.jp/lab1/member/shibamura-hidetomo/"  target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image26','','../../images/hp_2.jpg',1)"><img src="../../images/hp_1.jpg" name="Image26" width="25" height="15" border="0" align="texttop" id="Image26" /><u>Home Page</u></a></span><br />
                  Resercher of Institute of Systems, Information Technologies and Nanotechnologies (ISIT) 
 </td>
</table>
  <br />
<!-- <table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="20"><span class="name">Toshiya Takami </span><span class="links"><a href="http://hyoka.ofc.kyushu-u.ac.jp/search/details/K003557/english.html"  target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image26','','../../images/hp_2.jpg',1)"><img src="../../images/hp_1.jpg" name="Image26" width="25" height="15" border="0" align="texttop" id="Image26" /><u>Home Page</u></a></span><br /> 
Associate Professor of Research Institute for Information Technology, Kyushu University 
 </tr>
</table>
-->
<p>&nbsp; </p>
 <table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="40">&nbsp;</td>
        <td width="891"><img src="../../images/line_gray_l.png" width="99%" height="1" align="top" />　
      </tr>
    </table>
    <table width="83%"border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="49">&nbsp;</td>
        <td width="748" height="5" valign="top"><span class="midashi"><a name="p03" id="p03"></a>Members</span>　
      </tr>
    </table>    
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="30" >&nbsp;</td>
        <td width="901" height="5"><img src="../../images/line.blue4.png" width="100%" height="15" align="texttop" />　
      </tr>
    </table>
 <br />   
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="48">&nbsp;</td>
    <td width="908" height="5"> <span class="ｎａｍｅ．ｇｒｏｕｐ"><img src="../../images/c16_gy6.gif" width="10" height="10" /> Interface and Application Group</span>
  </tr>
</table>
<br />
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="20"><span class="name">Takeshi Nanri </span><span class="links"><a href="http://hyoka.ofc.kyushu-u.ac.jp/search/details/K000018/english.html"  target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image26','','../../images/hp_2.jpg',1)"><img src="../../images/hp_1.jpg" name="Image26" width="25" height="15" border="0" align="texttop" id="Image26" /><u>Home Page</u></a></span><br /> 
Assosiate Professor of Research Institute for Information Technology, Kyushu University 
 </tr>
</table>
<br />
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="20"><span class="name">Yoshiyuki Morie </span><br /> 
Research Assistant Professor of Research Institute for Information Technology, Kyushu University
 </tr>
</table>
<br />
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="20"><span class="name">Taizo Kobayashi </span> 　<br /> 
 Associate Professor of Teikyo University 
 </tr>
</table>
<br />
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="20"><span class="name">Toshiya Takami </span><br /> 
 Professor of Faculty of Engineering, Oita University 
 </tr>
</table>
<br />
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="20"><span class="name">Hiroaki Honda</span><a href="http://www.c.csce.kyushu-u.ac.jp/~dahon/index_e.html"  target="_blank" class="links" onmouseover="MM_swapImage('Image31','','../../images/hp_2.jpg',1)" onmouseout="MM_swapImgRestore()"><img src="../../images/hp_1.jpg" alt="" name="Image31" width="25" height="15" border="0" align="texttop" id="Image31" /><u>Home Page</u></a><br />
Research Associate Professor of Research Institute for Information Technology, Kyushu University 
 </tr>
</table>
<br />
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="20"><span class="name">Ryutaro Susukita</span><br />
Research Associate Professor of Research Institute for Information Technology, Kyushu University 
 </tr><td align="right"></td>
</table>
<br />
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="20"><span class="name">Keiichiro Fukazawa </span><span class="links"><a href="http://ais.sys.i.kyoto-u.ac.jp/~fukazawa/index-e.html"  target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image26','','../../images/hp_2.jpg',1)"><img src="../../images/hp_1.jpg" name="Image26" width="25" height="15" border="0" align="texttop" id="Image26" /><u>Home Page</u></a></span> <br /> 
 Associate Professor of Academic Center for Computing and Media Studies, Kyoto University 
 </tr>
</table>
<br />
<p align="center">　　<img src="../../images/line_gray_l.png" width="96%" height="1" /></p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="48">&nbsp;</td>
    <td width="911" height="5"> <span class="ｎａｍｅ．ｇｒｏｕｐ"><img src="../../images/c16_gy6.gif" width="10" height="10" /> Protocol Group</span></tr>
</table>
<br />
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="5"><span class="name">Shinji Sumitomo　　　</span>Fujitsu Limited
 </tr>
</table>
<br />
 <table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="5"><span class="name">Yuichiro Ajima　　　　</span>Fujitsu Limited
 </tr>
</table>
<br />
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="5"><span class="name">Naoyuki Shida</span>　　　　　Fujitsu Limited
 </tr>
</table>
<br />
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="5"><span class="name">Kazuhige Saga　　　　</span>Fujitsu Limited
 </tr>
</table> 
<br />
 <table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="5"><span class="name">Takafumi Nose </span>　　 　 　Fujitsu Limited
 </tr>
</table>
<br />
                                                                                                                              　                             
<p align="center">　　<img src="../../images/line_gray_l.png" width="96%" height="1" /></p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="48">&nbsp;</td>
    <td width="922" height="5"> <span class="ｎａｍｅ．ｇｒｏｕｐ"><img src="../../images/c16_gy6.gif" width="10" height="10" /> Channel Control Group</span>
  </tr>
</table>
<br />
 <table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="20"><span class="name">Hidetomo Shibamura </span><span class="links"><a href="http://www.isit.or.jp/lab1/member/shibamura-hidetomo/"  target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image26','','../../images/hp_2.jpg',1)"><img src="../../images/hp_1.jpg" name="Image26" width="25" height="15" border="0" align="texttop" id="Image26" /><u>Home Page</u></a></span><br />
                  Resercher of Institute of Systems, Information Technologies and Nanotechnologies (ISIT) 
 </tr>
</table>
<br />
 <table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="20"><span class="name">Takeshi Soga</span><br />
                  Resercher of Institute of Systems, Information Technologies and Nanotechnologies (ISIT) 
 </tr>
</table>
<br />
 <!--　 　  　 
<p align="center">　　<img src="../../images/line_gray_l.png" width="96%" height="1" /></p>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="48">&nbsp;</td>
    <td width="911" height="5"> <span class="ｎａｍｅ．ｇｒｏｕｐ"><img src="../../images/c16_gy6.gif" width="10" height="10" /> Application Group</span>
  </tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="20"><span class="name">Toshiya Takami </span><span class="links"><a href="http://hyoka.ofc.kyushu-u.ac.jp/search/details/K003557/english.html"  target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image26','','../../images/hp_2.jpg',1)"><img src="../../images/hp_1.jpg" name="Image26" width="25" height="15" border="0" align="texttop" id="Image26" /><u>Home Page</u></a></span><br /> 
Associate Professor of Research Institute for Information Technology, Kyushu University 
 </tr>
</table>

<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="20"><span class="name">Hiroaki Honda</span><a href="http://www.c.csce.kyushu-u.ac.jp/~dahon/index_e.html"  target="_blank" class="links" onmouseover="MM_swapImage('Image31','','../../images/hp_2.jpg',1)" onmouseout="MM_swapImgRestore()"><img src="../../images/hp_1.jpg" alt="" name="Image31" width="25" height="15" border="0" align="texttop" id="Image31" /><u>Home Page</u></a><br />
Research Associate Professor of Research Institute for Information Technology, Kyushu University 
 </tr>
</table>

<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="20"><span class="name">Ryutaro Susukita</span><br />
Research Associate Professor of Research Institute for Information Technology, Kyushu University 
 </tr><td align="right"></td>
</table>

<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="20"><span class="name">Keiichiro Fukazawa </span><span class="links"><a href="http://ais.sys.i.kyoto-u.ac.jp/~fukazawa/index-e.html"  target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image26','','../../images/hp_2.jpg',1)"><img src="../../images/hp_1.jpg" name="Image26" width="25" height="15" border="0" align="texttop" id="Image26" /><u>Home Page</u></a></span> <br /> 
 Associate Professor of Academic Center for Computing and Media Studies, Kyoto University 
 </tr>
</table>
-->
<p align="center"> 　　<img src="../../images/line_gray_l.png" width="96%" height="1" /></p>
<br />
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="64">&nbsp;</td>
     <td width="829" height="20"><span class="name">Yuichi Inadomi </span> 　(<em>Old member</em>)<br /> 
Research Associate Professor of Faculty of Information Science and Electrical Engineering, Kyushu University 
 </tr>
</table>

<br />

<p align="center"> 　　<img src="../../images/line_gray_l.png" width="96%" height="1" />　</p>
<p align="center">　</p>
<table width="97%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="705">&nbsp;</td>
    <td width="230">　 　　　　　　<span id="pagetop"><a href="#toppage" class="links" id="text1">Page Top</a></span> <img src="../../images/yajirushi_blue03.jpg" alt="" width="11" height="12" /></td>
  </tr>
</table>

  </div>
  <div class="footer">
   Copyright &copy; 2012 - <script type="text/javascript">var d = new Date();document.write(d.getFullYear());</script> ACE PROJECT. All Right Reserved<br />
   
   <script type="text/javascript"><!--
　document.write( "Last update : " , document.lastModified );
// --></script>

    <!-- end .footer --></div>
     <!-- end .container --></div>
</body>
</html>
