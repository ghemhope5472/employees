


<?php 
$eidn = $date_hired = $department = $position = $status = $family_name = $first_name = $middle_name = $contact_number = $email_address = $birthday = $religion = $address 
= $weight = $tin_number = $pagibig_number = $height = $sss_number = $philhealth_number = $civil_status = $spouse_name = $spouse_birthday = $spouse_number = $spouse_email
= $spouse_occupation = $children = $elementary = $elementary_address = $elementary_graduate_year =  $secondary =  $secondary_address = $secondary_graduate_year 
= $tertiary = $tertiary_address =  $course = $tertiary_graduate_year = $emergency_name = $emergency_address = $emergency_relationship = $emergency_number = '';
if($_SERVER["REQUEST_METHOD"] === "POST"){
                if(empty($_POST["eid"])){
                    $eidnErr = "Name is required "; 
                }else{
                    $eidn = $_POST["eid"];
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
                if($eidn && $date_hired && $department &&$position && $status && $family_name && $first_name && $middle_name && $contact_number && $email_address && $birthday && $religion && $address && $weight && $tin_number && $pagibig_number && $height && $sss_number && $philhealth_number && $civil_status && $spouse_name && $spouse_birthday && $spouse_number && $spouse_email && $spouse_occupation && $children && $elementary && $elementary_address && $elementary_graduate_year &&  $secondary &&  $secondary_address && $secondary_graduate_year && $tertiary && $tertiary_address &&  $course && $tertiary_graduate_year &&$emergency_name && $emergency_address && $emergency_relationship && $emergency_number){
 
                    $check_eid = mysqli_query($connections, "SELECT * FROM employee WHERE eid='$eid' ");
                    $check_email_row = mysqli_num_rows($check_eid);
            
                    if($check_email_row > 0 ){
                        // echo "<script language=javascript>alert('EID Already registered');</script>";
                        $errEmail = 'Already registered';
            
                    }else{
                        $query = mysqli_query($connections, " INSERT INTO mytbl(eidn, date_hired, department,position, status, family_name, first_name, middle_name, contact_number, email_address, birthday, religion, address, weight, tin_number, pagibig_number, height, sss_number, philhealth_number, civil_status, spouse_name, spouse_birthday, spouse_number, spouse_email, spouse_occupation, children, elementary, elementary_address, elementary_graduate_year,  secondary,  secondary_address, secondary_graduate_year, tertiary, tertiary_address,  course, tertiary_graduate_year,emergency_name, emergency_address, emergency_relationship, emergency_number)
                        VALUES('$eidn', '$date_hired', '$department','$position', '$status', '$family_name', '$first_name', '$middle_name', '$contact_number', '$email_address', '$birthday', '$religion', '$address', '$weight', '$tin_number', '$pagibig_number', '$height', '$sss_number', '$philhealth_number', '$civil_status', '$spouse_name', '$spouse_birthday', '$spouse_number', '$spouse_email', '$spouse_occupation', '$children', '$elementary', '$elementary_address', '$elementary_graduate_year', ' $secondary',  '$secondary_address', '$secondary_graduate_year', '$tertiary', '$tertiary_address',  '$course', '$tertiary_graduate_year','$emergency_name', '$emergency_address', '$emergency_relationship', '$emergency_number')");
           
                        echo "<script language=javascript>alert('New record inserted');</script>";
                        echo "<script>window.location.href='index.php'</script>";
                    }
                    
                   
            
                   }

 
    }
?>








$uploadErr ='';
        $target_dir = "photo_folder/";
        $target_file = $target_dir . "/" . basename($_FILES["img"]["name"]);
        $uploadOk = 1;
        if(file_exists($target_file)){
            $target_file = $target_dir .rand(1,9) . rand(1,9) . rand(1,9) . rand(1,9) . "_" . basename($_FILES["img"]["name"]);
            $uploadOk = 1;
        }
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        if($_FILES['[img']['size'] > 500000000000000){
            $uploadErr = "File too large";
            $uploadOk = 0;
        }

        if($imageFileType  != 'jpg' && $imageFileType != 'jpeg' && $imageFileType != 'png' && $imageFileType != 'gif'){
            $uploadErr = 'Image only';
            $uploadOk = 0;
        }
        if( $uploadOk === 1){
            if(move_uploaded_file($_FILES['profile_pic']['tmp_name'], $target_file)){
                
                // mysqli_query($connections, "UPDATE")
            }else{
                echo "Error uploading files";
            }
        }




        https://phpcoder.tech/user-login-registration-system-in-php-with-image-upload/





        mysqli_query($connections, 
    "UPDATE emptbl SET 
    eid ='$new_eid', 
    date_hired ='$date_hired', 
    department ='$department', 
    position = '$position',
    status = '$status',
    family_name = '$family_name', 
    first_name ='$first_name', 
    middle_name = '$middle_name', 
    contact_number = '$contact_number' 
    email_address = '$email_address', 
    birthday = '$birthday', 
    religion = '$religion', 
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
    emergency_number='$emergency_number', 
    img = '$img',
    WHERE id='$emp_id'");




    https://www.sourcecodester.com/tutorials/php/12362/php-how-print-document.html