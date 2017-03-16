
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
<meta name="keywords" content="Ace Project,Takeshi Nanri,ACP Lirary,Kyushu University,T.Nanri" />
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<link href="../../style/style_publications02.css" rel="stylesheet" style type="text/css" />
<link rel="shortcut icon" href="../../images/favicon.ico" content="image/x-icon"  />
<title>ACE Project</title>

<style type="text/css">
<!--

.header {
	background-image: url(../../images/backgraund_2.png);
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
}

.container .content .dropmenu .c{ 
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
	border-bottom-color: #3CF;
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
.subsubtitle {
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
</script>
</head>

<body onload="MM_preloadImages('../../images/jp_button_on.png','../../images/sitemap_jp_on.png','../../images/sitemap_en_on.png')">

<div class="container">
  <div class="header"><a name="pagetop" id="pagetop"></a><a href="../../../index.html">　<img src="../../images/ace-logo-20131111.png" width="141" height="93" alt="logo" /></a>　 
    <!-- end .header --><img src="../../images/ace-logo-title-ver.4.png" width="557" height="65" alt="title" /><img src="../../images/button_d.png" width="17" height="90" /><a href="../../jp/03_publications/index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','../../images/jp_button_on.png',1)"><img src="../../images/jp_button_b.png" name="Image1" width="61" height="90" border="0" id="Image1" /></a> <img src="../../images/button_d.png" width="17" height="90" /><a href="../../sitemap/index_en.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','../../images/sitemap_en_on.png',1)"><img src="../../images/sitemap_en_a.png" name="Image2" width="58" height="89" border="0" id="Image2" /></a></div>
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
          <li><a href="index.html"class="c">Publications</a></li>
           <li><a href="../04_links/index.html"class="b">Related Links</a></li>
      </ul>    
  </li> 
  
  <li><a href="../07_document/index.html" class="f">Documents	</a></li>
  <li><a href="../05_downloads/index.html" class="d">Downloads </a></li>
  <li><a href="../09_questions/index.html"class="h">Contact</a>
   <ul>
      <li><a href="../09_questions/index.html"class="h">Questions</a></li>       
       <li><a href="http://ace-project.kyushu-u.ac.jp/mantis/login_page.php" class="b" target="_blank">Report/Proposal</a></li>
    </ul>
  </li>     
  <li><a href="../08_contrib/index.html"class="g">Contrib	</a></li> 
  </ul>
     
    
    <p><span class="sitemap"> <a href="../01_overview/index.html"><u> Project</u></a> ＞ <u><a href="index.html">Publications</a></u></span>　</p> 
<p>　<span class="yohaku"><span class="yohaku"><span class="yohaku">　　　 </span></span></span></p>
    <p class="yohaku"><span class="yohaku"></span>
    <img src="../../images/obi_publications_en1.png" width="100%" height="38" /></p>
<p>&nbsp;　　</p>
<p> </p>
  <table width="83%" height="25"border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="35">&nbsp;</td>
        <td width="762" height="25"valign="top"><p><img src="../../images/arrow06-002.gif" width="16" height="16" align="absmiddle" /> <span class="content"><a href="#p01" class="subtitle"><u>Papers</u></a></span><br />
            <img src="../../images/arrow06-002.gif" width="16" height="16" align="absmiddle" /> <a href="#p02" class="subtitle"><u>Presentations</u></a>　(<a href="#p03"><u>Invited Speech</u></a>・<a href="#p04"><u>Oral Presentations</u></a>・<a href="#p05"><u>International Conferences</u></a> )
        </p>
      </tr>
</table>   

  <table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="40">&nbsp;</td>
        <td width="891"><img src="../../images/line_gray_l.png" width="99%" height="1" align="top" />　
      </tr>
</table>
    <table width="83%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="54">&nbsp;</td>
      <td width="743" height="5" valign="top"><a name="p01" id="p01"></a><strong class="subsubtitle">Papers</strong>    </tr>
    </table>    
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="30" >&nbsp;</td>
        <td width="901"><img src="../../images/line.blue4.png" width="100%" height="17" align="texttop" />　
      </tr>
</table>    
    
     <p>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="age">2016</span></td>
      </tr>
  </table>
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="907" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Shinji Sumimoto, Yuichiro Ajima, Kazushige Saga, Takafumi Nose, Naoyuki Shida, Takeshi Nanri,</span></td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="15"> <span class="text1">&quot;The Design of Advanced Communication to Reduce Memory Usage for Exa-scale Systems&quot;,<br />
    Proceedings of the 12th International Meeting On High Performance Computing for Computational Science、2016（accepted)</span></td></tr>
</table>
<p>
   <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="age">2015</span></td>
      </tr>
  </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="907" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Yuichiro Ajima, Takafumi Nose, Kazushige Saga, Naoyuki Shida and Shinji Sumimoto,</span></td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="15"> <span class="text1">&quot;ACPdl: Data-Structure and Global Memory Allocator Library over a Thin PGAS-Layer&quot;,<br />
     Proceedings of the First International Workshop on Extreme Scale Programming Models and Middleware、pp. 11-18、2015
（DOI：10.1145/2832241.2832242）
</span>
    </td></tr>
</table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="907" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Kin'ya Takahashi, Sho Iwagami, Taizo Kobayashi, Toshiya Takami,</span></td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="15"> <span class="text1">&quot;Theoretical Estimation of the Acoustic Energy Generation and Absorption Caused by Jet Oscillation&quot;,<br />
    J. Phys. Soc. Jpn., Vol.85, No.4, Article ID: 044402</span>
    </td></tr>
</table>
  <p>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="age">2014</span>&nbsp;</td>
      </tr>
  </table>
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="907" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> T. Takami and D. Fukudome,</span></td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="15"> <span class="text1">&quot;An identity parareal method for temporal  parallel computations&quot;,<br />
      Lecture Notes in Computer Science Vol. 8384, edited  by R. Wyrzykowski, J. Dongarra, K. Karczewski, and J. Wasniewski, pp. 67-75, 2014.
(DOI: 10.1007/978-3-642-55224-3_7)</span>
    </td></tr>
</table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="907" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> K. Fukazawa, T. Nanri and T. Umeda,</span></td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="15"> <span class="text1">&ldquo;Performance Measurements of MHD Simulation for  Planetary Magnetosphere on Peta-Scale Computer FX10&rdquo;, <br />
      Parallel Computing: Accelerating  Computational Science and Engineering (CSE), Advances in Parallel Computing 25,  pp.387-394, IOS Press, 2014. (DOI: 10.3233/978-1-61499-381-0-387)</span>
    </td></tr>
</table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="907" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> T. Takami and D. Fukudome,</span></td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="15"> <span class="text1">&ldquo;An efficient pipelined  implementation of space-time parallel applications&rdquo;, <br />
      Parallel Computing:  Accelerating Computational Science and Engineering (CSE), Advances in Parallel Computing 25, pp.273-281, IOS Press, 2014. (DOI: 10.3233/978-1-61499-381-0-273)</span>
    </td></tr>
</table>      
   <p>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="age">2013</span>&nbsp;</td>
  </tr>
</table>
  
   <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="907" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> K. Fukazawa, T. Nanri, and  T. Umeda,</span></td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="15"> <span class="text1">&ldquo;Performance evaluation of magnetohydrodynamics  simulation for magnetosphere on K computer&rdquo;,<br />
      In: AsiaSim 2013, Communications in Computer and  Information Science, Vol.402, edited by G. Tan, G. K. Yeo, S. J. Turner, and Y.  M. Teo, pp.570-576, Springer-Verlag Berlin Heidelberg, 2013. (ISBN:  978-3-642-45036-5) (DOI: 10.1007/978-3-642-45037-2_61)</span>
    </td></tr>
</table>             
    <p>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="age">2012</span>&nbsp;</td>
      </tr>
  </table>
       
   <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="907" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> K.  Fukazawa and T. Nanri,　</span></td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="15"> <span class="text1">&ldquo;Effective Performance of Large-Scale MHD Simulation for Planetary Magnetosphere with Massively Parallel Computer&rdquo;, <br />
      Proc. JSST, pp.243-247, 2012 </span>
    </td></tr>
</table>   
   <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="907" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> S. Fujino, T. Nanri, K. Kusaba, </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="15"> <span class="text1">&ldquo;Balancing Communication and Execution Technique for  Parallelized Sparse Matrix-Vector Multiplication&rdquo;, <br />
      4th International Conference on Future Computational Technologies and Applications, Jul. 2012 </span>
    </td></tr>
</table>   
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="907" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> K.  Fukazawa, T. Nanri, </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Performance  of Large Scale MHD Simulation of Global Planetary Magnetosphere with Massively Parallel  Scalar Type Supercomputer Including Post Processing&rdquo;, <br />
      in Proceedings of 14th IEEE International Conference on High Performance Computing and Communication, pp. 976-982, Liverpool, United Kingdom, Jun. 2012. (DOI:10.1109/HPCC.2012.142)</span>
    </td></tr>
</table> 
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="907" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Yoshiyuki Morie, and Nanri Takeshi, </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Task Allocation Optimization for Neighboring Communication on Fat Tree&rdquo;, <br />
      in Proceedings of 14th IEEE International Conference on High Performance Computing and Communication , pp.1219–1225, Liverpool, United Kingdom, Jun. 2012.  (DOI:10.1109/HPCC.2012.179)</span>
    </td></tr>
</table> 
   <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="907" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> T. Takami and A. Nishida, </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Parareal Acceleration of Matrix Multiplication&rdquo;, <br />
      Advances in Parallel Computing, vol. 22, pp.437-444, 2012.(DOI:10.3233/978-1-61499-041-3-437)</span>
    </td></tr>
</table> 
   <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="907" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> T.  Umeda, K. Fukazawa, Y. Nariyuki, and T. Ogino, </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;A  Scalable Full Electro- Magnetic Vlasov Solver for Cross-scale Coupling in Space  Plasma&rdquo;, <br />
      IEEE  Transactions on Plasma Science, Vol. 40, No. 5, pp.1421-1429, 2012.(DOI:10.1109/TPS.2012.2188141)</span>
    </td></tr>
</table> 
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="907" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> T.  Umeda and K. Fukazawa, </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Performance  measurement of parallel Vlasov code for space plasma on various scalar-type  supercomputer systems&rdquo;, <br />
      In:  Algorithms and Architectures for Parallel Processing, Lecture Notes in Computer  Science, Vol.7439, edited by Y. Xiang, I. Stojmenovic, B.O. Apduhan, G. Wang,  K. Nakano, and A. Zomaya, pp.233-240, 2012. (ISBN: 978-3-642-33077-3)  (DOI:10.1007/978-3-642-33078-0_17)</span>
    </td></tr>
</table> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="907" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Fukazawa, K., T. Ogino, and  R. J. Walker, </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;A magnetohydrodynamic simulation study of Kronian field-aligned  currents and auroras&rdquo;, <br />
    J. Geophys. Res<em>.,</em> 117, A02214,  2012 (doi: 10.1029/2011JA016945).</span>
    </td></tr>
</table> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="907" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Fukazawa, K., T. Umeda, </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Performance measurement  of magnetohydrodynamic code for space plasma on the typical scalar type supercomputer systems with the large number of cores&rdquo;, <br />
    International  Journal of High Performance Computing, 2012 (doi: 10.1177/1094342011434813).</span>
    </td></tr>
</table>  
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="907" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" />  Umeda, T., K. Fukazawa, Y. Nariyuki, and T. Ogino, </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;A scalable full electromagnetic Vlasov solver for cross-scale coupling in  space plasma&rdquo;, <br />
    IEEE Transactions on Plasma Science, 2012 (in press).</span>
    </td></tr>
</table>  
<table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="760">&nbsp;</td>
    <td width="181"> 　　<strong class="text1"><a href="#pagetop">Page Top</a></strong> <img src="../../images/yajirushi_blue03.jpg" alt="" width="11" height="12" /></td>
  </tr>
</table>
 <table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="40">&nbsp;</td>
        <td width="891"><img src="../../images/line_gray_l.png" width="99%" height="1" align="top" />　
      </tr>
</table>
    <table width="83%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="54">&nbsp;</td>
      <td width="743" height="5" valign="top"><a name="p02" id="p02"></a><strong class="subsubtitle">Presentations</strong>  </tr>
    </table>    
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="30" >&nbsp;</td>
        <td width="901"><img src="../../images/line.blue4.png" width="100%" height="17" align="texttop" />　
      </tr>
</table>    
    <p>
     <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="53" >&nbsp;</td>
      <td width="907" height="5"><span class="text1"><strong> <a name="p03" id="p03"></a>Invited Speech</strong></span>&nbsp;</td>
      </tr>
    </table>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="52" >&nbsp;</td>
      <td width="908" height="5"><span class="age"> 2016</span>&nbsp;</td>
      </tr>
    </table>
     <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="20"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Taizo Kobayashi,	 </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">Uncertainty and Dynamical Process on Computation&rdquo;,<br />
      International Workshop on Advanced Future Studies, Kyoto University, Japan , 14-16, Mar. 2016</span></td></tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="52" >&nbsp;</td>
      <td width="908" height="5"><span class="age"> 2015</span>&nbsp;</td>
      </tr>
    </table>
     <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="20"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> K. Fukazawa, and R. J. Walker, </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">An MHD Simulation of the Dynamics of the Kronian Magnetosphere Driven by Solar Wind Observations&rdquo;,<br />
      AOGS 12th Annual Meeting, Singapore , 5, Aug.2015.</span></td></tr>
</table>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="52" >&nbsp;</td>
      <td width="908" height="5"><span class="age"> 2013</span>&nbsp;</td>
      </tr>
    </table>
     <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="20"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> H. Honda, Y. Inadomi, J. Maki, </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">Multiple-input parallel RHF calculation for improving  SIMD operation efficiency&rdquo;,<br />
      5th JCS International Symposium on Theoretical  Chemistry, Nara, 2-6 Dec. 2013.</span></td></tr>
</table>
 
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="20"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> T. Nanri, H. Sugiyama, K. Fukazawa</span>,
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;A Cost-Efficient Approach for Automatic Algorithm Selection of Collective Communications&rdquo;,<br />
      SIAM  Conference on Computational Science and Engineering, 25 Feb. - 1 Mar. 2013</span>.
    </td></tr>
</table>
 
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Y.  Inadomi,  </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Performance  improvement of FMO program for effective massively parallel execution on  K-computer&rdquo;,<br />
      International  Workshop on Massively Parallel Programming Now in Molecular Science, Tokyo,  Japan, 28, Jan. 2013.</span>
    </td></tr>
</table>
 
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="52" >&nbsp;</td>
      <td width="908" height="5"><span class="age"> 2012</span>&nbsp;</td>
  </tr>
</table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> H.  Honda, F. Mehdipour, H. Kataoka, K. Inoue, N. Yoshikawa, A. Fujimaki, H.  Akaike, N. Takagi and K. J. Murakami,  </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Enhancing  Performance and Power Efficiencies of Scientific Computing through an SFQ  Reconfigurable Data-Path Processor&rdquo;,<br />
      Superconducting  SFQ VLSI Workshop 2012 (SSV2012), Nagoya, 6-7 Dec. 2012.</span>
    </td></tr>
</table>
 
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> K.  Fukazawa, T. Ogino, R. J. Walker,  </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Comparative  Global Dynamics of Planetary Magnetospheres&rdquo;,<br />
      AOGS2012,  Singapore, 13-17 Aug. 2012.</span>
    </td></tr>
</table>
 
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> K.  Fukazawa,  </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Trends and Future of Magnetospheric Global Simulations&rdquo;,<br />
      AOGS2012,  Singapore, 13-17 Aug. 2012.</span></td></tr>
</table>
 
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="54" >&nbsp;</td>
      <td width="906" height="5"><span class="age"> 2011</span>&nbsp;</td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> R. J. Walker, Fukazawa, K., T. Ogino,  </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Trends and Future of Magnetospheric Global Simulations&rdquo;,<br />
 ISSS-10, Banff, Canada, 24 - 31 July 2011. </span>
    </td></tr>
</table>  
<table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="760">&nbsp;</td>
    <td width="181"> 　　 <strong class="text1"><a href="#pagetop">Page Top</a></strong> <img src="../../images/yajirushi_blue03.jpg" alt="" width="11" height="12" /></td>
  </tr>
</table>
<p align="center">　　<img src="../../images/line_gray_l.png" width="96%" height="1" /></p>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="53" >&nbsp;</td>
      <td width="907" height="5"><span class="text1"><strong> <a name="p04" id="p04"></a>Oral Presentations</strong></span>&nbsp;</td>
  </tr>
</table>
 <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="age"> 2016</span>&nbsp;</td>
      </tr>
    </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Takeshi Nanri,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Evaluation of On-Demand Message-Passing Module over RDMA Network&rdquo;, <br/>
      2nd Annual Meeting on Advanced Computing System and Infrastructure (ACSI2016 ), Centennial Hall Kyushu University School of Medicine, Fukuoka, 20, Jan. 2016. </span></td></tr>
</table> 
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Yuichiro Ajima,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;ACPdl: Data-Structure and Global Memory Allocator Library over a Thin PGAS-Layer&rdquo;, <br/>
      2nd Annual Meeting on Advanced Computing System and Infrastructure (ACSI2016 ), Centennial Hall Kyushu University School of Medicine, Fukuoka, 20, Jan. 2016 </span></td></tr>
</table>    
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="age"> 2015</span>&nbsp;</td>
      </tr>
    </table>
    
      <table width="100%"  border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Ryutaro Susukita, Yoshiyuki Morie, Takeshi Nanri, Hidetomo Shibamura,</span>
       </td>
      </tr>
    </table>  
 <table width="93%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="70" >&nbsp;</td>
      <td width="823" height="15"><span class="text1">&ldquo;Performance Evaluation of RDMA Communication Patterns by Means of Simulations&rdquo;, <br />
        2015 Joint International Mechanical, Electronic abd Information Technology Conference, Chongqing Jinkaoyuan Conference Center, China, 19, Dec. 2015.</span></td>
      </tr>
  </table>
    <table width="100%"  border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Hidetomo Shibamura,</span>
       </td>
      </tr>
    </table>  
 <table width="93%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="70" >&nbsp;</td>
      <td width="823" height="15"><span class="text1">&ldquo;Simulation of RDMA Communication with NSIM-ACE &rdquo;, <br />
        International Workshop on Language, Network and System Software 2015 (LENS2015), Akihabara Convention Hall , 30, Oct. 2015.</span></td>
      </tr>
  </table>
    <table width="100%"  border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Hiroaki Honda,</span>
       </td>
      </tr>
    </table>  
 <table width="93%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="70" >&nbsp;</td>
      <td width="823" height="15"><span class="text1">&ldquo;Development of Applications on ACP Library&rdquo;, <br />
        Language, Network and System Software 2015 (LENS2015),  Akihabara Convention Hall, 30, Oct. 2015.</span></td>
      </tr>
  </table>
    <table width="100%"  border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Takeshi Nanri,</span>
       </td>
      </tr>
    </table>  
 <table width="93%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="70" >&nbsp;</td>
      <td width="823" height="15"><span class="text1">&ldquo;Introduction of ACE (Advanced Communication library for Exa) Project&rdquo;, <br />
        International Workshop on Language, Network and System Software 2015 (LENS2015),　 Akihabara Convention Hall, 30, Oct. 2015.</span></td>
      </tr>
  </table>
    <table width="100%"  border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Hidetomo Shibamura,</span>
       </td>
      </tr>
    </table>  
 <table width="93%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="70" >&nbsp;</td>
      <td width="823" height="15"><span class="text1">&ldquo;Active Packet Pacing as a Congestion Avoidance Technique in Interconnection Network&rdquo;, <br />
        International Conference on Parallel Computing 2015 (ParCo 2015), University of Edinburgh, UK, 1, Sep. 2015.</span></td>
      </tr>
  </table>
    <table width="100%"  border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Hiroaki Honda,</span>
       </td>
      </tr>
    </table>  
 <table width="93%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="70" >&nbsp;</td>
      <td width="823" height="15"><span class="text1">&ldquo;A Prototyping Environment for Electronic Structure Calculations by Scripting Language&rdquo;, <br />
        Workshop on Information Technology, Applied Mathematics and Education (IME2015), Tsuwano, Japan, 18, Aug. 2015.</span></td>
      </tr>
  </table>
    <table width="100%"  border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Takeshi Nanri,</span>
       </td>
      </tr>
    </table>  
 <table width="93%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="70" >&nbsp;</td>
      <td width="823" height="15"><span class="text1">&ldquo;Performance and Memory Usage Evaluations for Channel Interface of Advanced Communication Primitives Library&rdquo;, <br />
       1st Pan-American Congress on Computational Mechanics (PANACM 2015), Hilton Buenos Aires, Argentina, 27,Apr. 2015.</span></td>
      </tr>
  </table>
    <table width="100%"  border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Hiroaki Honda,</span>
       </td>
      </tr>
    </table>  
 <table width="93%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="70" >&nbsp;</td>
      <td width="823" height="15"><span class="text1">&ldquo;Performance Evaluation of Hartree-Fock Program developed by Ruby Scripting Language&rdquo;, <br />
        1st Pan-American Congress on Computational Mechanics (PANACM 2015),    Hilton Buenos Aires, Argentina, 27,Apr.2015.</span></td>
      </tr>
  </table>
    <table width="100%"  border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Taizo Kobayashi,</span>
       </td>
      </tr>
    </table>  
 <table width="93%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="70" >&nbsp;</td>
      <td width="823" height="15"><span class="text1">&ldquo;A New Bottleneck in Large-Scale Numerical Simulations of Transient Phenomena, and Cooperation Between Simulations and the Post-Processes&rdquo;, <br />
        PANACM 2015, 1st. Pan-American Congress on Computational Mechanics, Buenos Aires, Argentina, 27-29,   Apr, 2015.</span></td>
      </tr>
  </table>
  
    <table width="100%"  border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> S. Iwagami and Taizo Kobayashi,</span>
       </td>
      </tr>
    </table>  
 <table width="93%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="70" >&nbsp;</td>
      <td width="823" height="15"><span class="text1">&ldquo;Numerical Analysis on the Lighthill Sound Sources of Oscillating Jet&rdquo;, <br />
        PANACM 2015, 1st. Pan-American Congress on Computational Mechanics, Buenos Aires, Argentina, 27-29, Apr. 2015</span></td>
      </tr>
  </table>
    

          <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Y. Morie,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Implement and Evaluation of ACP Basic Layer of InfiniBand&rdquo;, <br/>
      International Workshop on Information Technology, Applied Mathematics  and Science (IMS2015), Kyoto, Japan, Mar. 2015. </span></td></tr>
</table>   
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Hiroaki Honda,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&quot;Explicit Hamiltonian Matrix Expressions based on Vector-Recouping  Formula for Molecular Orbital Configuration Interaction Calculation&quot;,      International Workshop on Information Technology, Applied Mathematics  and Science (IMS2015), pp.99-105, Kyoto, Japan, Mar.2015</span></td></tr>
</table>   
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Toshiya Takami,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&quot;Stability and performance estimation of space-time multi-grid  parallelization&quot;,<br/>
      International Workshop on Information Technology, Applied Mathematics  and Science (IMS2015), pp.71-74, Kyoto, Japan, Mar. 2015.</span></td></tr>
</table>   
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Keiichiro Fukazawa,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&quot;Performance Evaluation of MHD Simulation Code with Many Core  Systems&quot;,<br/>
      International Workshop on Information Technology, Applied Mathematics  and Science (IMS2015), pp.85-89, Kyoto, Japan, Mar.2015<strong>.</strong></span></td></tr>
</table>   
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> T.  Nanri,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Channel  Interface: a Primitive Model for Memory Efficient Communication&rdquo;,<br/>
      23rd  Euromicro International Conference on Parallel, Distributed and network-based  Processing, Turku, Finland, Mar. 2015.<br />
     <a href=" http://www.pdp2015.org/Program.pdf" target="_blank"><strong><u>Program</u></strong></a></span></td></tr>
</table>   
     <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> T.  Nanri,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Design  and Implementation of Channel Interface as a Memory Efficient Communication  Model&rdquo;,<br/>
      Annual  Meeting on Advanced Computing System and Infrastructure (ACSI) 2015, Tsukuba, Japan, Jan. 2015.<br />
      <a href="http://acsi.hpcc.jp/2015/program.html.ja" target="_blank"><strong><u>Program</u></strong></a></span></td></tr>
</table>  
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="age"> 2014</span>&nbsp;</td>
      </tr>
    </table> 
     <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> T.  Takami,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Identity  Parareal Method and its Performance,&rdquo; <br/>
      3rd  Workshop on Parallel-in-Time integration, Jülich, Germany, May 26-28,  2014.<br />
      <a href="http://www.fz-juelich.de/ias/jsc/EN/Expertise/Workshops/Conferences/PinTWorkshop-2014/Programme/_node.html" target="_blank"><strong><u>Program</u></strong></a></span></td></tr>
</table>  
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Takeshi Nanri,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Proposal of HINT Interface for Runtime Tuning of  Communication Links,&rdquo;<br/>
      22nd Euromicro International Conference on Parallel,  Distributed and network-based Processing, Turin, Italy, Feb. 2014.</span></td></tr>
</table>  
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="age"> 2013</span>&nbsp;</td>
      </tr>
    </table>
    
     <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Hironobu Sugiyama and Takeshi Nanri,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Topology Aware Performance Prediction of Collective  Communication Algorithms on Multi-Dimensional Mesh/Torus,&rdquo;<br/>
      Bulletin of Networking, Computing, Systems and  Software, Matsuyama, Japan, Dec. 2013.</span></td></tr>
</table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Tsuyoshi Okuma and Takeshi Nanri,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Performance Study of Non-blocking Collective  Communication Implementations Toward Adaptive Selection,&rdquo;<br/>
      Bulletin of Networking, Computing, Systems and  Software, Matsuyama, Japan, Dec. 2013.</span></td></tr>
</table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Yuichiro Ajima, Hideyuki Akimoto, Tomoya Adachi,  Takayuki Okamoto, Kazushige Saga, Kenichi Miura, and Shinji Sumimoto,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">Asynchronous Global Heap: Stepping Stone to Global  Memory Management&rdquo;,<br/>
      PGAS2013、Edinburgh, UK、3, Oct. 2013.</span></td></tr>
</table>   
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Yoshiyuki Morie, and Takeshi Nanri,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;A neighbor communication algorithm  with making an effective use of NICs on  multidimensional-mesh/torus&rdquo;,<br/>
      International Conference on Simulation Technology  (JSST2013), in Tokyo, Sep. 2013.</span></td></tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> T. Takami and D. Fukudome,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;A simple implementation of parareal-in-time on a  parallel bucket- brigade interface&rdquo;,<br/>
      10th International Conference on Parallel  Processing and Applied Mathematics, Warsaw, Poland, 8-11 Sep. 2013.</span></td></tr>
</table>

 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Takeshi Nanri,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;What Communication Library Can do with a Little Hint  from Programmers?&rdquo;,<br/>
      MVAPICH User Group Meeting, Columbus, OH, Aug. 2013.</span></td></tr>
</table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> T. Nanri,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Introduction of ACE(Advanced Communication library for Exa) Project&rdquo;, <br/>
      International  workshop on HPC, Krylov Subspace method and its application, Beppu, Japan,  13-14, Jan. 2013.</span></td></tr>
</table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Y.  Morie, T. Nanri,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;TASK  ALLOCATION METHOD FOR AVOIDING CONTENTIONS BY THE INFORMATION OF CONCURRENT  COMMUNICATION&rdquo;, <br/>
      International  workshop on HPC, Krylov Subspace method and its application, Beppu, Japan,  13-14, Jan. 2013.</span></td></tr>
</table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> T.  Okuma, T. Nanri,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Evaluation  of Implementation Methods for Non-Blocking Collective Communications in  Overlapping Communication and Computation&rdquo;, <br/>
      International  workshop on HPC, Krylov Subspace method and its application, Beppu, Japan,  13-14, Jan. 2013.</span></td></tr>
</table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" />  H. Sugiyama, T. Nanri,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Performance  Prediction Technology for Collective Communication Algorithm on  Multi-Dimensional Mesh/Torus&rdquo;, <br/>
      International  workshop on HPC, Krylov Subspace method and its application, Beppu, Japan,  13-14, Jan. 2013.</span></td></tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="age"> 2012</span>&nbsp;</td>
  </tr>
</table>   

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> T.  Ogino, R. J. Walker, and K. Fukazawa,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Boundary  layer dynamics and energy transport in the earth's magnetosphere&rdquo;, <br/>
      AGU  Fall Meeting 2012, San Francisco, 3-7 Dec. 2012</span></td></tr>
</table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> K.  Fukazawa, R. J. Walker, S. Eriksson, and R. Wilson,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Global  MHD simulation of Kronian magnetosphere with solar wind data from Cassini&rdquo;, <br/>
      AGU  Fall Meeting 2012, San Francisco, 3-7 Dec. 2012</span></td></tr>
</table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> K.  Fukazawa and T. Nanri,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Effective  Performance of Large-Scale MHD simulation for Planetary Magnetosphere with  Massively Parallel Computer&rdquo;, <br/>
      JSST2012  International Conference on Simulation Technology, Kobe, Japan, 27-28 Sept.,  2012</span></td></tr>
</table> 
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> T.  Umeda and K. Fukazawa,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Performance  Measurement of Parallel Vlasov Code for Space Plasma on Various Scalar-Type  Supercomputer Systems&rdquo;, <br/>
      The  12th International Conference on Algorithms and Architectures for Parallel  Processing, Fukuoka, Japan, 4-7 Sept., 2012</span></td></tr>
</table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Y.  Kubota, K. T. Murata, K. Yamamoto, and K. Fukazawa,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Estimation  of Magnetic Flux Diffusion Region Using a System of Magnetic Field Tracing in  Global MHD Simulations&rdquo;, <br/>
      AOGS2012,  Singapore, 13-17 Aug. 2012</span></td></tr>
</table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> T. Takami,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Dependent  Iterations in Scientiﬁc Calculations Parallelized by the Parareal-in-Time  Algorithm&rdquo;, <br/>
    CSC'12,  Las Vegas, USA, 16-19 Jul. 2012</span></td></tr>
</table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> T. Nanri, M. Kurokawa,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Efficient  Runtime Algorithm Selection of Collective Communication with Topology-Based  Performance Models&rdquo;, <br />
      International  Conference on Parallel and Distributed Processing Techniques and Applications  (PDPTA)'12, Las Vegas, USA, 16-19 Jul. 2012.</span>
    </td></tr>
</table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> K.  Fukazawa and T. Nanri,  </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Performance  of large scale MHD simulation of global planetary magnetosphere with massively  parallel scalar type supercomputer including post processing&rdquo;, <br />
      The  14th IEEE International Conference on High Performance Computing and  Communications, Liverpool, UK, 25-27 Jun, 2012</span>
    </td></tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Y. Morie, T. Nanri,  </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Task Allocation Optimization for Neighboring  Communication on Fat Tree&rdquo;, <br />
      The 14th IEEE International Conference on High  Performance Computing and Communication 9th IEEE International Conference on  Embedded Software and Systems, HPCC-ICESS 2012, pp.1219–1225, Liverpool, UK,  25-27 Jun. 2012.</span>
    </td></tr>
</table>
 <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="age"> 2011</span>&nbsp;</td>
   </tr>
</table>   
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Fukazawa,  K., T. Ogino, and R. J. Walker,  </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;A High Resolution Magnetohydrodynamic  Simulation Study of Kronian Field-Aligned Currents and Aurora&rdquo;, <br />
    AGU Fall  Meeting 2011, San Francisco, 5-9 Dec. 2011</span>
    </td></tr>
</table>  
<table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="760">&nbsp;</td>
    <td width="181">　 　<strong class="text1"><a href="#pagetop">Page Top</a></strong> <img src="../../images/yajirushi_blue03.jpg" alt="" width="11" height="12" /></td>
  </tr>
</table>
<p align="center">　　<img src="../../images/line_gray_l.png" width="96%" height="1" /></p>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="53" >&nbsp;</td>
      <td width="907" height="5"><span class="text1"><strong> <a name="p05" id="p05"></a>International Conferences</strong></span>&nbsp;</td>
  </tr>
</table>
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="age"> 2015</span>&nbsp;</td>
      </tr>
    </table>
     <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> K. Fukazawa, R. J. Walker,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&quot;A Simulation Study of the Dependence of the Vorticity in Saturn’s Magnetosphere on the IMF&quot;,<br />
     AGU Fall Meeting 2015, San Francisco, USA, 17, Dec. 2015.</span></td></tr>
</table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Toshiya Takami,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&quot;Parallelization of Irregular Sparse Computations with One-sided Communications&quot;,<br />
     HD^3-2015,  Mie lParque Kyoto (Kyoto), 16, Dec. 2015.</span></td></tr>
</table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" />Hiroaki Honda,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&quot;Development of ACP Middle Layer Communication Library for Molecular Orbital Calculation&quot;,<br />
     International Congress of Quantum Chemistry 2015 Satellite Symposium, RIKEN Advanced Institute for Computational Science, Kobe, Japan, 20, June. 2015.</span></td></tr>
</table>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="age"> 2014</span>&nbsp;</td>
      </tr>
    </table>
       <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Hidetomo Shibamura,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&quot;NSIM-ACE: Network Simulator for Global Memory  Access&quot;,<br />
     JST/CREST International Symposium on Post Petascale System Software  (ISP2S2) ,      Poster session, Dec.2014</span></td></tr>
</table>
  
     <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> T. Takami,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Temporal Parallel Approach to Configure Multiscale  Simulations for Complex Phenomena&rdquo;,<br />
      The  5th AICS International Symposium, Kobe, 8-9 Dec. 2014.</span></td></tr>
</table>

 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> T. Takami,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;ACP (Advanced Communication Primitives)  Middle Layer&rdquo;,<br />
      ISP2S2, Kobe, 2-4 Dec. 2014.</span></td></tr>
</table>

 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Yuichiro Ajima,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&quot;Distributed Dynamic Data Structure API over A  Novel Low-Level Communication Layer&quot;,<br />
      PGAS2014, Eugene, Oct. 6-10, 2014.</span></td></tr>
</table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> R.  Susukita,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Pure Communication  Time in Parallel N-body Simulations,&rdquo;<br />
      The 6th  East-Asian Numerical Astrophysics Meeting, Suwon, South Korea, September 15-19,  2014.</span></td></tr>
</table>

 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> T. Takami, M. Shimokawa, and T. Kobayashi,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Temporal Parallel Approach to Nonlinear  Problems with Multiple Time-scales&rdquo; ,<br />
      Dynamics Days Europe, Bayreuth, Germany, 8-12  Sep. 2014.</span></td></tr>
</table>

 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Shinji  Sumimoto,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&quot;ACP:  Advanced Communication Primitives for Exa-scale Systems &quot;,<br />
      VECPAR2014, Euene, July 1, 2014.</span></td></tr>
</table>

 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> H.  Honda,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Performance  Evaluation of Multiple-inputs Parallel Hartree-Fock Calculation,&rdquo;<br />
      VECPAR  2014, Eugene, Oregon, June 30-July 3, 2014.</span></td></tr>
</table>

 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Hidetomo Shibamura,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Active packet pacing as a congestion  avoidance technique toward extreme scale interconnect&rdquo;,<br />
      International Supercomputing Conference 2014  (ISC&rsquo;14), Leipzig, Germany,  June 2014.</span></td></tr>
</table>

  
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="age"> 2013</span>&nbsp;</td>
      </tr>
    </table>  
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> K. Fukazawa, T. Ogino,  and R. J. Walker,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Key parameter of  planetary magnetospheric configuration and dynamics&rdquo;,<br />
      AGU Fall Meeting 2013,  San Francisco, 9-13 Dec. 2013.</span></td></tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> T.  Takami,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Identity  Parareal for Time-evolution Problems&rdquo;,<br />
      The 4th AICS International Symposium, Kobe, 1-2 Dec.  2013.</span>
    </td></tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> H. Honda, Y. Inadomi, J. Maki,  </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&quot;Molecular orbital calculation for efficient SIMD  operations by means of multiple geometry inputs&quot;,<br />
      The 4th AICS International Symposium, Kobe, 1-2 Dec.  2013.</span>
    </td></tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Yoshiyuki Morie and  Takeshi Nanri,  </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Implementation of  Neighbor Communication Algorithm Using Multi-NICs Effectively by Extended RDMA  Interfaces&rdquo;,<br />
      SC13, in Denver, Nov.  2013.</span>
    </td></tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> D. Fukudome and T. Takami,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Parallel bucket-brigade communication interface for  scientific applications&rdquo;, <br />
      EuroMPI'13, Madrid, 15-18 Sep. 2013.</span>
    </td></tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Shinji Sumimoto, Hideyuki Akimoto, Yuichiro Ajima,  Takayuki Okamoto, Tomoya Adachi, and Kenichi Miura,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Dynamic Memory Usage Analysis of MPI Libraries Using  DMATP-MPI&rdquo;,<br />
      EuroMPI&rsquo;13,Madrid, Spain, 16, Sep. 2013.</span></td></tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Hidetomo Shibamura,</span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Congestion Avoidance  Technique Using Aggressive Packet Pacing toward Exascale Interconnect&rdquo;, <br />
      International Supercomputing  Conference 2013 (ISC&rsquo;13), Poster at HPC in Asia Poster Session (17a), Leipzig,  Germany, 17,June,  2013.</span>
    </td></tr>
</table>



    <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="age"> 2012</span>&nbsp;</td>
      </tr>
    </table>   
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Y. Inadomi,  J. Maki, H. Honda, T. Takami, T. Nanri, M. Aoyagi, and K. Minami,  </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Performance  Tuning of FMO Code (OpenFMO) for Effective Massively Parallel Execution&rdquo;, <br />
      Theory  and Applications of Computational Chemistry (TACC-2012), Pavia, Italy, 2-7,  Sep. 2012.</span>
    </td></tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> K. Fukazawa, T. Nanri, and T.  Takami,  </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Massively  Parallel Computing of Magneto- Hydro-Dynamic Simulation Toward Peta and Exa  Scale Computers&rdquo;, <br />
      SC12,  Salt Lake City, USA, 10-16 Nov. 2012.</span>
    </td></tr>
</table>  
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="55" >&nbsp;</td>
      <td width="905" height="5"><span class="age"> 2011</span>&nbsp;</td>
  </tr>
</table>   
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="902" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Fukazawa,  K., T. Ogino, and R. J. Walker,  </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;A High Resolution Magnetohydrodynamic  Simulation Study of Kronian Field-Aligned Currents and Aurora&rdquo;, <br />
    AGU Fall  Meeting 2011, San Francisco, 5-9 Dec. 2011</span>
    </td></tr>
</table>  

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="907" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" /> Umeda,  T., Y. Ito, Y. Kiani, and K. Fukazawa,  </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Study of the Moon-Solar Wind  Interaction with Parallel Kinetic Plasma Simulations&rdquo;, <br />
    SC11, Seattle, USA,  12-18 Nov. 2011</span>
    </td></tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="907" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" />  Fukazawa,  K., T. Umeda, and T. Ogino, </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&ldquo;Massively Parallel Computing of Magneto-  Hydro-Dynamic Simulation Toward Peta and Exa Scale Computers&rdquo;,<br />SC11, Seattle,  USA, 12-18 Nov. 2011</span>
    </td></tr>
</table>  

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="907" height="5"><span class="text1"><img src="../../images/c16_gy6.gif" alt="" width="10" height="10" />  Y. Kubota, K. Yamamoto, K. Fukazawa, K.  T. Murata, </span>
    </td></tr>
</table>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="821" height="20"> <span class="text1">&quot;Visualization of fluxrope generation process using large  quantities of MHD simulation data&quot;, <br />
        The First ICSU World Data System  Conference<em>,</em> Kyoto, Japan, 3 - 6 September 2011</span>
    </td></tr>
</table>  

<p align="center">&nbsp;</p>
<p align="center">　 <img src="../../images/line_gray_l.png" width="96%" height="1" /><br />
</p>
<p align="center">&nbsp;</p>
<table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="760">&nbsp;</td>
    <td width="181"> 　　 <strong class="text1"><a href="#pagetop">Page Top</a></strong> <img src="../../images/yajirushi_blue03.jpg" alt="" width="11" height="12" /></td>
  </tr>
</table>
  <!-- end .content --></div>
  <div class="footer">
   Copyright &copy; 2012 - <script type="text/javascript">var d = new Date();document.write(d.getFullYear());</script> ACE PROJECT. All Right Reserved<br />
   
  <script type="text/javascript"><!--
　document.write( "Last update : " , document.lastModified );
// --></script>

    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>