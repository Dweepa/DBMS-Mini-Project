<?php
$servername = "localhost";
$username = "root";
$password="";
echo "hello";
$conn=mysqli_connect($servername,$username,$password,'shop');

$query="CREATE TABLE IF NOT EXISTS student(ssn varchar(13) primary key,name varchar(20),gender varchar(6),dept varchar(25),email varchar(30),phone varchar(10),password varchar(8) )";
mysqli_query($conn,$query);
$query="CREATE TABLE IF NOT EXISTS teacher(ssn varchar(13) primary key,name varchar(20),gender varchar(6),dept varchar(25),email varchar(30),phone varchar(10),password varchar(8) )";
mysqli_query($conn,$query);

$name=$_GET['name'];
$ssn=$_GET['ssn'];
$gender=$_GET['gender'];
$dept=$_GET['dept'];
$type=$_GET['type'];
$email=$_GET['email'];
$pno=$_GET['pno'];
$password=$_GET['password'];

if($type=="teacher")
{
	$query="INSERT INTO teacher VALUES('$ssn','$name','$gender','$dept','$email','$pno','$password')";
mysqli_query($conn,$query);
}

if($type=="student")
{
$query="INSERT INTO student VALUES('$ssn','$name','$gender','$dept','$email','$pno','$password')";
mysqli_query($conn,$query);
}



 header("Location: index.html");

?>