<?php
	$servername = "";
	$username = "";
	$password = "";
	$dbname = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
	}

	// sql to create table
	$sql = "CREATE TABLE IF NOT EXISTS weddingguests (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	accept VARCHAR(30),
	partynum SMALLINT,
	dietneeds VARCHAR(150),
	songreq VARCHAR(150),
	reg_date TIMESTAMP
	)";

	if ($conn->query($sql) === TRUE) {
    		echo "Table MyGuests created successfully";
	} else {
    		echo "Error creating table: " . $conn->error;
	}

	$_POST['dietneeds']
	foreach ($_POST['dietneeds'] as $dietneeds => $value) {
		echo $dietneeds;
	}

	$insertSQL = "INSERT INTO weddingguests (firstname, lastname, email, accept, partynum, dietneeds, songreq)
									VALUES (
									 GetSQLValueString($_POST['fname'],"text"),
									 GetSQLValueString($_POST['lname'],"text"),
									 GetSQLValueString($_POST['email'],"text"),
									 GetSQLValueString($_POST['accept'],"text"),
									 GetSQLValueString($_POST['guestnum'],"text"),
									 $dietneeds,
									 GetSQLValueString($_POST['songreq'],"text"),
								 )";


	$conn->close();
?>
