<link rel="stylesheet" href="css/responsive.css">

<div class="side-nav">




            <div class="nav">
               <a href="index.php" >
               <div class="item active"><img src="../icons/presentation copy.png" alt="icon" class='icon' width='30px' style='margin-right: 2rem;'> Dashboard </div>
               </a>
               <a href="list_employees.php">
               <div class="item"><img src="../icons/portfolio copy.png" alt="icon" class='icon' width='30px' style='margin-right: 2rem;'> Employees </div>
               </a>
               <a href="logs.php">
               <div class="item" style='margin-bottom:2rem;'><img src="../icons/folder copy.png" alt="icon" class='icon' width='30px' style='margin-right: 2rem;'> Logs </div>
               </a>
            

               <div class="item" style='margin-top:20rem;'> Logged in as -  <?php  echo $db_username; ?> </div>
               <a href="logout.php">
               <div class="item" ><img src="../icons/logout copy.png" alt="icon" class='icon' width='30px' style='margin-right: 2rem;'> Logout  </div>
               </a>
            </div>

          

        </div>


        <script src="js/responsive.js"></script>