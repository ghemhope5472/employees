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
               <a href="logout.php">
               <div class="item" ><img src="../icons/logout.png" alt="icon" class='icon' width='30px' style='margin-right: 2rem;'> Logout  </div>
               </a>
            </div>

          

        </div>




        <div class="main">
            
            <span class='breadcrumb'> <a href="index.php"> Dashboard ></a> <a href="employees.php" > Employees ></a>
             <a href="list_employees.php" style='text-decoration:underline;'> List of Employee </a>
            </span>
            <br> <br>
            <a href="add_employees.php" class='button-add'> Add Employee </a>  | 
            <a href="list_employees.php" class='button-add' style="text-decoration: underline;"> List of Employee </a>

            


        <?php 
        include("../connections.php");

        $view_query = mysqli_query($connections, "SELECT * FROM emptbl");

        echo "<table>";
        echo "<tr> 
                <td style='text-align:center;font-weight:bold;background-color: #4a8507;color:floralwhite;' colspan='4'> &nbsp; </td>
            </tr>";

        while($row = mysqli_fetch_assoc($view_query)){
                $emp_id = $row['id'];
                $eid = $row['eid'];
                $family_name = $row['family_name'];
                $first_name = $row['first_name'];
                $middle_name = $row['middle_name'];
                $position = $row['position'];
                $date_hired = $row['date_hired'];
                $status = $row['status'];
                $img = $row['img'];
              
        echo "<tr> 
        <td>
        <img src=' $img' alt='img' width='100px' height='100px'>
        </td>
        <td width='70%' style='font-size: 15px;'> 
        <table class='inside_table'>
            <tr style='border-collapse: collapse;'>
            <td width='30%' style='border: 1px solid #F2F4F7;background-color: #c1f1f1;'>EID Number</td>
            <td  width='70%' style='border: 1px solid #F2F4F7;background-color: #c1f1f1;font-weight:bold;font-family:Arial;'>: $eid  </td>
            </tr>
            <tr style='border-collapse: collapse;'>
            <td width='30%' style='border: 1px solid #F2F4F7;background-color: #e3f1f1;'>Name </td>
            <td  width='70%' style='border: 1px solid #F2F4F7;background-color: #e3f1f1;font-weight:bold;font-family:Arial;'>: $first_name $middle_name $family_name </td>
            </tr>
            <tr style='border-collapse: collapse;'>
            <td width='30%' style='border: 1px solid #F2F4F7;background-color: #c1f1f1;'> Position </td>
            <td  width='70%' style='border: 1px solid #F2F4F7;background-color: #c1f1f1;font-weight:bold;font-family:Arial;'>: $position </td>
            </tr>
            <tr style='border-collapse: collapse;'>
            <td width='30%' style='border: 1px solid #F2F4F7;background-color: #e3f1f1;'>Date Hired</td>
            <td  width='70%' style='border: 1px solid #F2F4F7;background-color: #e3f1f1;font-weight:bold;font-family:Arial;'>: $date_hired </td>
            </tr>
            <tr style='border-collapse: collapse;'>
            <td width='30%' style='border: 1px solid #F2F4F7;background-color: #c1f1f1;'>Status </td>
            <td  width='70%' style='border: 1px solid #F2F4F7;background-color: #c1f1f1;font-weight:bold;font-family:Arial;'>: $status </td>
            </tr>

        </table>
        </td>
        <td width='30%'> 
            <div style='text-align:center;'>
            <a href='View.php?id=$emp_id' class='btn-info' >More info </a>  | 
            <a href='Edit.php?id=$emp_id' class='btn-edit' >Edit </a> | 
            <a href='Delete.php?id=$emp_id' class='btn-delete' >Delete </a> 
            </div>
        </td>
                       
        </tr>";

   
        }



        echo "</table>";
        

?>








            
        </div> <!-- end main div -->










 

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