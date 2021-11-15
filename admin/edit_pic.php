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

     

        $query_edit = mysqli_query($connections, "SELECT * FROM emptbl WHERE id='$emp_id'");

        while($row_edit = mysqli_fetch_assoc($query_edit)){
            
            $eid = $row_edit['eid'];
     
            $img = $row_edit['img'];

          

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
               <a href="list_employees.php.php">
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

        <span class='breadcrumb'> <a href="index.php"> Dashboard ></a> <a href="employees.php" > Employees ></a> 
             <a href="list_employees.php" > List of Employee > </a> <a href="" style='text-decoration:underline;'> View ></a>
            </span>
            <br> <br>
         
        <table >
                

               <tr>
               <div class="photo-square" style="height: 300px;width: 300px;background-color: #1d2138;margin:0 auto;">
                        <form action="save_pic.php" method="POST" enctype="multipart/form-data">
                            <img src="<?php echo $img ?>"  id="output"/ class="img-preview" height="300px" width="300px">
                            
                            <input type="file" name="img"  style="margin-top: 1rem;" onchange="loadFile(event)" style="color: floralwhite;"> 
                            <br>
                            <input type="hidden" name="emp_id" value="<?php echo $emp_id;  ?>">
                            <button class="btn-info">Save </button> 
                        </form>
                </div>
               </tr>
        </table>

       
        </div>

    </div>
    <script src='../js/jQuery.js'></script>
    <script>
   var loadFile =  function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
</body>
</html>