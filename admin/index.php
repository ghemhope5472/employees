

<?php
    include('partials/header.php');
?>



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

    <!-- SCRIPT -->   



<section id='top-nav'>
   
    <div class="desktop-view">

        <div class="btn-desktop" onclick="showMenu()">
            <img class='menu-img' src="../icons/hamburger.png" alt="menu"  width="35px">
        </div>

        
    </div>
    <div class="logout-btn">
      <span class="btn btn-danger"><img src="../icons/user.png" alt="user" width="20px"> <?php echo $db_username; ?>  </span>
      <button type="button" id="example" class="btn btn-danger">Logout</button>
    </div>
   

    <div class="mobile-view">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Employees System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
                </li>


                <li class="nav-item active dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Employees
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Add Employee</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">List of Employees</a>
                  </div>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">Logs <span class="sr-only">(current)</span></a>
                </li>
                <div class="dropdown-divider"></div>
              

                  <li class="nav-item active">
                    <a class="nav-link btn btn-primary"  href="#">Logout  <span class="sr-only">(current)</span></a>
                  </li>
               
 
              </ul>

            </div>
          </nav>
    </div>

    

</section>


<!-- REPLACE -->
<section id='container'>
    <nav class="side-nav" id="side-nav">
        <div class="logo">
            <img class='logo-img' src="../icons/logo.png" alt="logo" width="100px">
        </div>
        <p class="lead">Employee Records System</p>
        <div class="links">
            <ul> 
              <li> <img src="../icons/speedometer.png" class="link-img" alt="dashboard" width="20px"> <a href="index.php">Dashboard</a> </li>
              <li><img src="../icons/information.png" class="link-img" alt="dashboard" width="20px"><a href="list_employees.php">Employees</a></li>
              <li><img src="../icons/file.png" class="link-img" alt="dashboard" width="20px"><a href="#">Log</a></li>
            </ul>
        </div>
    </nav>


 <main id="content">
          <div class="container mt-4">
               <div class="row">
                   <div class="col-12 col-sm-4 mb-4">
                    <div class="card mr-4" style="width: 20rem;">
                        <img class="card-img-top" src="https://www.bravowell.com/hubfs/benefits-blog-article-feature.jpg" alt="Card image cap">
                        <div class="card-body" style="color: black;">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                   </div>

                   <div class="col-12 col-sm-4 mb-4">
                    <div class="card mr-4" style="width: 20rem;">
                        <img class="card-img-top" src="https://www.bravowell.com/hubfs/benefits-blog-article-feature.jpg" alt="Card image cap">
                        <div class="card-body" style="color: black;">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                   </div>
               
                   
               </div>

          </div>
 </main>


</section>

<!-- REPLACE END -->



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    var contentDiv = document.getElementById('content');
    var sideNav = document.getElementById('side-nav');



function showMenu(){
    contentDiv.classList.toggle('content-active')
    sideNav.classList.toggle('sidenav-active')
    
}

function mobileView(){

    sideNav.classList.toggle('mobile-active');
    console.log('cecel')
}   
</script>