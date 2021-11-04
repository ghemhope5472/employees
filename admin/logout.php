<?php   
session_start(); //to ensure you are using same session

if(isset($_SESSION['id'])){
    $user_id = $_SESSION['id'];
    include("../connections.php");

    $get_record = mysqli_query($connections, "SELECT * FROM mytbl WHERE id='$user_id' ");
    while($row_edit = mysqli_fetch_assoc($get_record)){
        $db_username = $row_edit["username"];
    }  



    

}else{
    echo "You must login first! <a href='../login.php>Login now</a>";
}
date_default_timezone_set('Asia/Manila');
$date = date('m/d/Y h:i:s a', time());

$sql = "INSERT INTO logs (user,action,time)VALUES('$db_username','Logout','$date')";
$result = mysqli_query($connections, $sql);
session_destroy(); //destroy the session
echo "<script language='javascript'> alert('Successfully logout!');</script>";

header("location:/employees/index.php"); //to redirect back to "index.php" after logging out
exit();
?>