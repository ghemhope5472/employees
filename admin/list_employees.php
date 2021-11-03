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
            
            <span class='breadcrumb'> <a href="index.php"> Dashboard ></a> <a href="employees.php" > Employees ></a>
             <a href="add_employees.php" style='text-decoration:underline;'> List of Employee </a>
            </span>
            <br> <br>
            <a href="add_employees.php" class='button-add'> Add Employee </a>  | 
            <a href="list_employees.php" class='button-add' style="text-decoration: underline;"> List of Employee </a>

            
            <table>
            <tr>
                    <td style='text-align:center;font-weight:bold;background-color: #4a8507;color:floralwhite;' colspan="4"> &nbsp; </td>
                </tr>
            <tr>
                <td>
                    <img src="../photo_folder//DELA PENA, RIO JAY front.png" alt="img" width="100px" height="100px">
                </td>
                <td width='70%' style="font-size: 15px;">
         
                   <table class="inside_table">
                       
                       <tr style=" border-collapse: collapse;">
                           <td width='30%' style=" border: 1px solid #F2F4F7;background-color: #c1f1f1;">EID Number</td>
                           <td  width='70%' style=" border: 1px solid #F2F4F7;background-color: #c1f1f1;">: 900-345 </td>
                       </tr>
                       <tr>
                            <td width='30%' style=" border: 1px solid #F2F4F7;background-color: #96D4D4;"> Name </td>
                           <td  width='70%' style=" border: 1px solid #F2F4F7;background-color: #96D4D4;">: Rio Jay Dela Pena</td>

                       </tr>
                       <tr>
                            <td width='30%' style=" border: 1px solid #F2F4F7;background-color: #c1f1f1;"> Position </td>
                           <td  width='70%' style=" border: 1px solid #F2F4F7;background-color: #c1f1f1;">: Collection Operations Assistant </td>

                       </tr>
                       <tr>
                            <td width='30%' style=" border: 1px solid #F2F4F7;background-color: #96D4D4;"> Date Hired </td>
                           <td  width='70%' style=" border: 1px solid #F2F4F7;background-color: #96D4D4;">: August 4, 2021 </td>

                       </tr>
                       <tr>
                            <td width='30%' style=" border: 1px solid #F2F4F7;background-color: #c1f1f1;"> Status </td>
                           <td  width='70%' style=" border: 1px solid #F2F4F7;background-color: #c1f1f1;">: Regular  </td>

                       </tr>
                   </table>
                    
                </td>
                <td width='20%'>
                   
                    <div style="text-align:center;">
                    <a href="#" class="btn-info" style="display: inline;">More info </a>  | 
                    <a href="#" class="btn-delete" style="display: inline;">Delete </a> 
                    </div>
                   
                    
                </td>
            </tr>

            </table>





            
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