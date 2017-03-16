<?php
 $ua = $_SERVER['HTTP_USER_AGENT'];
 if(preg_match('/(iPhone|Android.*Mobile|Windows.*Phone)/', $ua)){
    header('Location:index_boots.html');
    exit();
   }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
  
<head>
<meta name="keywords" content="ACE Project,ACP library,Downloads,software" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<link href="../../style/style_downloads02.css" rel="stylesheet" style type="text/css" />
<link rel="shortcut icon" href="../../images/favicon.ico" content="image/x-icon"> 

<title>ACE Project</title>

<!-- Optional theme -->
  <!-- Bootstrap -->
    <link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template--> 
    <link href="signin.css" rel="stylesheet" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
<!--
.dropmenu{
  *zoom:1;
	list-style-type: none;
	padding: 0;
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
	font-size: 13px;
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

.container .content .dropmenu .d{ 
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
	color:#000;
	text-align: center;
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
	　background-image:url(../../images/blue-button-new.png);
}
.dropmenu li ul li a{
	padding: 0;
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

.container .content .menu .d {
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

.header {
	background-image: 
	width:100%;
	max-width:930px;
	min-width:890px;
	margin:0 auto;
	background-image: url(../../images/backgraund_2.png);
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
	border-bottom-color: #39F;
	border-left-width: 1px;
	border-left-style: solid;
	border-left-color: #FFF;
	border-top-width: 1px;
	border-top-style: none;
	border-top-color: #006;
	font-size: 12px;
}

p.menu a:hover {
	color: #000033;
	text-align: center;
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
	text-decoration: none;
}

.sitemap {
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
	font-size: x-small;
	color: #000;
}

a link {
  color:#f0ad4e;
  text-decoration: none;
}
a hover {
    color: lighten(#f0ad4e, 93.5%);
    text-decoration: underline;
  }
#text2 {
	font-family: ヒラギノ角ゴ Pro W3, Hiragino Kaku Gothic Pro, メイリオ, Meiryo, Osaka, ＭＳ Ｐゴシック, MS PGothic, sans-serif;
}
.text2 {
	color: #000;
	text-align: left;
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
	font-size: 12px;
}

.subtitle {
	font-size: medium;
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
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

<!--</head>-->

<body onload="MM_preloadImages('../../images/jp_button_on.png','../../images/sitemap_jp_on.png','../../images/sitemap_en_on.png')">

<div class="container">
  <div class="header"><a href="../../../index.html">　<img src="../../images/ace-logo-20131111.png" width="141" height="93" alt="logo" /></a>　 
    <!-- end .header --><img src="../../images/ace-logo-title-ver.4.png" width="557" height="65" alt="title" /><img src="../../images/button_d.png" width="17" height="90" /><a href="../../jp/05_downloads/index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','../../images/jp_button_on.png',1)"><img src="../../images/jp_button_b.png" name="Image1" width="61" height="90" border="0" id="Image1" /></a> <img src="../../images/button_d.png" width="17" height="90" /><a href="../../sitemap/index_en.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','../../images/sitemap_en_on.png',1)"><img src="../../images/sitemap_en_a.png" name="Image2" width="58" height="89" border="0" id="Image2" /></a>

   </head>
</div>
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
<li><a href="../../../index.html" class="menu">Home</a></li>
  <li><a href="../01_overview/index.html" class="a">Project	</a>
    <ul>
        <li><a href="../01_overview/index.html" class="a">Overview	</a></li>
        <li><a href="../02_members/index.html"class="b">Members	</a></li>
        <li><a href="../03_publications/index.html"class="e">Publications</a></li>
        <li><a href="../04_links/index.html"class="c">Relaetd Links</a></li>
     </ul>
  </li>
  <li><a href="../07_document/index.html" class="a">Documents	</a></li>
  <li><a href="index.html" class="d">Downloads </a></li>
 <li><a href="../09_questions/index.html"class="h">Contact</a>
   <ul>
      <li><a href="../09_questions/index.html"class="h">Questions</a></li>
      <li><a href="http://ace-project.kyushu-u.ac.jp/mantis/login_page.php" class="b" target="_blank">Report/Proposal</a></li>
    </ul>
  </li>         
  <li><a href="../08_contrib/index.html"class="g">Contrib</a></li>
  </ul>
   </p>
        <p> 　  　 　　<!--<span class="sitemap"><a href="../../../index.html">Home</a> > Downloads</span>&nbsp;--></p>
     </br> 　    
   <span class="content"></span>
  <img src="../../images/obi_downloads_en.png" width="95%" height="38" /></p>
<p>&nbsp;</p>
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="40">&nbsp;</td>
        <td width="891"><img src="../../images/line_gray_l.png" width="99%" height="1" align="top" />　
      </tr>
</table>
    <table width="83%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="54">&nbsp;</td>
      <td width="743" height="16" valign="top" class="subtitle"><strong>ACP library Registration System</strong></tr>
    </table>    
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="30" >&nbsp;</td>
        <td width="901"><img src="../../images/line.blue4.png" width="100%" height="17" align="texttop" />　
      </tr>
</table>
<br />
    <table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="55">&nbsp;</td>
    <td width="861" height="16" id="pp" class="subtitle"><img src="../../images/arrow19-065.gif" width="16" height="16" />Downloads</td></tr>
</table>
<p></p>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="60">&nbsp;</td>
    <td width="856" height="16"><p> If you push the Accept button, we assume that you agreed with disclaimer. <!--These are required fields.--></p></td></tr>
</table>
</p>

 
<form method="post" action="registration.php" target="_blank">


<p> 　　　　　　　　　 　
  <input type="submit" name="button" class="btn btn-primary" id="button" value="Accept">
   
  　</p>
</form>
<p>&nbsp;</p>
</td>
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="40">&nbsp;</td>
        <td width="891"><img src="../../images/line_gray_l.png" width="99%" height="1" align="top" />　
      </tr>
</table>
    <table width="83%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="54">&nbsp;</td>
      <td width="743" height="16" valign="top" class="subtitle"><strong>Disclaimer</strong></tr>
    </table>    
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="30" >&nbsp;</td>
        <td width="901"><img src="../../images/line.blue4.png" width="100%" height="17" align="texttop" />　
      </tr>
</table>
<tr>
<td width="835" height="30">&nbsp;</td></tr>
<table width="84%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="87">&nbsp;</td>
    <td width="818" height="30">
    <span class ="text2"><ul>
    <li>Though we are carefully developing the  software on this site, we do not warrant that the software will meet your  requirements.</li>
    <li>The ACE project and the participating  organizations are not responsible for any damages resulting from the use of  those software</li>
    <li>If this is the first time for you to  download the software on this site, we kindly request you to provide your name,  organization and e-mail address, but they are not mandatory. If you do not want  to provide them, please leave those boxes empty.</li>
    <li>The provided names and organizations  are used inside of the ACE project to determine the popularity of the software.</li>
    <li>The provided e-mail addresses are  registerred in the announcement mailing list of the software so that you can be  informaed about future releases and anouncements.</li>
    <li>These provided information will never  be shared or displayed publicly.</li>
    </ul>
    </span>
     
   </td></tr>
</table>
<p>&nbsp;</p>
   
 <!--<p align="center"> 　　<img src="../../images/line_gray_l.png" width="100%" height="1" align="absbottom" /></p>-->
<p align="center"> 　　</p>
<p align="center">&nbsp;</p>
  <!-- end .content -->
  <div class="footer">
   Copyright &copy; 2012 - <script type="text/javascript">var d = new Date();document.write(d.getFullYear());</script> ACE PROJECT. All Right Reserved<br />
   </p>
 <script type="text/javascript"><!--
　document.write( "Last update : " , document.lastModified );
// --></script>

    <!-- end .footer --></div>
  <!-- end .container -->
</body>
</html>
