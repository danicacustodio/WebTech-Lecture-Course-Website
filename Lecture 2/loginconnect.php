<?php 

$host="localhost";
$user="root";
$password="";
$db="registration";


$username=$_POST['uname1'];
$password=$_POST['pass1'];

$conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where register='".$username."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>