<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="author">
  <link href="" rel="shortcut icon">

  <title>Sign-in </title><!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet"><!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

  <style type="text/css">


    .container{

      max-width: 400px;
    }

    .h2{

      font-color: #fff;
     
     } 

    .form-signin-heading{

        font-color: white;      

     }

     .modal-body{
      
      height: 600px;
      background-color: ;
      border-radius: 10px;


     }
     .modal-header{

      background-color: #339966;
      border-radius: 4px; 
     }
    
  </style>
</head>

      <?php 
      session_start();

      if(isset($_POST['op'])){
        $style=$_POST['pid'];
        
        $p_mode=$_POST['op'];
        $_SESSION['p_id']=$style;
        $_SESSION['o_p']='o_p';

      }

       if(isset($_POST['cod'])){
        $style=$_POST['pid'];
        

        }
      
        if (isset($_POST['signin']));
        {
           require("dbconnect.php");
           @$email=$_POST['email'];
           @$password=$_POST['password'];
            
           // connectivity to MySQL server
            $sql = "SELECT * FROM customer WHERE `email` ='$email' and `password`='$password'";
            $stmt   = $pdo->prepare($sql);
            $result = $stmt->execute();
            $user   = $stmt->fetch(PDO::FETCH_ASSOC);
          

            if ($user['email']==true)              
            {

                   echo 'login correct';
                   @$_SESSION['cust_id']=$rows['c_id'];
                   header('location:onlinepay.php');
                    
            }
            else
            {
                

                echo "<script>alert('Please insert correct username and password');</script>";
                //header("Location: login.php");
            }           
        } 

         if(isset($_POST['cname'])){
            require ("dbconnect.php");
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $address=$_POST['address'];
            $email=$_POST['email'];
            $mobile_no=$_POST['mobile'];
            $password=$_POST['pass'];
            $_SESSION['cust_id']=$fname;                               

            try {
                  $dbh = new PDO('mysql:host=localhost;dbname=e_clothing', 'root', '');

                  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
                  $sql = "INSERT INTO customer(c_id,fname,lname,address,email,mobile_no,password)
                  VALUES ('','".$fname."','".$lname."','".$address."','".$email."','".$mobile_no."','".$password."')";
                  if ($dbh->query($sql)) {
                  echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
                  header("Location: onlinepay.php");
                  }
                  else{
                  echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
                  }

                  $dbh = null;
                }
            
            catch(PDOException $e){
                  echo $e->getMessage();
                }  
        }

    ?>  

<body>
  <div class="container">
    <form method="POST" name="mform" action="<?php echo $_SERVER['PHP_SELF']?>">
      <h2 class="form-signin" style="color:white;">Please sign in</h2><br>

      <input autofocus="" class="form-control" placeholder="Email address" type="text" name="email"><BR> <BR>
      <input class="form-control"placeholder="Password" type="password" name="password"> <BR><BR>      
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="signin">Sign in</button> <BR>
      <label><a data-target="#EditBasicInfo"data-toggle="modal" href="" title="Click here to register" style="color:339966;">Not Registered?</a></label><BR>
    
    </form>     <!-- Modal -->
  
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
      <div class="rows">
        <div class="col-xs-12">
          <div class="modal fade" id="EditBasicInfo">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal" type="button" style="color:white;" title="close">X</button>

                  <h1 class="modal-title" id="myModalLabel" style="color:#fff; font-family:verdana;" align="center">Registration Form</h1>
                </div>

                <div class="modal-body">

                  <form method="POST" action="onlinepay.php"> 

                     <div class="form-group" >
                        <div class="rows">
                            <div class="col-md-12">
                              <div class="col-lg-12">
                                <input class="form-control input-lg text" maxlength="20" name="fname" placeholder="First Name" type="text"><BR><BR>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="rows">
                            <div class="col-md-12">
                              <div class="col-lg-12">
                                <input class="form-control input-lg text" maxlength="20" name="lname" placeholder="Last Name" type="text"><BR><BR>
                              </div>
                            </div>
                          </div>
                        </div>
  
                        <div class="form-group">
                        <div class="rows">
                            <div class="col-md-12">
                              <div class="col-lg-12">
                                <input class="form-control input-lg text" maxlength="80" name="address" placeholder="Address" type="address"><BR><BR>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="rows">
                            <div class="col-md-12">
                              <div class="col-lg-12">
                                <input class="form-control input-lg text" maxlength="30" name="email" placeholder="Email Address" type="email"><BR><BR>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="rows">
                            <div class="col-md-12">
                              <div class="col-lg-12">
                                <input class="form-control input-lg num" maxlength="10" name="mobile" placeholder="Mobile.." ><BR><BR>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="rows">
                            <div class="col-md-12">
                              <div class="col-lg-12">
                                <input class="form-control input-lg text" maxlength="15" name="pass" placeholder="Password" type="password"><BR><BR>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="rows">
                            <div class="col-md-12">
                              <div class="col-lg-12">
      
                                  <input type="submit"  name="cname" value="Register" class="btn btn-lg btn-success btn-block" >

                              </div>
                            </div>
                          </div>
                        </div>
                        
                   </div>
                
        </form>        

        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </form>
  </div><!-- /.modal -->
  </div>
</div>
  <script src="assets/js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>