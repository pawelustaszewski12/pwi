<?php
	try {
	    $db = new PDO('mysql:host=localhost;dbname=zwierzeta', 'root', '');
	    
	    $sql = 'select gatunek, nowe from zwierzeta_domowe1';
	    foreach($db->query($sql) as $row) {
	        print $row['gatunek']."\t";
	        print $row['nowe']."\n";
	    }
	}
	catch (PDOException $e) {
	    echo 'Connection failed';
	}
?>
