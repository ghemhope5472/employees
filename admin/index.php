<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Employee Information </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="css/responsive-style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <header>    
        <div class="desktop" >
            <div class="menuDiv" onclick="menuShow(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>


        <div class="mobile" >
            <div class="menuDiv" onclick="menuShow2(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>    
                <div class="bar3"></div>
            </div>
        </div>


      
        <p> Employees Information System </p>
      
    </header>



    <nav id="nav">

        <!-- SCRIPT -->
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
            include('side-nav.php');
        ?>

    <!-- SCRIPT -->
       
    </nav>

    <div id="main">
        <h1> Dashboard </h1>
        <hr>

        <div class="info-wrapper">
                <div class="info-box">
                   <h3 style="color: floralwhite;margin-top:10px;"> Employees Count </h3>
                            <h1>45</h1>
                </div>
                <div class="info-box">
                <h3 style="color: floralwhite;margin-top:10px;"> Employees Count </h3>
                            <h1>45</h1>
                </div>
        </div>
    </div>

    

    <script src="js/responsive.js"></script>
</body>
</html>