<?php
$dbhostname="localhost";
$dbusername="root";
$dbpassword="";
$dbname="music-store";
$tablename="registeration";


// $con=mysqli_connect($dbhostname,$dbusername,$dbpassword,$dbname);
$con=new mysqli($dbhostname,$dbusername,$dbpassword,$dbname);
if(!$con){
    die(mysqli_error($con));
    session_regenerate_id(true); #Prevents from Session Hijacking
}
?>