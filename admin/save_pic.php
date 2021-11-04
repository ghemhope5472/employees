<?php

    include("../connections.php");

    $emp_id = $_POST['emp_id'];
  
    

    move_uploaded_file($_FILES['img']['tmp_name'], "../photo_folder/".$_FILES['img']['name']);
    
    
        $img_new="../photo_folder/".$_FILES['img']['name'];

        mysqli_query($connections, "UPDATE emptbl SET img='$img_new' WHERE id='$emp_id'");

        echo "<script language=javascript>alert('New record inserted');</script>";
 
        echo "<script>window.location.href='list_employees.php'</script>";

    
 
?>  


