

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
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<link href="../../style/style_link01.css" rel="stylesheet" style type="text/css" />
<link rel="shortcut icon" href="../../images/favicon.ico" content="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>ACE Project</title>
<style type="text/css">
<!--
.header {
	background-image: url(../../images/backgraund_2.png);
	width:100%;
	max-width:930;
	min-width:900px;
	margin:0 auto;
}
.dropmenu{
  *zoom:1;
	list-style-type: none;
	padding: 0;
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
	font-style: normal;
	clear: both;

}

.container .content .dropmenu .c { 
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
	width: 12em;
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
    color:#FFFFFF
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

}


p.menu {
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
	margin: 0px;
	height: auto;
	border-top-width: 1px;
	border-bottom-width: 1px;
	border-top-style: none;
	border-bottom-style: none;
	border-top-color: #006;
	border-bottom-color: #006;
	font-style: normal;
	color: #999;
	clear: both;
	text-align: center;
}

.container .content .menu .c {
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
	color: #006;
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
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #FFF;
	border-left-width: 1px;
	border-left-style: solid;
	border-left-color: #FFF;
	border-top-width: 1px;
	border-top-style: none;
	border-top-color: #006;
	font-size: 12px;
}

p.menu a:hover {
	color: #000066;
	text-align: center;
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
	text-decoration: none;
}
.sitemap {
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
	font-size: x-small;
	color: #000;
}
.subtitle {
	font-size: medium;
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
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>
</head>

<body>

<div class="container">
  <div class="header"><a href="../index.html">　<img src="../../images/ace-logo-20131111.png" alt="" width="141" height="93" /></a>　 
    <!-- end .header --><img src="../../images/ace-logo-title-ver.4.png" alt="ACE Project title" width="557" height="65" /><img src="../../images/button_d.png" width="17" height="90" /><a href="../../en/04_links/index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','../../images/button_en_on.png',1)"><img src="../../images/button_en_a.png" name="Image1" width="46" height="89" border="0" id="Image1" /></a> <img src="../../images/button_d.png" width="17" height="90" /><a href="../../sitemap/index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','../../images/sitemap_jp_on.png',1)"><img src="../../images/sitemap_jp_a (2).png" name="Image2" width="73" height="89" border="0" id="Image2" /></a></div>
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
<li><a href="../index.html" class="menu">ホ ー ム</a></li>
<li><a href="../01_overview/index.html" class="a">プロジェクト</a>
    <ul>
        <li><a href="../01_overview/index.html" class="a">プロジェクト紹介	</a></li>
        <li><a href="../02_members/index.html"class="b">メンバー紹介	</a></li>
        <li><a href="../03_publications/index.html"class="e">文献リスト</a></li>
        <li><a href="index.html"class="c">リンク</a></li>
    </ul>
</li>
<li><a href="../07_document/index.html"class="f">ドキュメント</a></li>
<li><a href="../05_downloads/index.html"class="e">ダウンロード</a></li>
<li><a href="../09_questions/index.html"class="h">Contact</a>
   <ul>
     <li><a href="../09_questions/index.html"class="h">問い合わせ</a></li>       
     <li><a href="http://ace-project.kyushu-u.ac.jp/mantis/login_page.php"class="b" target="_blank">Report/Proposal</a></li>
    </ul>
</li>    
<li><a href="../08_contrib/index.html"class="g">Contrib</a></li>


</p>
   <p>&nbsp;</p>
   <p><span class="sitemap"> <a href="../01_overview/index.html"><u>プロジェクト</u></a> ＞ <u><a href="index.html">リンク</a></u></span>　</p>
    <p>&nbsp;</p>
     <p><img src="../../images/obi_links.png" alt="" width="100%" height="38" /></p>
    <p>&nbsp;</p>
     <table width="97%" height="10" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="41">&nbsp;</td>
        <td width="890"><img src="../../images/line_gray_l.png" width="99%" height="1" align="top" />　
      </tr>
    </table>
     <table width="72%" height="5"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="58">&nbsp;</td>
        <td width="633" height="5"><span class="subtitle"><strong>リンク</strong></span><strong>&nbsp;</strong></tr>
    </table>    
<table width="97%" height="16" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="39">&nbsp;</td>
        <td width="892"><img src="../../images/blue_gray line2.png" width="100%" height="16" align="texttop" />　
      </tr>
</table>    
    </td></p>      
    
  <table width="93%" height="5" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="835" height="5"> <img src="../../images/c16_gy6.gif" width="10" height="10" /> <a href="http://www.kyushu-u.ac.jp/" target="_blank" class="text1"> <u>九州大学</u></a>
    </td></tr>
</table></p>
  <table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="835" height="5"> <img src="../../images/c16_gy6.gif" width="10" height="10" /> <a href="http://www.isit.or.jp/" target="_blank" class="text1"> <u>公益財団法人 九州先端科学技術研究所 （ISIT）</u></a>
    </td></tr>
</table></p>
 <table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="835" height="5"> <img src="../../images/c16_gy6.gif" width="10" height="10" /> <a href="http://jp.fujitsu.com/" target="_blank" class="text1"> <u>富士通 株式会社</u></a>
    </td></tr>
</table></p>
 <table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="835" height="5"> <img src="../../images/c16_gy6.gif" width="10" height="10" /> <a href="http://www.jst.go.jp/" target="_blank" class="text1"> <u>独立行政法人 科学技術振興機構（JST）</u></a>
    </td></tr>
</table></p>
 <table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="835" height="15"> <img src="../../images/c16_gy6.gif" width="10" height="10" /> <a href="http://www.postpeta.jst.go.jp/" target="_blank" class="text1"> <u>独立行政法人 科学技術振興機構（JST）</u></a><br/>
              <span class="text1"> 　「ポストペタスケール高性能計算に資するシステムソフトウェア技術の創出」</span>
    </td></tr>
</table></p>

<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="835" height="5"> <img src="../../images/c16_gy6.gif" width="10" height="10" /> <a href="http://ri2t.kyushu-u.ac.jp/index-page" target="_blank" class="text1"> <u>九州大学 情報基盤研究開発センター</u></a> 
    </td></tr>
</table></p>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="835" height="5"> <img src="../../images/c16_gy6.gif" width="10" height="10" /> <a href="http://iii.kyushu-u.ac.jp/" target="_blank" class="text1"> <u>九州大学 情報統括本部</u></a> 
    </td></tr>
</table></p>
  　　　
<p align="center" class="content">　　 <img src="../../images/line_gray_l.png" width="100%" height="1" /></p>
<p align="center" class="content">&nbsp;</p>
<p align="center" class="content">&nbsp;</p>
  <!-- end .content --></div>
  <div class="footer">
    Copyright &copy; 2012 - <script type="text/javascript">var d = new Date();document.write(d.getFullYear());</script> ACE PROJECT. All Right Reserved<br />
    </p>
     
  <script type="text/javascript"><!--
　document.write( "Last update : " , document.lastModified );
// --></script>

    <!-- end .footer --></div>
<!-- end .container --></div>
</body>
</html>
