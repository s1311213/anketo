<?php
	$fruits = array('banana','mango','apple','watermelon');

	echo $fruits[1];
	foreach ($fruits as $value){
		echo $value;
	}


	$friend = array('friend_name'=>'Seedくん','area_id'=>10,'gender'=>1,'age'=>3);

	echo $friend{'friend_name'};
	echo $friend{'area_id'};

	echo '<br>';

	foreach ($friend as $key => $value) {
		echo $key.':'.$value;
		
	}
?>