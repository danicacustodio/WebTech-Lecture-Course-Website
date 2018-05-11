<?php 

session_start();
require('connection.php');

/**$host="localhost";
$user="root";
$password="";
$db="registration";**/

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from register where username='".$username."'AND password='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        $_SESSION['username'] = $username;
        /**echo " You Have Successfully Logged in";**/
        header('Location:FinalWeb.html');
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>