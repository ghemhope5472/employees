<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">


    <?php
        session_start();
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
?>

        <div class="side-nav">

            <div class="side-header">
                <h3>Employee System </h3>
            </div>

            <div class="nav">
               <a href="index.php" >
               <div class="item"><img src="../icons/presentation.png" alt="icon" class='icon' width='30px' style='margin-right: 2rem;'> Dashboard </div>
               </a>
               <a href="employees.php">
               <div class="item active"><img src="../icons/portfolio.png" alt="icon" class='icon' width='30px' style='margin-right: 2rem;'> Employees </div>
               </a>
               <a href="logs.php">
               <div class="item" style='margin-bottom:2rem;'><img src="../icons/folder.png" alt="icon" class='icon' width='30px' style='margin-right: 2rem;'> Logs </div>
               </a>
            

               <div class="item" style='margin-top:20rem;'> Logged in as -  <?php  echo $db_username; ?> </div>
               <a href="#">
               <div class="item" ><img src="../icons/logout.png" alt="icon" class='icon' width='30px' style='margin-right: 2rem;'> Logout  </div>
               </a>
            </div>

          

        </div>


        <div class="main">
         
        <?php

        include('../connections.php');

        $emp_id = $_POST['emp_id'];


        $query_edit = mysqli_query($connections, "SELECT * FROM emptbl WHERE id='$emp_id'");

        while($row_edit = mysqli_fetch_assoc($query_edit)){
            
      
            $family_name = $row_edit['family_name'];
          
      
          

        }

        mysqli_query($connections, "DELETE FROM emptbl WHERE id='$emp_id'");

        date_default_timezone_set('Asia/Manila');
        $date = date('m/d/Y h:i:s a', time());
    
        $sql = "INSERT INTO logs (user,action,time)VALUES('$db_username','Delete Employee: $family_name','$date')";
        $result = mysqli_query($connections, $sql);

        echo "<script language='javascript'> alert('User deleted');</script>";
        echo "<script> window.location.href='list_employees.php'</script>";
        ?>
   
        </div>

    </div>
</body>
</html>