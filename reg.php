<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "website_data_user.sql";
// database name variables and the value in the input type
$iduser=$_POST['userid'];
$username=$_POST['username'];
$email=$_POST['useremail'];
$password=$_POST['userpassword'];






$conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// table name in the database and the variables
$sql = "INSERT INTO user (iduser, username, email, password) 
VALUES ('$iduser', '$username', '$email', '$password')";

$conn->exec($sql);
echo "<script>alert('Account successfully added!'); window.location='register.html'</script>";
?>