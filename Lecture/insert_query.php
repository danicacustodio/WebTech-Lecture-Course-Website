<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "registration";
// database name variables and the value in the input type
$idnumber=$_POST['idnum'];
$username=$_POST['uname'];
$emailaddress=$_POST['eadd'];
$password= md5($_POST['pass']);

$conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// table name in the database and the variables
$sql = "INSERT INTO register (idnumber, username, emailaddress, password) 
VALUES ('$idnumber', '$username', '$emailaddress','$password')";

$conn->exec($sql);
echo "<script>alert('Account successfully added!'); window.location='index.php'</script>";
?>