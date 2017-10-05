<?php

$server='localhost';
$username='root';
$password='';
$database='emr';

$connect=mysqli_connect($server,$username,$password,$database);

// if($connect){
// 	echo 'Success';
// }else{
// 	die('Error.');
// }	

$nic =$_POST['nic'];

$query ="INSERT INTO Customer(customerNIC) VALUES ('$nic')";

mysqli_query($connect,$query);

?>