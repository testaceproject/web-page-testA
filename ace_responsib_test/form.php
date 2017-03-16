<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>フォームのテスト</title>
</head>

<body>

<form action="" method="post">
<input type="text" name="user" >　名前を入れて下さい<br>
<input type="submit" value="決定" >
</form>

<?php if("" != $_POST["user"]){ print( $_POST["user"] . "さん、こんにちは！ " ); }?> 

</body>
</html>