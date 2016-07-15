<body>

<?php

$nickname=$_POST['nickname'];
$email=$_POST['email'];
$goiken=$_POST['goiken'];

$nickname= htmlspecialchars($nickname);
$email= htmlspecialchars($email);
$goiken= htmlspecialchars($goiken);
if ($nickname=='') {
	print'ニックネームが入力されていません。';
	echo '<br/>';
}
else{
	echo "ようこそ";
	echo $nickname;
	echo "様";
	echo '<br/>';
}

if ($email==''){
	echo'メールアドレスが入力されていません。<br/>';
	echo '<br/>';
}
else{
	echo "メールアドレス:";
	echo $email;
	echo '<br/>';
	
}

if ($goiken=='') {
	print'ご意見が入力されていません。';
	echo '<br/>';

}
else{
	echo "ご意見:";
	echo $goiken;
	echo '<br/>';
}


// echo '<form>';
// echo '<input type="button" onclick="history.back()" value="戻る">';
// echo'</form>';

// echo '<form method="post"action="thanks.php";>';
// echo '<input type="button" onclick="history.back()" value="戻る">';
// echo '<input type="submit" value="OK">';
// echo '<form/>';
if ($nickname==''||$email==''||$goiken=='') {
echo '<form>';
echo '<input type="button" onclick="history.back()" value="戻る">';
echo'</form>';
}
else{
	echo '<form method="post"action="thanks.php";>';
	echo '<input name="nickname"type="hidden" value="'.$nickname.'">';
	echo '<input name="email"type="hidden" value="'.$email.'">';
	echo '<input name="goiken"type="hidden" value="'.$goiken.'">';
	echo '<input type="button" onclick="history.back()" value="戻る">';
	echo '<input type="submit" value="OK">';
	echo '<form/>';
}

?>



</body>