<?php
$user=0;
$success=0;
$match=0;

$dbhostname = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "music-store";
$tablename = "registeration";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    if (isset($_POST['signup'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);
        $email=$_POST['email'];


        // $sql=$con->prepare("INSERT INTO $tablename (username,password) VALUES(?,?)");
        // $sql->bind_param("ss",$username,$password);
        // if($sql->execute()){
        //     echo "Data Inserted Succesfully";
        // }
        // else{
        //     die(mysqli_error($con));
        // }


        $sql = "Select * from `$tablename` where username='$username' or email='$email' ";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $num = mysqli_num_rows($result);
            if ($num > 0) {
                // echo "User Already Exist";
                $user=1;
            } else {
                if($password==$cpassword){
                    $sql = "insert into `$tablename` (username,email,password) values ('$username','$email','$password')";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    // echo "Sign Up Successfully";
                    $success=1;
                }
                }
                 else {
                    // die(mysqli_error($con));
                    // echo "Password Didn't Match";
                    $match=1;
                }
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
    <title>Signup Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php
        if($user){
            echo "<div class='alert alert-danger' role='alert'>
            User Already Exists!
          </div>";
          echo "<script>
            alert('User Already Exists!');
            window.location.href='login.php';
          </script>";
        }
        else{
            if($success){
                echo "<div class='alert alert-success' role='alert'>
                    Sign Up Successfull
                </div>";
                echo "<script>
                        alert('Sign Up Successfull');
                        window.location.href='login.php';
                    </script>";
            }
            else{
                if($match){
                    echo "<div class='alert alert-danger' role='alert'>
                    Password Didn't Match!!
                    </div>";
                    echo "<script>
                        alert('Password Didn't Match!!');
                        window.location.href='login.php';
                    </script>";
                }
            }
        }
    ?>
    
</body>
</html>