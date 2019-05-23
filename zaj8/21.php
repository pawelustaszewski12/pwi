<?php
	try {
	    $dsn = 'mysql:dbname=zwierzeta;host=127.0.0.1';
	    $user = 'root';
	    $password = '';
	    $db = new PDO($dsn, $user, $password);
	    $sql = 'select gatunek, nazwa from zwierzeta_domowe';
	    foreach($db->query($sql) as $row) {
	        print $row['gatunek']."\n";
	        print $row['nowe']."\n";
	    }
	}
	catch (PDOException $e) {
	    echo 'Connection failed';
	}
?>
