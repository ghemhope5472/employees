
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


<?php



    include("../connections.php");
    $emp_id = $_POST['emp_id'];
    $new_eid = $_POST['eid'];
    $date_hired = $_POST['date_hired'];
    $department = $_POST['department'];
    $position = $_POST['position'];
    $status = $_POST['status'];
    $family_name = $_POST['family_name'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $contact_number = $_POST['contact_number'];
    $email_address = $_POST['email_address'];
    $birthday = $_POST['birthday'];
    $religion = $_POST['religion'];
    $address = $_POST['address'];
    $weight = $_POST['weight'];
    $tin_number = $_POST['tin_number'];
    $pagibig_number = $_POST['pagibig_number'];
    $height = $_POST['height'];
    $sss_number = $_POST['sss_number'];
    $philhealth_number = $_POST['philhealth_number'];
    $civil_status = $_POST['civil_status'];
    $spouse_name = $_POST['spouse_name'];
    $spouse_birthday = $_POST['spouse_birthday'];
    $spouse_number = $_POST['spouse_number'];
    $spouse_email  = $_POST['spouse_email'];
    $spouse_occupation = $_POST['spouse_occupation'];
    $children = $_POST['children'];
    $elementary = $_POST['elementary'];
    $elementary_address = $_POST['elementary_address'];
    $elementary_graduate_year = $_POST['elementary_graduate_year'] ;
    $secondary =  $_POST['secondary'];
    $secondary_address = $_POST['secondary_address'];
    $secondary_graduate_year  = $_POST['secondary_graduate_year'];
    $tertiary = $_POST['tertiary'];
    $tertiary_address = $_POST['tertiary_address'] ;
    $course = $_POST['course'];
    $tertiary_graduate_year = $_POST['tertiary_graduate_year'];
    $emergency_name = $_POST['emergency_name'];
    $emergency_address = $_POST['emergency_address'];
    $emergency_relationship = $_POST['emergency_relationship'];
    $emergency_number = $_POST['emergency_number'];
    $img= $_POST['img'];
    


   

    mysqli_query($connections, 
    "UPDATE emptbl SET 
    eid='$new_eid', 
    date_hired='$date_hired',
    department ='$department', 
    position = '$position',
    status = '$status',
    family_name = '$family_name', 
    first_name ='$first_name', 
    middle_name = '$middle_name',
    contact_number = '$contact_number', 
    email_address = '$email_address',
    birthday='$birthday',
    religion='$religion',
    address = '$address', 
    weight = '$weight', 
    tin_number = '$tin_number', 
    pagibig_number='$pagibig_number', 
    height='$height', 
    sss_number='$sss_number', 
    philhealth_number='$philhealth_number',
    civil_status='$civil_status', 
    spouse_name='$spouse_name',
    spouse_birthday='$spouse_birthday', 
    spouse_number='$spouse_number', 
    spouse_email='$spouse_email',  
    spouse_occupation='$spouse_occupation', 
    children='$children',
    elementary='$elementary', 
    elementary_address='$elementary_address', 
    elementary_graduate_year='$elementary_graduate_year', 
    secondary='$secondary',  
    secondary_address='$secondary_address', 
    secondary_graduate_year='$secondary_graduate_year',  
    tertiary='$tertiary', 
    tertiary_address='$tertiary_address',  
    course='$course',  
    tertiary_graduate_year='$tertiary_graduate_year',  
    emergency_name='$emergency_name', 
    emergency_address='$emergency_address', 
    emergency_relationship='$emergency_relationship', 
    emergency_number='$emergency_number'   


   
     
    
    WHERE id='$emp_id'");

    date_default_timezone_set('Asia/Manila');
    $date = date('m/d/Y h:i:s a', time());

    $sql = "INSERT INTO logs (user,action,time)VALUES('$db_username','Edit Employee: $family_name','$date')";
    $result = mysqli_query($connections, $sql);



    echo "<script language='javascript'>alert('Record has been updated')</script>";
    echo "<script>window.location.href='View.php?id=$emp_id';</script>";



?>