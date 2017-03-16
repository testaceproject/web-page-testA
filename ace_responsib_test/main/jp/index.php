
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<link href="../style/style00.css" rel="stylesheet" style type="text/css" />
<link rel="shortcut icon" href="../images/favicon.ico" content="image/x-icon"> 
<!--
<meta name="keywords" content="ACE-Project","Takeshi Nanri","JST CREST", "Kyushu University">
<meta name="description" 
content="This project is funded as part of a five-year program for "Development of System Software Technologies 
for post-Peta Scale High Performance Computing" of CREST by JST (Japan Science and Technology Agency). " >
<meta name="robots" content="all" >
-->
<title>ACE Project</title>

<style type="text/css">
<!--

body {
	color: #000;
	padding-top: 10px;
	margin-right: 0px;
	line-height: 1.4em;
	margin-left: 0;
	margin-top: 3px;
	margin-bottom: 1px;
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

.container .content .dropmenu .menu  { 
	background-image: url(../images/b_cst03_18_2.png);
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
	background-image: url(../images/blue-button-new.png);
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
　background-image:url(../images/blue-button-new.png);
}
.dropmenu li ul li a{
  padding: 0;
  color: #FFF;
  text-align: center;
   
	font-weight: bold;
	background-image:url(../images/blue-button-new.png);
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
 	background-image:url(../images/blue-button-new.png);
	color: #FFF;
}
.dropmenu li a:hover{
	color: #000033;
	font-weight: bold;
	background-image: url(../images/b_cst03_18_2.png);
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
	border-bottom-style: solid;
	border-top-color: #FFF;
	border-bottom-color: #FFF;
	font-style: normal;
	color: #003;
	clear: both;
	text-align: center;
}
p.menu a {
	font-size: 12px;
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
	background-image: url(../images/blue-button-new.png);
	border-bottom-style: solid;
	border-bottom-color: #66CCFF;
	border-left-style: solid;
	border-left-color: #FFF;
	border-left-width: 1px;
	border-bottom-width: 1px;
	border-top-width: 1px;
	border-top-style: solid;
	border-top-color: #FFF;
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
}
.container .content .menu .menu {
    color: #003;
	background-image: url(../images/b_cst03_18_2.png);
	border-left-width: 1px;
	border-left-style: solid;
	border-left-color: #FFF;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #6CF;
	border-right-width: 1px;
	border-right-style: solid;
	border-right-color: #FFF;
}
p.menu a:hover {
	font-size: 12px;
	color: #000033;
	text-align: center;
	background-image: url(../images/b_cst03_18_2.png);
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #66CCFF;
	border-right-width: 1px;
	border-left-width: 1px;
	border-right-style: solid;
	border-left-style: solid;
	border-right-color: #FFF;
	border-left-color: #FFF;
}

.header {
	background-image: url(../images/backgraund_2.png);
	border-bottom-width: 1px;
	border-bottom-style: none;
	border-bottom-color: #003;
	font-size: medium;
	width:100%;
	max-width:960px;

	margin:0 auto;
}

.sitemap {
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
	font-size: x-small;
	color: #000;
}
#update {
	text-align: left;
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

<body onload="MM_preloadImages('../images/button_en_on.png','../images/sitemap_jp_on.png','../images/button_en_on.png')">

<div class="container">
  <div class="header"><a href="index.html">　 <img src="../images/ace-logo-20131111.png" width="141" height="93" alt="logo" /></a> 　<!-- end .header --><img src="../images/ace-logo-title-ver.4.png" width="557" height="65" alt="title" /><img src="../images/button_d.png" width="17" height="90" /><a href="../../index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','../images/button_en_on.png',1)"><img src="../images/button_en_a.png" name="Image1" width="46" height="89" border="0" id="Image1" /> <img src="../images/button_d.png" width="17" height="90" /></a><a href="../sitemap/index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','../images/sitemap_jp_on.png',1)"><img src="../images/sitemap_jp_a (2).png" name="Image2" width="73" height="89" border="0" id="Image2" /></a></div>
 
  <div class="content">
  <style>
#normal li ul{
  display: none;
}
#normal li:hover ul{
  display: block;
}
</style>
   <p class="menu">
<ul id="normal"class="dropmenu">
 <li><a href="index.html" class="menu">ホ ー ム</a></li>
 <li><a href="01_overview/index.html">プロジェクト</a>
     <ul>
         <li><a href="01_overview/index.html">プロジェクト紹介	</a></li>
        <li><a href="02_members/index.html">メンバー紹介</a></li>
        <li><a href="03_publications/index.html"class="c">文献リスト</a></li>
        <li><a href="04_links/index.html">リンク</a></li>
     </ul>
 </li>  
 <li><a href="07_document/index.html">ドキュメント</a></li>
 <li><a href="05_downloads/index.html">ダウンロード</a></li>
 <li><a href="09_questions/index.html"class="h">Contact</a>
   <ul>
     <li><a href="09_questions/index.html"class="h">問い合わせ</a></li>       
    <li><a href="http://ace-project.kyushu-u.ac.jp/mantis/login_page.php"class="b" target="_blank">Report/Proposal</a></li>
    </ul>
</li>    
   <li><a href="08_contrib/index.html"class="g">Contrib</a></li>
</ul>
<!--	<p>&nbsp;</p>	-->	
      <p></p>
      <table width="68%" height="88" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="41" height="88">&nbsp;</td>
        <td width="591">
        　 <img src="../images/arrow059_05.gif" width="13" height="13" /> <img src="../images/new009_01.png" width="32" height="11" /> <a href="03_publications/index.html"><u>文献リスト</u></a>および<a href="02_members/index.html"><u>メンバー紹介</u></a>を更新しました ( 2016/4/18 ) <br />
           　 <img src="../images/arrow059_05.gif" width="13" height="13" />　　　　<a href="05_downloads/index.html"><u>ACP-1.2.0</u></a> 公開開始 ( 2015/11/16 - )
         <br />
        　 <img src="../images/arrow059_05.gif" width="13" height="13" /> 　　　 10月15日に開催された、<a href="01_overview/index.html#p04"><u>領域会議の発表資料</u></a>を掲載しました ( 2015/10/16 )
         <br />
        
        <!--  <img src="../images/arrow059_05.gif" width="13" height="13" />　　　　SC15に参加します  <a href="http://ri2t.kyushu-u.ac.jp/page/en/sc15.html" target="_blank"><u>Booth #2311</u></a> -->
       

        </tr>
    </table>    
     <br />  
   <table width="97%" height="22" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="53" height="22">&nbsp;</td>
        <td width="1124"><img src="../images/line_gray_l.png" width="99%" height="1" align="middle" />　
     </tr>
</table>
    <table width="68%" height="37" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="65" height="37">&nbsp;</td>
        <td width="760"><span class="subtitle"><strong>は じ め に</strong></span>　
      </tr>
    </table>    
<table width="97%" height="16" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="53">&nbsp;</td>
        <td width="1124"><img src="../images/blue_gray line2.png" width="100%" height="16" align="texttop" />　
      </tr>
</table>    
    
       <table width="83%" height="60" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="46">&nbsp;</td>
        <td width="751" class="text1">このプロジェクトは、(独)科学技術振興機構(JST)、戦略的創造研究推進事業CREST 「ポストペタスケール高性能計算に資するシステムソフトウェア技術の創出」より 平成23年度に採択された研究課題「省メモリ技術と動的最適化技術によるスケーラブル通信
ライブラリの開発」です。</td>
      </tr>
    </table>
   
    　　　   　　　

 　   
 <p>&nbsp;</p>
<p>&nbsp;</p>
 <p>&nbsp;</p>
<p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
<p>&nbsp;</p>
</div>
  <div class="footer">
  <p>Copyright &copy; 2012 - <script type="text/javascript">var d = new Date();document.write(d.getFullYear());</script> ACE PROJECT. All Right Reserved</p>

 <script type="text/javascript"><!--
document.write( "Last update : " , document.lastModified );
// --></script>

    
    <!-- end .footer --></div>
<!-- end .container --></div>
</body>
</html>
