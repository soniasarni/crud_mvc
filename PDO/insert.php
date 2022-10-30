<?php
include ('connexion.php');

   try{
    $sql = "CREATE TABLE MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP
            )";
    // use exec() because no results are returned
    $con->exec($sql);
    echo "Table created successfully<br>";
}
catch(PDOException $e)
{
echo $sql . "<br>" . $e->getMessage();
}


// require_once('connectdb.php');


// try{
		

//     $modelereq=$con->prepare("INSERT INTO MyGuests (firstname, lastname, email)VALUES (?, ?, ?)");

//     $modelereq->execute(array('x','y','hajji@gmail.com'));
//     $modelereq->execute(array('x1','y1','hajji@gmail.com'));
//     $modelereq->execute(array('x2','y2','hajji@gmail.com'));
		
// 	echo "New record created successfully<br>";
	


// 	}
// 	catch(PDOException $e)
// 	{
// 	echo $sql . "<br>" . $e->getMessage();
// 	}




try{
		

    $modelereq=$con->prepare("INSERT INTO MyGuests (firstname, lastname, email)VALUES (:fname, :lname, :mail)");

    $modelereq->execute(array(':lname'=>'yy',':fname'=>'xx',':mail'=>'hajji@gmail.com'));
    
		
	echo "New record created successfully<br>";
	


	}
	catch(PDOException $e)
	{
	echo $sql . "<br>" . $e->getMessage();
	}
////////////////////////
<?php 
// require_once('connectdb.php');
// try{
		

//     $ins=$conn->prepare("select * from myguests");

//     $ins->execute();

// 	  $ins->setFetchMode(PDO::FETCH_ASSOC);

// 	  $tab = $ins->fetchAll();

// 	//var_dump($tab);
    
//     for($i=0;$i<count($tab);$i++)
//     {
//       echo $tab[$i]["id"]." | ".
//       $tab[$i]["firstname"]." | ".
//       $tab[$i]["lastname"]." | <br>";
//           }

// 	}
// 	catch(PDOException $e)
// 	{
// 	echo $sql . "<br>" . $e->getMessage();
// 	}

?>




