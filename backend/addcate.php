<?php 
include 'dbconnect.php';


$name=$_POST['name'];
$logo=$_FILES['logo'];

$basepath="img/items/";
$fullpath=$basepath.$photo['name'];
move_uploaded_file($photo['tmp_name'], $fullpath);
//echo "$name <br>";
//print_r($photo);
$sql="INSERT INTO categories(name,logo) VALUES(:category_name,:category_logo)";
$stmt=$pdo->prepare($sql);
$stmt->bindParam(':category_name',$name);
$stmt->bindParam(':category_logo',$fullpath);
$stmt->execute();

if($stmt->rowCount()){
 	header("location:cate_list.php");
 }else{
 	echo "Error";
 }


?>