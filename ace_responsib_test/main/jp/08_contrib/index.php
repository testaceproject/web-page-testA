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

.container .content .dropmenu .g { 
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
.container .content .menu .d {
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
.subsubtitle {
	font-size: medium;
}
.subtitle {	font-size: large;
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

<body onload="MM_preloadImages('../../images/button_en_on.png','../../images/sitemap_jp_on.png')">

<div class="container">
  <div class="header"><a href="../index.html">　<img src="../../images/ace-logo-20131111.png" alt="" width="141" height="93" /></a>　 
    <!-- end .header --><img src="../../images/ace-logo-title-ver.4.png" alt="ACE Project title" width="557" height="65" /><img src="../../images/button_d.png" width="17" height="90" /><a href="../../en/08_contrib/index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','../../images/button_en_on.png',1)"><img src="../../images/button_en_a.png" name="Image1" width="46" height="89" border="0" id="Image1" /></a> <img src="../../images/button_d.png" width="17" height="90" /><a href="../../sitemap/index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','../../images/sitemap_jp_on.png',1)"><img src="../../images/sitemap_jp_a (2).png" name="Image2" width="73" height="89" border="0" id="Image2" /></a></div>
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
<li><a href="../01_overview/index.html" class="a">プロジェクト	</a>
    <ul>
        <li><a href="../01_overview/index.html" class="a">プロジェクト紹介	</a></li>
       <li> <a href="../02_members/index.html"class="b">メンバー紹介	</a></li>
       <li><a href="../03_publications/index.html"class="e">文献リスト</a></li>
       <li><a href="../04_links/index.html"class="c">リンク</a></li>
    </ul>
</li>
<li><a href="index.html" class="d">ドキュメント	</a></li>
<li><a href="../05_downloads/index.html" class="f">ダウンロード</a></li>
<li><a href="../09_questions/index.html"class="h">Contact</a>
   <ul>
     <li><a href="../09_questions/index.html"class="h">問い合わせ</a></li>       
    <li><a href="http://ace-project.kyushu-u.ac.jp/mantis/login_page.php"class="b" target="_blank">Report/Proposal</a></li>
    </ul>
</li>  
  <li><a href="../08_contrib/index.html"class="g">Contrib</a></li>
</ul>
<br />  
   <p> 　　 <!--　<span class="sitemap"><a href="../index.html">ホーム</a> ＞ ドキュメント</span>--></p>
       <p><img src="../../images/obi_contrib.png" alt="" width="892" height="38" /></p>
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
        <td width="633" height="5"><strong class="subtitle">Contribution</strong></tr>
    </table>    
<table width="97%" height="16" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="39">&nbsp;</td>
        <td width="892"><img src="../../images/blue_gray line2.png" width="100%" height="16" align="texttop" />　
      </tr>
</table>    
    </td></p>      
    
   <table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="53">&nbsp;</td>
    <td width="924" height="5"><p>ACEプロジェクトでは、ACPライブラリに関する皆様の寄与を歓迎いたします。<br />
    ソースコード一式に加えて、下記の要項を記載いただき<img src="../../images/mailinglist.png" alt="mailinglist" width="287" height="26" align="absmiddle" />までご送付下さい。<br />
    お送り頂いたソースコードはプロジェクト内で審議の上、こちらのページへ順次公開する予定です。
    </p></td></tr>
  <tr>
    <td>&nbsp;</td>
    <td height="5">&nbsp;</td>
  </tr>
</table>
</p>
 <table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="835" height="5">
     <p><img src="../../images/line_gray.png" width="742" height="1" /></p>
     &nbsp;<strong><img src="../../images/ico05-002.gif" width="16" height="16" align="texttop" /> 記載要項</strong><br />
         
        　　開発者名：<br />
        　　日　　付：<br />
        　　機能概要：<br />
        　　利用方法：<br />
        　　動作条件：<br />
        　　今後の開発予定：<br />
        　　連 絡 先：<br />
   </p>
   <p><img src="../../images/line_gray.png" width="742" height="1" /></p>
   
   </td></tr>
</table>
　 　  　
<table width="84%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="42">&nbsp;</td>
    <td width="739" height="5"><p><strong>受け付けたcontribの扱いについて</strong><br/>
     </td>
  </tr>
</table>
     
<table width="81%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="84">&nbsp;</td>
    <td width="669" height="5">
        <ul>
        <li>寄与頂いたソースコードは、当サイトでの公開に同意いただいたものとみなします。</li>
        <li>もし、ソースコードの公開を希望されない場合、その旨をメールに記述してください。</li>
        <li>ACEプロジェクトとその参加機関は、本ウェブサイトで公開するソフトウェアの利用によって発生したいかなる損害にも責任を負いかねます。</li>
        <li>寄与頂いた ACEライブラリ本体の改良提案や利用例などは、開発者と ACEロジェクトの合意があれば ACP ライブラリ本体に採用する場合があります。</li>        
       </ul>
    </p></td>
  </tr>
</table>
</p>
 　　　　 <span class="content"><img src="../../images/line_gray.png" alt="" width="742" height="1" /></span>
 <table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="835" height="15">&nbsp;</td></tr>
</table></p>

<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="835" height="5"> <a href="http://www.cc.kyushu-u.ac.jp/" target="_blank" class="text1"><u></u></a> 
    </td></tr>
</table></p>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="835" height="5">&nbsp;</td></tr>
</table></p>
  　　　

<p align="center" class="content">&nbsp;</p>
  <!-- end .content --></div>
   <div class="footer">
    Copyright &copy; 2012 - <script type="text/javascript">var d = new Date();document.write(d.getFullYear());</script> ACE PROJECT. All Right Reserved<br />
 
    <!-- end .footer -->　<br /><script type="text/javascript"><!--
　document.write( "Last update : " , document.lastModified );
// --></script>
</div>
    <!-- end .footer --></div>
<!-- end .container --></div>
</body>
</html>
