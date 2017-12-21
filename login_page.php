<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login</title>

    <link href="css/login.css" rel="stylesheet">
    <script src="js/prefixfree.min.js"></script>

</head>
    <?php 
    
        if(isset($_POST['login']))
        {
            require ("dbconnect.php");
            @$username=$_POST['user'];
            @$password=$_POST['password'];
                //username and password from the user
            $sql = "SELECT * FROM admin WHERE `u_name` ='$username' and `password`='$password'";
            $stmt   = $pdo->prepare($sql);
            $result = $stmt->execute();
            $user   = $stmt->fetch(PDO::FETCH_ASSOC);
          

            if (($user['u_name']==true)||$user['hint']=="p007")              
            {

                   echo 'login correct';
                    header('location:admin_page.php');
                    $year = time() + 31536000;
                    setCOOKIE('remember_me', $_POST['user'], $year);
            }
            else
            {
                

                echo "<script>alert('Please insert correct username and password');</script>";
                //header("Location: login.php");
            }
        }

    ?>  



<body>

 
    <p style="color:white;font-size:50px; text-align:center">Please Login</p> 
 
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">   

        <div class="login">

            <input type="text" placeholder="username" name="user" value="<?php
            echo $_COOKIE['remember_me'];?>"><br><br>
            <input type="password" placeholder="password" name="password"><br><br>
            <div class="checkbox">
                <label>
                    <input name="remember" type="checkbox" <?php if(isset($_COOKIE['remember_me'])) {
                                                                echo 'checked="checked"';
                                                            }
                                                            else {
                                                                echo '';
                                                            }
                                                            ?> >Remember Me
                </label>

            </div><br>   
            <input type="submit" value="Login" name="login"><br>
             <p style="color:white;font-size:20px; text-align:left">Forgot password..??</p> 
            <form action="<?php echo $_SERVER['PHP_SELF']?>">
                    <input type="email" placeholder="enter password hint.." name="hint">
                    <input type="button" value="Go">
            </form>
      
        </div>

    </form> 
</body>

</html>