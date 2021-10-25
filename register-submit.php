<?php
$dbhostname="localhost";
$dbusername="root";
$dbpassword="";
$dbname="music-store";
$tablename="register";

$username=$_POST['username'];
$email =$_POST['email'];
$password =$_POST['password'];

$con=new mysqli($dbhostname,$dbusername,$dbpassword,$dbname);
if($con->connect_error)
    {
        echo 'Database Connection Error';
    }
    
$stmt=$con->prepare("INSERT INTO $tablename (username,email,password) VALUES(?,?,?)");
$stmt->bind_param("sss",$username,$email,$password);
if($stmt->execute())
{
    echo 'Success';
}
else
{
    echo 'Fail';
}
?>