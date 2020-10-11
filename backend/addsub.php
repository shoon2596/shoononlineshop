<?php 
include 'dbconnect.php';


$name=$_POST['name'];


$sql="INSERT INTO subcategories(name) VALUES(:subcategory_name)";
$stmt=$pdo->prepare($sql);
$stmt->bindParam(':subcategory_name',$name);

$stmt->execute();

if($stmt->rowCount()){
 	header("location:sub_list.php");
 }else{
 	echo "Error";
 }


?>