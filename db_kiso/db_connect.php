<?php
    // DBの接続処理
    $dsn = 'mysql:dbname=phpkiso;host=localhost';
    $user ='root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');

    // 読込 (READ)
    $sql = 'SELECT * FROM `anketo` WHERE 1'; //⓵sql文を作成する
    echo $sql; 
    echo '<br>';
    $stmt = $dbh->prepare($sql);//②DBにsql文をセットする
    $stmt->execute();//③sql文を実行
    var_dump($stmt);
    // 基本的なsqlのCRUD処理はこの3手順

    // SELECTの場合はプラス２つの手順が必要
    while (1) {
    // ④PHPで使用できるデータへ変換
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($record == false){
        break;
    }
    // ⑤表示します
    echo $record['code'];
    echo ' - ';
    echo $record['nickname'];
    echo ' - ';
    echo $record['email'];
    echo ' - ';
    echo $record['goiken'];
    echo ' - ';
    echo '<br>';

}
    // 作成 (CREATE)
    $sql ='INSET INTO`anketo` SET `code`=NULL, `nickname`="php", `email`="aaa",`goiken`="programming"';
    $stml = $dhb->prepare($sql);
    $stml->execute();

    // 更新 (UPDATE)

    // 削除 (DELETE)

 ?>
