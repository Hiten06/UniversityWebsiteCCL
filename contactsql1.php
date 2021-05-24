<?php
$Username = $_POST['Name'];
$Emailid = $_POST['EmailId'];
$Queries = $_POST['Queries'];

$conn =new mysqli('remotemysql.com','N81ga1seT5','9oHQnd2ABe','N81ga1seT5');

if($conn->connect_error){
	die('connection failed:'.$conn->connect_error);
}
else{
	$stnt = $conn->prepare("insert into university(Name,Email,Queries) values(?,?,?)");
	$stnt->bind_param('sss',$Username,$Emailid,$Queries);
	$stnt->execute();
	echo "Registration Suceesfully";
	$stnt->close();
	$conn->close();
}
?>
