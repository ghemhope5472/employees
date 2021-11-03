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

        $emp_id = $_REQUEST['id'];

     

        $query_delete = mysqli_query($connections, "SELECT * FROM emptbl WHERE id='$emp_id'");

        while($row_delete = mysqli_fetch_assoc($query_delete)){

          
            $first_name = $row_delete['first_name'];
          

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
         

        <form action="confirmed_delete.php" method="POST">
            <input type="hidden" name="emp_id" value="<?php echo $emp_id ?>">
            <h3 style='color:white;'>Are you sure you want to delete  <?php echo $first_name  ?> ? </h3>
            <input type='submit' value="Yes" class='btn-delete'> &nbsp; <a href="list_employees.php" class='btn-info'> No </a>
 

        </form>
        </div>

    </div>
</body>
</html>