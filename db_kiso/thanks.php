
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <?php
    $dsn= 'mysql:dbname=phpkiso;host=localhost';
    $user ='root'
    $password = '';
    $dbh = new PDO($dsn,$user,$passsward);
    $dbh ->querry('SET NANES ufj8');


    // DB基礎
    // CRUD処理について
    // データを操作するための基本的な動作をまとめたもの
    // C:Create(作成)
    // R:Read(読込)
    // U:Updata(更新)
    // D:Delete(削除)


    // MySQLデータベースで上記処理を行う場合の命令文
    // [SQL文]というMySQLを操作するための文を使用する必要がある。

    // C:INSERT
    // R:SELECT
    // U:UPDATE
    // D:DELETE
	

    // SQL文法
    // SELECT カラム文 FROM `テーブル名` WHERE 条件
	// SELECT * FROM `anketo` WHERE 1
	// 	指定したnketoテーブルのデータを全件取得
	// 	WHERE 1 で全件取得という条件になる

	// 	例: SELECT * FROM `anketo` WHERE 'code'=1
	// 	指定したanketoテーブルのデータでcodeカラムが１のデータを取得
	// 	WHERE 'code'=1で指定したカラムに指定したデータが入っているデータのみ取得

// INSERT INTO `テーブル名`(`カラム名1`, `カラム名2`, ...) 
// VALUES (データ１, データ２, ...)
    // DBへの接続処理
	
    // 登録処理

  $sql='INSERT INTO anketo anketo (nickname,email,goiken)VALUE("'.$nickname.'","'.$email.'",'.$goiken.'")';
  $stml=$dbh->prepare($sql);

  $dbh=null;
?>
</head>
<body>
  <h3>ご意見ありがとうございました！</h3>

  
</body>
</html>
