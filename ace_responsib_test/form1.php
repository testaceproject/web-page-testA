<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>フォームのテスト</title>
</head>
<body>

<form action="form.php" method="post">
<input type="text" name="user">　名前を入れてください<br>
<input type="submit" value="決定">
</form>

<?php if("" != $_POST["user"]){ print( $_POST["user"] . "さん、こんにちは！" ); } ?>

</body>
</html>