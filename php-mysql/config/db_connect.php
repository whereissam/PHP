<?php 

//connect to database
$conn = mysqli_connect('localhost','Sam','test1234','sam_pizza');

//check connection
if(!$conn){
	echo 'Connection error: ' . mysqli_connect_error();
}
?>