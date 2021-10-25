<?php
$dbhostname="localhost";
$dbusername="root";
$dbpassword="";
$dbname="music-store";
$tablename="login";

$email =$_POST['email'];
$password =$_POST['password'];

$con=new mysqli($dbhostname,$dbusername,$dbpassword,$dbname);
if($con->connect_error)
    {
        echo 'Database Connection Error';
    }
    
$stmt=$con->prepare("INSERT INTO $tablename (email,password) VALUES(?,?)");
$stmt->bind_param("ss",$email,$password);
if($stmt->execute())
{
    
    echo 'Success';
}
else
{
    echo 'Fail';
}
?>