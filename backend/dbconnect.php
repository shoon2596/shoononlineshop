<?php 
   $servername="localhost";
   $dbname="onlineshopping";
   $dbuser="root";
   $dbpass="";

   $dsn="mysql:host=$servername;dbname=$dbname";
   $pdo=new PDO($dsn,$dbuser,$dbpass);


   try {
   	$conn=$pdo;
   	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   	//echo "Connected"; 
   	
   } catch (PDOException $e) {
   	   echo "Connection fail:".$e->getMessage();
   }

 ?>