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
            
            <span class='breadcrumb'> <a href="index.php"> Dashboard > </a> <a href="employees.php" > Employees ></a>
             <a href="add_employees.php" style='text-decoration:underline;'> Add Employees </a>
            </span>
            <br> <br>
            <span class='button-add-tab' style="margin-top: 15px;
            background-color: #4a8507;
            padding: 5px 35px;
            border-radius: 5px;
            font-size: small;
            color: floralwhite;"> Add Employee </span> | 
            <a href="list_employees.php" class='button-add'> List of Employee </a>


            <table >
                <tr>
                    <td style='text-align:center;font-weight:bold;background-color: #4a8507;color:floralwhite;' colspan="4">EMPLOYEE INFO</td>
                </tr>

               
                <form action="<?php htmlspecialchars('PHP_SELF'); ?>" method="POST" enctype="multipart/form-data">
                <!--    FORM START -->
                <tr>
                    <td colspan='5'>
                        EIDN:  <input type="text" name="eid" required>
                    </td>
                </tr>
                <tr>
                    <td>Date Hired: <input type="date" name="date_hired" required> </td>
                    <td> Department:  
                        <select name="department" id="department" class="form-control" required>
                            <option value="HCAD">HCAD</option>
                            <option value="SOA">SOA</option>
                            <option value="COD">COD</option>
                        </select>
                    </td>
                    <td> Position:  <input type="text" name="position" id="position" class="form-control" required></td>
                    <td> Employee Status: 
                        <select name="status" id="status" class="form-control" required>
                            <option value="regular">Regular</option>
                            <option value="probationary">Probationary</option>
                        </select> 
                    </td>
                   
                </tr>
                <tr>
                    <td rowspan="9">
                    <div class="photo-square" style="height: 300px;width: 300px;background-color: #1d2138;margin:0 auto;">
                        <img src=""  id="output"/ class="img-preview" height="300px" width="300px">
                    </div>
                        <input type="file" name="img"  style="margin-top: 1rem;" onchange="loadFile(event)">
                    </td>
                    <td colspan='3' style='text-align:center;font-weight:bold;background-color: #4a8507;color:floralwhite;'>
                        PERSONAL INFORMATION
                    </td>
                 
                   
                </tr>
                <tr colspan="3">
                    <td> Family Name </td>
                    <td colspan="2"> <input type="text" name="family_name" required></td>
                </tr>
                <tr >
                    <td> First Name </td>
                    <td colspan="2"> <input type="text" name="first_name" required ></td>
                </tr>
                <tr >
                    <td> Middle Name </td>
                    <td colspan="2"> <input type="text" name="middle_name" required ></td>
                </tr>
                <tr >
                    <td>Contact Number</td>
                    <td colspan="2"> <input type="text" name="contact_number" required></td>
                </tr>
                <tr >
                    <td>Email Address</td>
                    <td colspan="2"> <input type="text" name="email_address" required></td>
                </tr>
                <tr >
                    <td> Birthday </td>
                    <td colspan="2"> <input type="date" name="birthday" required></td>
                </tr>
                <tr >
                    <td> Religion</td>
                    <td colspan="2"> <input type="text" name="religion" required></td>
                </tr>
                <tr >
                    <td> Permanent Address</td>
                    <td colspan="2"> <input type="text" name="address" required></td>
                </tr>
                <tr>
                    <td>
                        Weight <input type="text" name="weight" required>
                    </td>
                    <td colspan='2' > TIN Number <input type="text" name="tin_number" required ></td>
                    <td colspan='2' width="30%"> PAG-IBIG Number <input type="text" name="pagibig_number" required></td>
                </tr>
                <tr>
                    <td>
                        Height <input type="text" name="height" required>
                    </td>
                    <td colspan='2' > SSS Number <input type="text" name="sss_number" required ></td>
                    <td colspan='2' width="30%"> PhilHealth Number <input type="text" name="philhealth_number" required ></td>
                </tr>
                <tr>
                    <td rowspan="7">
                        Civil Status: 
                        <div class="ml-5">    
                            <input type="radio" id="single" name="civil_status" value="Single" style='width:100px;'>
                            <label for="single">Single </label><br>
                            <input type="radio" id="married" name="civil_status" value="Married" style='width:100px;'>
                            <label for="married">Married</label><br>
                            <input type="radio" id="widow" name="civil_status" value="Widow" style='width:100px;'>
                            <label for="widow">Widow</label> <br>
                            <input type="radio" id="sep" name="civil_status" value="Separated" style='width:100px;'>
                            <label for="sep">Separated</label>
                         </div>
                    </td>
              
                 
                   
                </tr>
                <tr>
                    <td >
                        Spouse Name
                    </td>
                    <td colspan="2">
                         <input type="text" name="spouse_name" required>
                    </td>
                </tr>
                <tr>
                    <td >
                        Spouse Birthday
                    </td>
                    <td colspan="2">
                         <input type="text" name="spouse_birthday" required>
                    </td>
                </tr>
                <tr>
                    <td >
                        Spouse Contact Number
                    </td>
                    <td colspan="2">
                         <input type="text" name="spouse_number" required>
                    </td>
                </tr>
                <tr>
                    <td >
                        Email Address
                    </td>
                    <td colspan="2">
                         <input type="text" name="spouse_email" required>
                    </td>
                </tr>
                <tr>
                    <td >
                        Occupation
                    </td>
                    <td colspan="2">
                         <input type="text" name="spouse_occupation" required>
                    </td>
                </tr>
                <tr>
                    <td >
                        No. of Children
                    </td>
                    <td colspan="2">
                         <input type="text" name="children" required>
                    </td>
                </tr>

                <tr>
                    <td colspan = '5' style='text-align:center;font-weight:bold;background-color: #4a8507;color:floralwhite;'> EDUCATIONAL BACKGROUND </td>
                </tr>
                <tr>
                    <td> Elementary </td>
                    <td colspan='3'>
                        <input type="text" name="elementary" required>
                    </td>
                </tr>
                <tr>
                    <td> Address </td>
                    <td colspan='3'>
                        <input type="text" name="elementary_address" required>
                    </td>
                </tr>
                <tr>
                    <td> Year Graduated </td>
                    <td colspan='3'>
                        <input type="text" name="elementary_graduate_year" required>
                    </td>
                </tr>


                <!-- secondary  -->
                <tr>
                    <td> Secondary </td>
                    <td colspan='3'>
                        <input type="text" name="secondary" required>
                    </td>
                </tr>
                <tr>
                    <td> Address </td>
                    <td colspan='3'>
                        <input type="text" name="secondary_address" required>
                    </td>
                </tr>
                <tr>
                    <td> Year Graduated </td>
                    <td colspan='3'>
                        <input type="text" name="secondary_graduate_year" required>
                    </td>
                </tr>

                 <!-- tertiary  -->
                 <tr>
                    <td> Tertiary </td>
                    <td colspan='3'>
                        <input type="text" name="tertiary" required>
                    </td>
                </tr>
                <tr>
                    <td> Address </td>
                    <td colspan='3'>
                        <input type="text" name="tertiary_address" required>
                    </td>
                </tr>
                <tr>
                    <td> Course </td>
                    <td colspan='3'>
                        <input type="text" name="course" required>
                    </td>
                </tr>
                <tr>
                    <td> Year Graduated </td>
                    <td colspan='3'>
                        <input type="text" name="tertiary_graduate_year" required>
                    </td>
                </tr>

                <tr >
                    <td  colspan = '5' style='text-align:center;font-weight:bold;background-color: #4a8507;color:floralwhite;'>
                        IN CASE OF EMERGENCY:
                    </td>
                </tr>
                <tr>
                    <td colspan = '2'> Name <input type="text" name="emergency_name" required> </td>
                    <td colspan = '2'> Address <input type="text" name="emergency_address" required> </td>
                </tr>
                <tr>
                    <td colspan = '2'> Relationship <input type="text" name="emergency_relationship" required> </td>
                    <td colspan = '2'> Contact Number <input type="text" name="emergency_number" required> </td>
                </tr>

            </table>

            <button class='button-submit'> SAVE </button>

        </form>    <!-- FORM END -->
     




            
        </div> <!-- end main div -->




        <?php 


        include("../connections.php");
                $eid = $date_hired = $department = $position = $status = $family_name = $first_name = $middle_name = $contact_number = $email_address = $birthday = $religion = $address 
                = $weight = $tin_number = $pagibig_number = $height = $sss_number = $philhealth_number = $civil_status = $spouse_name = $spouse_birthday = $spouse_number = $spouse_email
                = $spouse_occupation = $children = $elementary = $elementary_address = $elementary_graduate_year =  $secondary =  $secondary_address = $secondary_graduate_year 
                = $tertiary = $tertiary_address =  $course = $tertiary_graduate_year = $emergency_name = $emergency_address = $emergency_relationship = $emergency_number = '';

if($_SERVER["REQUEST_METHOD"] === "POST"){
                if(empty($_POST["eid"])){
                    $eidErr = "Name is required "; 
                }else{
                    $eid = $_POST["eid"];
                }
                if(empty($_POST["date_hired"])){
                    $date_hiredErr = "Address is required";
                }else{
                    $date_hired = $_POST["date_hired"];
                }
                if(empty($_POST["department"])){
                    $departmentErr = "Email is required";
                }else{
                    $department = $_POST["department"];
                }
                if(empty($_POST['position'])){
                    $positionErr = "Required";
                }else{
                    $position = $_POST['position'];
                }
                if(empty($_POST['status'])){
                    $statusErr = "Required";
                }else{
                    $status = $_POST['status'];
                }
                if(empty($_POST['family_name'])){
                    $family_nameErr = "Required";
                }else{
                    $family_name = $_POST['family_name'];
                }
                if(empty($_POST['first_name'])){
                    $first_nameErr = "Required";
                }else{
                    $first_name = $_POST['first_name'];
                }
                if(empty($_POST['middle_name'])){
                    $middle_nameErr = "Required";
                }else{
                    $middle_name = $_POST['middle_name'];
                }
                if(empty($_POST['contact_number'])){
                    $contact_numberErr = "Required";
                }else{
                    $contact_number = $_POST['contact_number'];
                }
                if(empty($_POST['email_address'])){
                    $email_addressErr = "Required";
                }else{
                    $email_address = $_POST['email_address'];
                }
                if(empty($_POST['birthday'])){
                    $birthdayErr = "Required";
                }else{
                    $birthday = $_POST['birthday'];
                }
                if(empty($_POST['religion'])){
                    $religionErr = "Required";
                }else{
                    $religion = $_POST['religion'];
                }
                if(empty($_POST['address'])){
                    $addressErr = "Required";
                }else{
                    $address = $_POST['address'];
                }
                if(empty($_POST['weight'])){
                    $weightErr = "Required";
                }else{
                    $weight = $_POST['weight'];
                }
                if(empty($_POST['tin_number'])){
                    $tin_numberErr = "Required";
                }else{
                    $tin_number = $_POST['tin_number'];
                }
                if(empty($_POST['pagibig_number'])){
                    $pagibig_numberErr = "Required";
                }else{
                    $pagibig_number = $_POST['pagibig_number'];
                }
                if(empty($_POST['height'])){
                    $heightErr = "Required";
                }else{
                    $height = $_POST['height'];
                }
                if(empty($_POST['sss_number'])){
                    $sss_numberErr = "Required";
                }else{
                    $sss_number = $_POST['sss_number'];
                }
                if(empty($_POST['philhealth_number'])){
                    $philhealth_numberErr = "Required";
                }else{
                    $philhealth_number = $_POST['philhealth_number'];
                }
                if(empty($_POST['civil_status'])){
                    $civil_statusErr = "Required";
                }else{
                    $civil_status = $_POST['civil_status'];
                }
                if(empty($_POST['spouse_name'])){
                    $spouse_nameErr = "Required";
                }else{
                    $spouse_name = $_POST['spouse_name'];
                }
                if(empty($_POST['spouse_birthday'])){
                    $spouse_birthdayErr = "Required";
                }else{
                    $spouse_birthday = $_POST['spouse_birthday'];
                }
                if(empty($_POST['spouse_number'])){
                    $spouse_numberErr = "Required";
                }else{
                    $spouse_number = $_POST['spouse_number'];
                }
                if(empty($_POST['spouse_email'])){
                    $spouse_emailErr = "Required";
                }else{
                    $spouse_email = $_POST['spouse_email'];
                }
                if(empty($_POST['spouse_occupation'])){
                    $spouse_occupationErr = "Required";
                }else{
                    $spouse_occupation = $_POST['spouse_occupation'];
                }
                if(empty($_POST['children'])){
                    $childrenErr = "Required";
                }else{
                    $children = $_POST['children'];
                }
                if(empty($_POST['elementary'])){
                    $elementaryErr = "Required";
                }else{
                    $elementary = $_POST['elementary'];
                }
                if(empty($_POST['elementary_address'])){
                    $elementary_addressErr = "Required";
                }else{
                    $elementary_address = $_POST['elementary_address'];
                }
                if(empty($_POST['elementary_graduate_year'])){
                    $elementary_graduate_yearErr = "Required";
                }else{
                    $elementary_graduate_year = $_POST['elementary_graduate_year'];
                }
                if(empty($_POST['secondary'])){
                    $secondaryErr = "Required";
                }else{
                    $secondary = $_POST['secondary'];
                }
                if(empty($_POST['secondary_address'])){
                    $secondary_addressErr = "Required";
                }else{
                    $secondary_address = $_POST['secondary_address'];
                }
                if(empty($_POST['secondary_graduate_year'])){
                    $secondary_graduate_yearErr = "Required";
                }else{
                    $secondary_graduate_year = $_POST['secondary_graduate_year'];
                }
                if(empty($_POST['tertiary'])){
                    $tertiaryErr = "Required";
                }else{
                    $tertiary = $_POST['tertiary'];
                }
                if(empty($_POST['tertiary_address'])){
                    $tertiary_addressErr = "Required";
                }else{
                    $tertiary_address = $_POST['tertiary_address'];
                }
                if(empty($_POST['course'])){
                    $courseErr = "Required";
                }else{
                    $course = $_POST['course'];
                }
                if(empty($_POST['tertiary_graduate_year'])){
                    $tertiary_graduate_yearErr = "Required";
                }else{
                    $tertiary_graduate_year = $_POST['tertiary_graduate_year'];
                }
                if(empty($_POST['emergency_name'])){
                    $emergency_nameErr = "Required";
                }else{
                    $emergency_name = $_POST['emergency_name'];
                }
                if(empty($_POST['emergency_address'])){
                    $emergency_addressErr = "Required";
                }else{
                    $emergency_address = $_POST['emergency_address'];
                }
                if(empty($_POST['emergency_relationship'])){
                    $emergency_relationshipErr = "Required";
                }else{
                    $emergency_relationship = $_POST['emergency_relationship'];
                }
                if(empty($_POST['emergency_number'])){
                    $emergency_numberErr = "Required";
                }else{
                    $emergency_number = $_POST['emergency_number'];
                }
           
                if($eid && $date_hired && $department && $position && $status && $family_name && $first_name && $middle_name && $contact_number && $email_address && $birthday && $religion && $address && $weight && $tin_number && $pagibig_number && $height && $sss_number && $philhealth_number && $civil_status && $spouse_name && $spouse_birthday && $spouse_number && $spouse_email && $spouse_occupation && $children && $elementary && $elementary_address && $elementary_graduate_year &&  $secondary &&  $secondary_address && $secondary_graduate_year && $tertiary && $tertiary_address &&  $course && $tertiary_graduate_year &&$emergency_name && $emergency_address && $emergency_relationship && $emergency_number){
 
                    $check_eid = mysqli_query($connections, "SELECT * FROM emptbl WHERE eid='$eid' ");
                    $check_email_row = mysqli_num_rows($check_eid);
            
                    if($check_email_row > 0 ){
                        $errEmail = 'Already registered';
            
                    }else{
                        if(move_uploaded_file($_FILES['img']['tmp_name'], "../photo_folder/".$_FILES['img']['name'])){
                            $img="../photo_folder/".$_FILES['img']['name'];
                            $query = mysqli_query($connections, " INSERT INTO emptbl(eid, date_hired, department,position, status, family_name, first_name, middle_name, contact_number, email_address, birthday, religion, address, weight, tin_number, pagibig_number, height, sss_number, philhealth_number, civil_status, spouse_name, spouse_birthday, spouse_number, spouse_email, spouse_occupation, children, elementary, elementary_address, elementary_graduate_year,  secondary,  secondary_address, secondary_graduate_year, tertiary, tertiary_address,  course, tertiary_graduate_year,emergency_name, emergency_address, emergency_relationship, emergency_number, img )
                            VALUES('$eid', '$date_hired', '$department','$position', '$status','$family_name', '$first_name', '$middle_name', '$contact_number', '$email_address', '$birthday', '$religion', '$address', '$weight', '$tin_number', '$pagibig_number', '$height', '$sss_number', '$philhealth_number', '$civil_status', '$spouse_name', '$spouse_birthday', '$spouse_number', '$spouse_email', '$spouse_occupation', '$children', '$elementary', '$elementary_address', '$elementary_graduate_year', ' $secondary',  '$secondary_address', '$secondary_graduate_year', '$tertiary', '$tertiary_address',  '$course', '$tertiary_graduate_year','$emergency_name', '$emergency_address', '$emergency_relationship', '$emergency_number', '$img')");
            
                            echo "<script language=javascript>alert('New record inserted');</script>";

                        }else{
                            echo "Error uploading file!";
                        }
                        
                     
                        
                      


                        
                      
                    }
                    
                   
            
                   }

 
    }
?>







 

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