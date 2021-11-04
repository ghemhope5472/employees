<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

  <div class="row">

    <div class="left-part">
    </div>


    <?php
        $username = $password = '';
        $errUsername = $errPassword = '';

        if($_SERVER["REQUEST_METHOD"] === "POST"){
            if(empty($_POST['username'])){
                $errUsername = "Username required";
            }else{
                $username = $_POST['username'];
            }
            if(empty($_POST['password'])){
                $errPassword = "Password error";
            }else{
                $password = $_POST['password'];
            }
            if($username && $password){
                include('connections.php');

                $check_account = mysqli_query($connections,  "SELECT * FROM mytbl where username='$username' ");
                $check_account_rows = mysqli_num_rows($check_account);
                if($check_account_rows > 0){
                    while($row = mysqli_fetch_assoc($check_account)){
                        $user_id = $row['id'];
                        $db_username = $row['username'];
                        $db_password = $row['password'];
                        $db_account_type = $row["account_type"];

                        if($password === $db_password){
                            session_start();
                            $_SESSION['id'] = $user_id;
                            if( $db_account_type == 1){
                                date_default_timezone_set('Asia/Manila');
                                $date = date('m/d/Y h:i:s a', time());

                                $sql = "INSERT INTO logs (user,action,time)VALUES('$db_username','Login in','$date')";
                                $result = mysqli_query($connections, $sql);
                    
                                echo "<script>window.location.href='admin';</script>";
                            }else{
                                echo "<script>window.location.href='user';</script>";
                            } 
                        }else{
                            $errPassword ="Password Incorrect";
                        }
                    }
                }

            }
        }


?>

    <div class="right-part">
        <div class="form">
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])  ?>" method="POST">
            <input type="text" name="username" placeholder="Username" autocomplete='off' value="<?php echo $username;  ?>"> <br>
            <span class="error"> <?php echo $errUsername ?> </span><br>
            <input type="password" name="password"  placeholder='Password' value="<?php echo $password;  ?>"> <br>
            <span class="error"> <?php echo $errPassword ?> </span><br>
            <button type="submit"> Login </button>
            </form>
        </div>
    </div>

  </div>


    
</body>
</html>