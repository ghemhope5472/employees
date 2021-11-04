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
            $date_hired = $row_edit['date_hired'];
            $department = $row_edit['department'];
            $position = $row_edit['position'];
            $status = $row_edit['status'];
            $family_name = $row_edit['family_name'];
            $first_name = $row_edit['first_name'];
            $middle_name = $row_edit['middle_name'];
            $contact_number = $row_edit['contact_number'];
            $email_address = $row_edit['email_address'];
            $birthday = $row_edit['birthday'];
            $religion = $row_edit['religion'];
            $address = $row_edit['address'];
            $weight = $row_edit['weight'];
            $tin_number = $row_edit['tin_number'];
            $pagibig_number = $row_edit['pagibig_number'];
            $height = $row_edit['height'];
            $sss_number = $row_edit['sss_number'];
            $philhealth_number = $row_edit['philhealth_number'];
            $civil_status = $row_edit['civil_status'];
            $spouse_name = $row_edit['spouse_name'];
            $spouse_birthday = $row_edit['spouse_birthday'];
            $spouse_number = $row_edit['spouse_number'];
            $spouse_email  = $row_edit['spouse_email'];
            $spouse_occupation = $row_edit['spouse_occupation'];
            $children = $row_edit['children'];
            $elementary = $row_edit['elementary'];
            $elementary_address = $row_edit['elementary_address'];
            $elementary_graduate_year = $row_edit['elementary_graduate_year'] ;
            $secondary =  $row_edit['secondary'];
            $secondary_address = $row_edit['secondary_address'];
            $secondary_graduate_year  = $row_edit['secondary_graduate_year'];
            $tertiary = $row_edit['tertiary'];
            $tertiary_address = $row_edit['tertiary_address'] ;
            $course = $row_edit['course'];
            $tertiary_graduate_year = $row_edit['tertiary_graduate_year'];
            $emergency_name = $row_edit['emergency_name'];
            $emergency_address = $row_edit['emergency_address'];
            $emergency_relationship = $row_edit['emergency_relationship'];
            $emergency_number = $row_edit['emergency_number'];
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
             <a href="list_employees.php" > List of Employee > </a> <a href="" style='text-decoration:underline;'> View ></a>
            </span>
            <br> <br>
         
        <table >
                <tr>
                    <td style='text-align:center;font-weight:bold;background-color: #4a8507;color:floralwhite;' colspan="4">EMPLOYEE INFO</td>
                </tr>

               
                <form action="<?php htmlspecialchars('PHP_SELF'); ?>" method="POST" enctype="multipart/form-data">
                <!--    FORM START -->
                <tr>
                    <td colspan='5'>
                        EIDN:  <input type="text" name="eid" value='<?php echo $eid; ?>' readonly> 
                    </td>
                </tr>
                <tr>
                    <td>Date Hired: <input type="date" name="date_hired" value='<?php echo $date_hired; ?>' readonly> </td>
                    <td> Department:  
                       <input type="text" value='<?php echo $department; ?>' readonly>
                    </td>
                    <td> Position:  <input type="text" name="position" id="position" class="form-control" value='<?php echo $position; ?>' readonly></td>
                    <td> Employee Status: 
                    <input type="text" value='<?php echo $status; ?>' readonly>
                    </td>
                   
                </tr>
                <tr>
                    <td rowspan="9">
                    <div class="photo-square" style="height: 300px;width: 300px;background-color: #1d2138;margin:0 auto;">
                        <img src='<?php echo $img; ?>'   id="output"/ class="img-preview" height="300px" width="300px">
                    </div>
                        
                    </td>
                    <td colspan='3' style='text-align:center;font-weight:bold;background-color: #4a8507;color:floralwhite;'>
                        PERSONAL INFORMATION
                    </td>
                 
                   
                </tr>
                <tr colspan="3">
                    <td> Family Name </td>
                    <td colspan="2"> <input type="text" name="family_name" value='<?php echo $family_name; ?>' readonly></td>
                </tr>
                <tr >
                    <td> First Name </td>
                    <td colspan="2"> <input type="text" name="first_name" value='<?php echo $first_name; ?>' readonly ></td>
                </tr>
                <tr >
                    <td> Middle Name </td>
                    <td colspan="2"> <input type="text" name="middle_name" value='<?php echo $middle_name; ?>' readonly ></td>
                </tr>
                <tr >
                    <td>Contact Number</td>
                    <td colspan="2"> <input type="text" name="contact_number" value='<?php echo $contact_number; ?>' readonly></td>
                </tr>
                <tr >
                    <td>Email Address</td>
                    <td colspan="2"> <input type="text" name="email_address" value='<?php echo $email_address; ?>' readonly></td>
                </tr>
                <tr >
                    <td> Birthday </td>
                    <td colspan="2"> <input type="date" name="birthday" value='<?php echo $birthday; ?>' readonly></td>
                </tr>
                <tr >
                    <td> Religion</td>
                    <td colspan="2"> <input type="text" name="religion" value='<?php echo $religion; ?>' readonly></td>
                </tr>
                <tr >
                    <td> Permanent Address</td>
                    <td colspan="2"> <input type="text" name="address" value='<?php echo $address; ?>' readonly></td>
                </tr>
                <tr>
                    <td>
                        Weight <input type="text" name="weight" value='<?php echo $weight; ?>' readonly>
                    </td>
                    <td colspan='2' > TIN Number <input type="text" name="tin_number" value='<?php echo $tin_number; ?>' readonly ></td>
                    <td colspan='2' width="30%"> PAG-IBIG Number <input type="text" name="pagibig_number" value='<?php echo $pagibig_number; ?>' readonly></td>
                </tr>
                <tr>
                    <td>
                        Height <input type="text" name="height" value='<?php echo $height; ?>' readonly>
                    </td>
                    <td colspan='2' > SSS Number <input type="text" name="sss_number" value='<?php echo $sss_number; ?>' readonly ></td>
                    <td colspan='2' width="30%"> PhilHealth Number <input type="text" name="philhealth_number" value='<?php echo $philhealth_number; ?>' readonly ></td>
                </tr>
                <tr>
                    <td rowspan="7">
                        Civil Status: 
                        <input type="text" value='<?php echo $civil_status; ?>' readonly>
                    </td>
              
                 
                   
                </tr>
                <tr>
                    <td >
                        Spouse Name
                    </td>
                    <td colspan="2">
                         <input type="text" name="spouse_name" value='<?php echo $spouse_name; ?>' readonly>
                    </td>
                </tr>
                <tr>
                    <td >
                        Spouse Birthday
                    </td>
                    <td colspan="2">
                         <input type="text" name="spouse_birthday" value='<?php echo $spouse_birthday; ?>' readonly>
                    </td>
                </tr>
                <tr>
                    <td >
                        Spouse Contact Number
                    </td>
                    <td colspan="2">
                         <input type="text" name="spouse_number" value='<?php echo $spouse_number; ?>' readonly>
                    </td>
                </tr>
                <tr>
                    <td >
                        Email Address
                    </td>
                    <td colspan="2">
                         <input type="text" name="spouse_email" value='<?php echo $spouse_email; ?>' readonly>
                    </td>
                </tr>
                <tr>
                    <td >
                        Occupation
                    </td>
                    <td colspan="2">
                         <input type="text" name="spouse_occupation" value='<?php echo $spouse_occupation; ?>' readonly>
                    </td>
                </tr>
                <tr>
                    <td >
                        No. of Children
                    </td>
                    <td colspan="2">
                         <input type="text" name="children" value='<?php echo $children; ?>' readonly>
                    </td>
                </tr>

                <tr>
                    <td colspan = '5' style='text-align:center;font-weight:bold;background-color: #4a8507;color:floralwhite;'> EDUCATIONAL BACKGROUND </td>
                </tr>
                <tr>
                    <td> Elementary </td>
                    <td colspan='3'>
                        <input type="text" name="elementary" value='<?php echo $elementary; ?>' readonly>
                    </td>
                </tr>
                <tr>
                    <td> Address </td>
                    <td colspan='3'>
                        <input type="text" name="elementary_address" value='<?php echo $elementary_address; ?>' readonly>
                    </td>
                </tr>
                <tr>
                    <td> Year Graduated </td>
                    <td colspan='3'>
                        <input type="text" name="elementary_graduate_year" value='<?php echo $elementary_graduate_year; ?>' readonly>
                    </td>
                </tr>


                <!-- secondary  -->
                <tr>
                    <td> Secondary </td>
                    <td colspan='3'>
                        <input type="text" name="secondary" value='<?php echo $secondary; ?>' readonly>
                    </td>
                </tr>
                <tr>
                    <td> Address </td>
                    <td colspan='3'>
                        <input type="text" name="secondary_address" value='<?php echo $secondary_address; ?>' readonly>
                    </td>
                </tr>
                <tr>
                    <td> Year Graduated </td>
                    <td colspan='3'>
                        <input type="text" name="secondary_graduate_year" value='<?php echo $secondary_graduate_year; ?>' readonly>
                    </td>
                </tr>

                 <!-- tertiary  -->
                 <tr>
                    <td> Tertiary </td>
                    <td colspan='3'>
                        <input type="text" name="tertiary" value='<?php echo $tertiary; ?>' readonly>
                    </td>
                </tr>
                <tr>
                    <td> Address </td>
                    <td colspan='3'>
                        <input type="text" name="tertiary_address" value='<?php echo $tertiary_address; ?>' readonly>
                    </td>
                </tr>
                <tr>
                    <td> Course </td>
                    <td colspan='3'>
                        <input type="text" name="course" value='<?php echo $course; ?>' readonly>
                    </td>
                </tr>
                <tr>
                    <td> Year Graduated </td>
                    <td colspan='3'>
                        <input type="text" name="tertiary_graduate_year" value='<?php echo $tertiary_graduate_year; ?>' readonly>
                    </td>
                </tr>

                <tr >
                    <td  colspan = '5' style='text-align:center;font-weight:bold;background-color: #4a8507;color:floralwhite;'>
                        IN CASE OF EMERGENCY:
                    </td>
                </tr>
                <tr>
                    <td colspan = '2'> Name <input type="text" name="emergency_name" value='<?php echo $emergency_name; ?>' readonly> </td>
                    <td colspan = '2'> Address <input type="text" name="emergency_address" value='<?php echo $emergency_address; ?>' readonly> </td>
                </tr>
                <tr>
                    <td colspan = '2'> Relationship <input type="text" name="emergency_relationship" value='<?php echo $emergency_relationship; ?>' readonly> </td>
                    <td colspan = '2'> Contact Number <input type="text" name="emergency_number" value='<?php echo $emergency_number; ?>' readonly> </td>
                </tr>

            </table>

       
        </div>

    </div>
</body>
</html>