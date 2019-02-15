<?php
$dbserver= 'localhost';
$dbname= 'web2018';
$dbuser='root';
$dbpassword='';
$conn =NULL;
try {
	$conn=new PDO("mysql:host=$dbserver;dbname=$dbname;" ,$dbuser,$dbpassword,
	[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
}
catch (exception $e)
{
	
	try{
		$conn =new PDO ("mysql:host=$dbserver",$dbuser,$dbpassword,
			[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
		$conn->exec("CREATE DATABASE $dbname");
		$conn=new PDO("mysql:host=$dbserver;dbname=$dbname;" ,$dbuser,$dbpassword,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
		$sql='CREATE TABLE USERS ('
		.'ID INTEGER AUTO_INCREMENT PRIMARY KEY,'
		.'NAME VARCHAR(32) NOT NULL,'
		.'FULLNAME VARCHAR(64), '
		.'PASSWORD VARCHAR (40))';
	    $conn->exec($sql);
		$sql='CREATE TABLE STUDENTS ('
		.'ID INTEGER AUTO_INCREMENT PRIMARY KEY,'
		.'FIRSTNAME VARCHAR(32),'
		.'LASTNAME VARCHAR(32), '
		.'AGE INTEGER,'
		.'ADDRESS VARCHAR(32),'
		.'CITY VARCHAR (32),'
		.'PHONE VARCHAR (10))';
		$conn->exec($sql);
		$sql='INSERT INTO USERS (NAME,FULLNAME,PASSWORD) VALUES (?,?,?)';
		$sql='INSERT INTO STUDENTS (FIRSTNAME,LASTNAME,AGE,ADDRESS,CITY,PHONE) VALUES (?,?,?,?,?,?)';
		$stmt=$conn-> prepare($sql); 
		$stmt->execute(['admin','administrator',sha1('admin')]);
	
} catch (exception $ex)
{
	echo 'Sfalma :'.$ex->getMessage();
}

}
	