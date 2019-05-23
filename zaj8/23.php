
<?php
	try
	{
	    $dsn = 'mysql:dbname=zwierzeta;host=127.0.0.1';
	    $user = 'root';
	    $password = '';
	    $db = new PDO($dsn, $user, $password);
	    $id = $_GET['id'];
	    $sql = 'DELETE FROM zwierzeta_domowe1 WHERE id = :id';
	    $sth = $db->prepare($sql);

	    $sth->bindParam(':id', $id);
      print_r($sth->execute());
      /*
	    if($sth->execute()) {
	        echo "Usunęło.";
	    }
	    else echo "Nie usunęło.";
*/
  }
	catch (PDOException $e)
	{
	    echo 'Connection failed';
	}
  ?>
