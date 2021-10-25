<?php
session_start();

$login=0;
$invalid=0;

$dbhostname = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "music-store";
$tablename = "registeration";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "Select * from `$tablename` where username='$username' and password='$password'";
        $result = mysqli_query($con, $sql);
        if($result){
            $num=mysqli_num_rows($result);
            if($num>0){
                // echo "Login Successfully";
                $login=1;
                $_SESSION['username']=$username;
                header('location:main.php');
            }
            else{
                // echo "Invalid Credentials";
                $invalid=1;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php
        if($login){
            echo "<div class='alert alert-success' role='alert'>
                    Login Successfull
                </div>";
            echo "<script>
                    alert('Login Successfull');
                    window.location.href='main.php';
                </script>";
        }
        else{
            if($invalid){
                echo "<div class='alert alert-danger' role='alert'>
                        Invalid Credentials
                    </div>";
                echo "<script>
                        alert('Invalid Credentials');
                        window.location.href='login.php';
                    </script>";
            }
        }
    ?>
    
</body>
</html>
