

<?php
    $connections = mysqli_connect("localhost","root", "", "stratadb");

    if(mysqli_connect_errno()){
        echo "Failed to connect to database: " . mysqli_connect_error();
    } 

?>