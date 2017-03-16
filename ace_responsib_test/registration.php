<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
header('Content-type: text/html; image/jpeg, charset=UTF-8');
header('Content-Language: ja');
session_start();
$errors= 0; //入力エラーをカウントする変数
if(!isset($_SESSION["form"])){
	$_SESSION["form"] = "input";
	$_SESSION["saved"] = "";
	$error["name"]["message"] = "";
	$error["belong"]["message"] = "";
	$error["addr"]["message"] ="";
	$name = "";  //名前
	$belong = "";  //所属
	$addr = "";  //e-mail
	
}else{
	//入力のチェック
	$name = stripslashes( $_POST["name"] );
    if(0==strlen($name))
	{$error["name"]["message"] = "<br><font color=\"#FF0000\">《Please fill your name.》</font>"; $errors++; }
	else
	{$error["name"]["message"] =""; }
	
	$belong= $_POST["belong"];
	if(0==strlen($belong))
	{ $error["belong"]["message"] = "<br><font color =\"#FF0000\">《Please fill your affiliation.》</font>";$errors++; }
	else
	 { $error["belong"]["message"] = ""; }
	 
	 $addr = stripslashes( $_POST["addr"] );
    if(0==strlen($addr))
	{$error["addr"]["message"] = "<br><font color =\"#FF0000\">《Please fill your e-mail.》</font>"; $errors++; }
	else
	{$error["addr"]["message"] =""; }
	 
	 if(0== $errors){$_SESSION["form1"] = "checked"; }
	 else{ $_SESSION["saved"] = ""; }
}

$image= imagecreatefromjpeg("image/tokonatu1.jpg"); //画像を読み込む
$sx = imagesx($image);   //画像の幅を取得
$sy = imagesy($image);   //画像の高さを取得
$imnew = imagecreatetruecolor($sx/10,$sy/10);    //新規画像を作成
    //読み込んだJPEG画像を小さい画像へコピー(縮小）
imagecopyresized($imnew,$image,0,0,0,0, $sx/10,$sy/10,$sx,$sy);



?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>form</title>
</head>

<body><table border="1" >　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　


<?php
if("checked" != $_SESSION["form1"]){
	printForm($name,$belong,$addr,$error);  //フォームの表示
		
}else{
	  saveDate($name,$belong,$addr);      //データの保存 
	printResult($name,$imnew,$image);   //入力結果の表示
   $_SESSION["form1"] = "input";
}
//関数定義

//フォームの表示

 function printForm($name,$belong,$addr,$error){
	 echo"<form method=\"post\" action=\"registration.php\">\n".
	 "<tr><td class=\"heading\" colspan=\"2\" align=\"center\">Please fill in the following form.</td></tr>\n";
	 
	 echo"<tr><td valign=\"top\"> Name：{$error["name"]["message"]}</td>".                                                  
	 "<td><input type=\"text\" name=\"name\" value=\"$name\"> </td></tr>\n";
	 
	 echo"<tr><td valign=\"top\"> Affiliation：{$error["belong"]["message"]}</td>".
	 "<td><input type=\"text\" name=\"belong\" value=\"$belong\"> </td></tr>\n";
	 
	 echo"<tr><td valign=\"top\"> E-mail：{$error["addr"]["message"]}</td>".
	 "<td><input type=\"text\" name=\"addr\" value=\"$addr\"> </td></tr>\n";
	 	 
	 echo"<tr><td colspan=\"2\" align=\"center\">
	 <input type=\"submit\" name=\"submit\" value=\"Submit\">　\n".
	 "<input type=\"reset\" name=\"cancel\" value=\"Reset\"></td></tr>\n".
	 "</form>\n";
 }
 //データの保存
 
 function saveDate($name,$belong,$addr){
	 if("yes" !=$_SESSION["saved"]){
		 $file = fopen("C:\\xampp\htdocs\\form2.log","a");
		 if(!$file)
		 　die("ファイル書き込みのオープンに失敗しました");
		 if(!flock($file,LOCK_EX))
		   die("ファイルのロックに失敗しました");
		  
		  fwrite($file,"{$name},\t{$belong},\t{$addr},\r\n");
		  flock($file,LOCK_UN);
		  fclose($file);
		  $_SESSION["saved"] ="yes";
	 }
 }

 //入力の結果の表示
 function printResult($name,$imnew,$image){
	 echo"Hello, Mr./Ms.{$name} <br>\n";
	 
	 echo"Please access here.\n";
	 
	 echo imagejpeg($imnew);  //JPEGイメージを出力    
     echo imagedestroy($image);    //画像を保持するメモリを解放

	 
 }
 ?>
</table>
<p>&nbsp;</p>
</body>
 </html>
 