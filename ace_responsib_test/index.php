
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
<meta name="keywords" content="ACE Project,ACP,post-Peta Scale High Performance Computing,Kyushu University,CREST,JST" />
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<link href="main/style/style01.css" rel="stylesheet" type="text/css" >

<link rel="shortcut icon" href="main/images/favicon.ico" content="image/x-icon"/>

<title>ACE Project</title>

<style type="text/css" >
<!--
.header {
	background-image: url(main/images/backgraund_2.png);
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
	color: #FFF;
}

.container .content .dropmenu .menu { 
    font-size: 12px;
	background-image: url(main/images/b_cst03_18.png);
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
	font-size: 13px;
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
	background-image: url(main/images/blue-button-new.png);
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
　background-image:url(main/images/blue-button-new.png);
}
.dropmenu li ul li a{
  padding: 0;
    color: #FFF;
  text-align: center;
	font-weight: bold;
	background-image:url(main/images/blue-button-new.png);
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
 	background-image:url(main/images/blue-button-new.png);
	color: #FFF;
}
.dropmenu li a:hover{
	color: #000033;
	font-weight: bold;
	background-image: url(main/images/b_cst03_18.png);
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
	text-align: center;
	margin: 0px;
	height: auto;
	border-top-width: 1px;
	border-bottom-width: 1px;
	border-top-style: none;
	border-bottom-style: none;
	border-top-color: #003;
	border-bottom-color: #003;
	font-style: normal;
	color: #999;
	clear: both;
}
p.menu a {
	font-size:12px;
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
	background-image: url(main/images/blue-button-new.png);
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-bottom-style: solid;
	border-left-style: solid;
	border-bottom-color: #39F;
	border-left-color: #FFF;
	border-top-width: 1px;
	border-top-style: solid;
	border-top-color: #FFF;
}
.container .content .menu .menu {
	font-size:12px;
	background-image: url(main/images/b_cst03_18.png);
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
	font-size:12px;
	font-weight: bold;
	background-image: url(main/images/b_cst03_18.png);
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
.subsubtitle {
	font-size: medium;
	color: #000;
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

<body onload="MM_preloadImages('main/immages/button_en_on.png','main/images/sitemap_jp_on.png','main/images/button_en_on.png')">

<div class="container">
  <div class="header">　<a href="index.html"><img src="main/images/ace-logo-20131111.png" alt="logo" width="141" height="93" />  　</a><img src="main/images/ace-logo-title-ver.4.png" width="557" height="65" alt="title" /><img src="main/images/button_d.png" width="17" height="90" /><a href="main/jp/index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','main/images/jp_button_on1.png',1)"><img src="main/images/jp_button_b.png" name="Image1" width="61" height="90" border="0" id="Image1" /></a>  <img src="main/images/button_d.png" width="17" height="90" /><a href="main/sitemap/index_en.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','main/images/sitemap_en_on.png',1)"><img src="main/images/sitemap_en_a.png" name="Image2" width="58" height="89" border="0" id="Image2" /></a></div>
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
<li><a href="index.html" class="menu">Home  </a></li>

<li><a href="main/en/01_overview/index.html">Project</a>
    <ul>
        <li> <a href="main/en/01_overview/index.html">Overview</a></li>
        <li> <a href="main/en/02_members/index.html">Members</a></li>
        <li><a href="main/en/03_publications/index.html">Publications</a></li>
        <li><a href="main/en/04_links/index.html">Related Links</a></li>
    </ul>
</li>    
<li><a href="main/en/07_document/index.html">Documents</a></li>
<li><a href="main/en/05_downloads/index.html">Downloads</a></li>

<li> <li><a href="main/en/09_questions/index.html">Contact</a>
    <ul>
        <li><a href="main/en/09_questions/index.html">Questions</a></li>
        <li><a href="http://ace-project.kyushu-u.ac.jp/mantis/login_page.php" target="_blank">Report/Proposal</a></li>
    </ul>
</li>        
  <li><a href="main/en/08_contrib/index.html">Contrib</a></li>
  		
  <p>&nbsp;</p>
<p>&nbsp;</p>
<table width="83%"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="41">&nbsp;</td>
       <td width="731" height="30" valign="top">
        <span class="text1">
     　<img src="main/images/arrow059_05.gif" width="13" height="13" /> <img src="main/images/new009_01.png" width="32" height="11" /> Update <a href="main/en/03_publications/index.html"><u>Publications</u></a> and <a href="main/en/02_members/index.html"><u>Member</u></a><u>s</u> (2016/4/18) <br />
         　<img src="main/images/arrow059_05.gif" width="13" height="13" />　　　<a href="main/en/05_downloads/index.html"><u>ACP-1.2.0</u></a> has been released on November 16. 2015.
    <br />
       
    　<img src="main/images/arrow059_05.gif" width="13" height="13" />　　　Mantis BTS is available. Please click <a href="http://ace-project.kyushu-u.ac.jp/mantis/login_page.php" target="_blank"><u>Report/Proposal</u></a>       
     <br />
    
       <!-- 　<img src="main/images/arrow059_05.gif" width="13" height="13" />　　　SC15 <a href="http://ri2t.kyushu-u.ac.jp/page/en/sc15.html" target="_blank"><u>Booth#2311</u></a>-->
       <!-- 　<img src="main/images/arrow059_05.gif" width="13" height="13" />　　　<u>ACP-1.1.1.</u> has been released on July 13. 2015.-->
       <!--　<img src="main/images/arrow059_05.gif" width="13" height="13" />　　　<u>ACP-1.1</u> has been released on May 11. 2015.-->
      <!-- 　<img src="main/images/arrow059_05.gif" width="13" height="13" /> <img src="main/images/new009_01.png" width="32" height="11" />  <a href="main/en/07_document/index.html" target="_blank"><u>Specification of ACP-1.1</u></a> is available on May 8. 2015.-->
      <!-- 　<img src="main/images/arrow059_05.gif" width="13" height="13" />　　　<a href="tutorial.html" target="_blank"><u>Hands-on Tutorial of ACP at SC14</u></a>--><!--       　<img src="main/images/arrow059_05.gif" width="13" height="13" />　　　<a href="main/en/05_downloads/index.html"><u>ACP-1.0</u></a> has been released on September 1. 2014. -->

  </span>
  </td></tr></table>    
  
  <br /> 
　
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="40">&nbsp;</td>
        <td width="891"><img src="main/images/line_gray_l.png" width="99%" height="1" align="texttop" />　
      </tr>
    </table>
    <table width="83%"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="49">&nbsp;</td>
        <td width="748" height="10" valign="top"><strong class="subsubtitle">ACE (Advanced Communication  for Exa) Project:</strong></tr>
    </table>    
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="30">&nbsp;</td>
        <td width="901"><img src="main/images/line.blue4.png" width="100%" height="17" align="texttop" />　
      </tr>
    </table>    
    
         <table width="85%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="52">&nbsp;</td>
        <td width="767" height="350" class="text1" span>This project is funded as part of a five-year program for &quot;Development of System Software Technologies
          for post-Peta Scale High Performance Computing&quot; of CREST by JST (Japan Science and Technology Agency).<br />
           <br />        <em>The goals of this project are:</em><br />                            
           　<img src="main/images/point040_10.gif" width="10" height="10" /> Establish technologies for building communication libraries that are capable of handling hundreds of 
            millions of processes on upcomming Exa-scale computer systems.<br />                           
          　<img src="main/images/point040_10.gif" width="10" height="10" /> Investigate methods for enabling scalable application by using facilities of this library.<br />
          <br /><em>Major research topics include:</em><br />
          　<img src="main/images/point040_10.gif" width="10" height="10" /> Runtime Optimization Technologies for Communication Library<br />
          　<img src="main/images/point040_10.gif" width="10" height="10" /> Protocols for Memory Saved Communication<br />
          　<img src="main/images/point040_10.gif" width="10" height="10" /> Packet Controlling Methods for Network Efficiency<br />
          　<img src="main/images/point040_10.gif" width="10" height="10" /> Collaborative Optimization Methods of Computation and Communication for Higher Performance 
            Efficiency of applications<br />
            <br />
            <em>Currently, the following organizations are participating in this project:</em><br />
          　<img src="main/images/point040_10.gif" width="10" height="10" /> Kyushu University <br />
          　<img src="main/images/point040_10.gif" width="10" height="10" /> Fujitsu Ltd.<br />
        　<img src="main/images/point040_10.gif" width="10" height="10" /> Institute of Systems, Information Technologies and Nanotechnologies<br />
            　<img src="main/images/point040_10.gif" width="10" height="10" /> Kyoto University <br />
        </td>
      </tr>
    </table>
    　　　   　　　

  
    <p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"> 　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　 </p>
  </div>
  <div class="footer">
  <p>Copyright &copy; 2012 - <script type="text/javascript">var d = new Date();document.write(d.getFullYear());</script> ACE PROJECT. All Right Reserved</p>
   <script type="text/javascript"><!--
document.write( "Last update : " , document.lastModified );
// --></script>

  </div>
  <!-- end .container --></div>
</body>
</html>
