<body>

<?php

$nickname=$_POST['nickname'];
$email=$_POST['email'];
$goiken=$_POST['goiken'];

$nickname= htmlspecialchars($nickname);
$email= htmlspecialchars($email);
$goiken= htmlspecialchars($goiken);

echo $nickname;
echo '様<br/>';
echo 'ご意見ありがとうございました<br/>';

echo '頂いたご意見『';
echo $goiken;
echo '』<br/>';
echo $email;
echo  'に送りましたので確認してください';


$mail_sub='アンケートを受け付けました。';
$mail_body=$nickname."様へ/nアンケートにご協力ありがとうございました。";
$mail_body=html_entity_decode($mail_body,ENT_QUOTES,"UTF-8");
$mail_head='From:xxx@xxx.co.jp';
mb_language('Japanese');
mb_internal_encoding("UTF-8");
mb_send_mail($email,$mail_sub, $mail_body,$mail_head);
?>

</body>