<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$username= $_POST['Username'];

$dbhostname="localhost";
$dbusername="root";
$dbpassword="";
$dbname="music-store";
$tablename="feedback";

$con =new mysqli($dbhostname,$dbusername,$dbpassword,$dbname);
if ($con->connect_error){
    echo 'Database Connection Error' ;
} 
$stmt=$con->prepare("INSERT INTO $tablename (Username,name,email,phone,message) VALUES (?,?,?,?,?)");
$stmt->bind_param("sssis",$username,$name,$email,$phone,$message);
if($stmt->execute()){
    header("Location: main.php");
    #echo 'success';
}else{
    echo 'failure';
}
?>