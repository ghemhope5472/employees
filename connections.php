

<?php
    $connections = mysqli_connect("localhost","root", "", "sampledb");

    if(mysqli_connect_errno()){
        echo "Failed to connect to database: " . mysqli_connect_error();
    } 

?>