<body>
	<?php
	$dsn='mysql:dbname=phpliso;host=localhost';
	$user='root';
	$password='';
	$dbh=new PDO($dsn,$user,$password);
	$dbh->query('SET NAMES utf8');

	$sql='SELECT * FROM anketo WHERE 1';
	$stmt = $dbh->prepare($sql);
	$stmt->execute();



	while(1){
		$rec = $stml->fetch(PDO::FECTH_ASSOC);
		if($rec==false){
			break;
		}
		print $rec['code'];
		print $rec['nuckname'];
		print $rec['email'];
		print $rec['goiken'];
		print '<br>';
	}
	$dbh = null;

	?>






</body>