
<?php 
session_start();

$dbhostname = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "music-store";
$tablename = "order_manger";

$fullname = $_POST['Full_Name'];
$phone_no = $_POST['Phone_No'];
$address = $_POST['Address'];
$pay_mode = $_POST['Pay_Mode'];
$username= $_POST['Username'];
$date= $_POST['Date'];
// $rawdate = htmlentities($_POST['date']);
$date = date('d-m-Y', strtotime($date));
// echo $date;



$con1=mysqli_connect($dbhostname,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        echo"<script>
            alert('Cannot Connect to Database');
            window.location.href='cart.php';
            </script>";
            exit();
    }

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_POST['purchase']))
        {
            $query1=" INSERT INTO `order_manager`(`Username`,`Full_name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$username','$fullname','$phone_no','$address','$pay_mode')";
            if(mysqli_query($con1,$query1))
            {
                $Order_id=mysqli_insert_id($con1);
                $query2="INSERT INTO `user_order`(`Order_id`,`Username`,`Category`, `Item_Name`, `Price`, `Quantity`, `Date`) VALUES (?,?,?,?,?,?,?)";
                $stmt=mysqli_prepare($con1,$query2);
                if($stmt)
                {
                    
                    mysqli_stmt_bind_param($stmt,"isssiis",$Order_id,$username,$Category,$Item_Name,$Price,$Quantity,$date);
                    foreach($_SESSION['cart'] as $key => $values )
                    {
                        $Item_Name=$values['Item_Name'];
                        $Category=$values['Category'];
                        $Price=$values['Price'];
                        $Quantity=$values['Quantity'];
                        mysqli_stmt_execute($stmt);
                    }
                    unset($_SESSION['cart']);
                    echo"<script>
                        alert('Order Placed');
                        window.location.href='main.php';
                        </script>";
                }
                else
                {
                    echo"<script>
                    alert('Sql Query Prepare Error');
                    window.location.href='cart.php';
                    </script>";
                }
            }
            else
            {
                echo"<script>
                alert('Sql Error');
                window.location.href='cart.php';
                </script>";
            }
        }
    }
?>
