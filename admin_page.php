<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/admin.css" rel="stylesheet">

   <title>Admin Page</title>

     <script type="text/javascript">

            function check()
            {
                if (!submit.img1.value)
                {
                    alert ("Please Enter a File Name");
                    return (false);
                }
                return (true);
            }

        </script>


  </head>
<!--data insert-->
    <?php          
       require("dbconnect.php");

       if(isset($_POST['submit']))
       {
            try
            {
                $size=$_POST['size'];
                $discount=$_POST['discount'];
                $prodate=$_POST['prodate'];
                $brand=$_POST['brand'];
                $style=$_POST['style'];
                $price=$_POST['price'];                                 
                $color=$_POST['color'];
                $category=$_POST['category'];
                $type=$_POST['type'];    
              
                $img1=addslashes($_FILES['img1']['tmp_name']);
                $img1=file_get_contents($img1);
                $img1=base64_encode($img1);

                $img2=addslashes($_FILES['img2']['tmp_name']);
                $img2=file_get_contents($img2);
                $img2=base64_encode($img2);

                $img3=addslashes($_FILES['img3']['tmp_name']);
                $img3=file_get_contents($img3);
                $img3=base64_encode($img3);

                $img4=addslashes($_FILES['img4']['tmp_name']);
                $img4=file_get_contents($img4);
                $img4=base64_encode($img4);

                  $insert= "insert into product(p_id,size ,image1 ,image2,image3,image4,discount,date,brand,style,price,color,category,type)values('','".$size."','".$img1."','".$img2."','".$img3."','".$img4."','".$discount."','".$prodate."','".$brand."','".$style."','".$price."','".$color."','".$category."','".$type."')";
        
                  if ($pdo->query($insert)) 
                  {
                  echo '<script>alert("inserted successful");</script>';
                  }
                 

              $pdo=null;

            }
           catch(PDOException $e)
            {
            echo $e->getMessage();
            }
            
        }
          

    ?>  

  <body>
          <!---->
        <nav class="navbar navbar-default navbar-fixed-top">
                <a class="navbar-brand" href="site.php"><h4>e-clothing</h4></a>
                <form role="form" class="navbar-form navbar-right">
                  <div class="form-group">

                   <!-- <input type="text" class="form-control" placeholder="looking for....">-->
                  </div>
                     <!--<button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-search"></button>-->
                    <a href="site.php" class="btn btn-dafault  btn-lg "><span class="glyphicon glyphicon-home"></span></a>
                    <a href="login_page.php"class="btn btn-dafault"><span class="glyphicon glyphicon-log-out"><br>Sign-out</span></a>
                </form>
                
              <!---->      
        
        </nav>
        
        <br>
        <br> 
        <br> 
        
        <div class="row">
          <!--col-1-->  

          <div id="seecloths" class="col-sm-2 "> 
              
          
                <a href="content.php"class="btn btn-inverse btn-lg"><span class="glyphicon glyphicon-eye-open"><br>See cloths </span></a>

          </div>
            <!--col-2-->    

          <div class="col-sm-10"><br>
    
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
              
                <div class="form-group" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" >
                  
                      <label for="type" class="col-sm-1 control-label">Type</label>
                        <div class="col-sm-2">
                          <select class="form-control" name="type">

                            <?php

                            $qry='SELECT Type from type';
                            $res = $pdo->query($qry);
                            $res->setFetchMode(PDO::FETCH_ASSOC);
                            while($r = $res->fetch()) {

                                  echo'<option>'.$r['Type'].'</option>';

                              }

                            ?>
                          </select>
                        </div>  
                      
                      <label for="p_type" class="col-sm-1 control-label">category</label>  
                        <div class="col-sm-2">
                          <select class="form-control" name="category">
                            <option>M</option>
                            <option>W</option>
                            <option>B</option>
                            <option>G</option>
                
                          </select>
                        </div>
                      <label for="style" class="col-sm-1 control-label">style</label> 
                        <div class="col-sm-2">
                          <select class="form-control" name="style">
                            <?php

                                 $qrysty='SELECT * from style';
                                 $resu = $pdo->query($qrysty);
                                 $resu->setFetchMode(PDO::FETCH_ASSOC);
                             
                                 while($sty = $resu->fetch()) 
                                 {

                                  echo'<option>'.$sty['Style'].'</option>';

                                 }

                            ?>
                                                       
                            
                          </select>
                        </div>
                      <label for="color" class="col-sm-1 control-label">color</label>
                          <div class="col-sm-2">
                            <select class="form-control" name="color">

                                <?php

                                  $qrycol='SELECT Color from color';
                                  $rescol = $pdo->query($qrycol);
                                  $rescol->setFetchMode(PDO::FETCH_ASSOC);
                                  while($rcol = $rescol->fetch()) {

                                        echo'<option>'.$rcol['Color'].'</option>';

                                    }

                                ?>
                          </select>
                        </div><BR><BR>
                        <HR>
                        
                         <label for="size" class="col-sm-1 control-label">size</label>  
                        <div class="col-sm-2">
                          <select class="form-control" name="size">
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                            <option>XXL</option>
                          </select>
                        </div>
                        <label for="brand" class="col-sm-1 control-label">brand</label>  
                        <div class="col-sm-2">
                          <select class="form-control" name="brand">
                              
                              <?php

                                      $qryb='SELECT Brand from brand';
                                      $resb = $pdo->query($qryb);
                                      $resb->setFetchMode(PDO::FETCH_ASSOC);
                                      while($rb = $resb->fetch()) {

                                      echo'<option>'.$rb['Brand'].'</option>';

                                      }
                              ?>

                          </select>
                        </div>
                          
                        <label for="date" class="col-sm-1 control-label">date</label>  
                        <div class="col-sm-2">
                        <input type="date" name="prodate">
                        
                        </div>

                        <label for="discount" class="col-sm-1 control-label">discount</label>  
                        <div class="col-sm-2">
                        <input type="text" maxlength="2" name="discount" required> 
                        </div>
                        <br>
                        <BR>
                          <HR>
                        <label for="price" class="col-sm-1 control-label">price</label>  
                        <div class="col-sm-2">
                        <input type="text" maxlength="4" name="price" required> 
                        </div>
            
                        <div class="col-sm-6"></div>
                        <HR>
                        <br>
                       
                       <HR>
                       <label for="images" class=" control-label">select pictures</label><HR>
                          
                        <div class="row">  
                          
                          <div class="col-sm-2">
                             <label for="images" class=" control-label">image1</label><HR>

                                  <input type="file" name="img1">
                            
                          </div>  
            
                  
                          <div class="col-sm-2">

                                  <label for="images" class=" control-label">image2</label><HR>

                                  <input type="file" name="img2">
                                  
                          </div>  
                          
                          <div class="col-sm-2">

                                  <label for="images" class=" control-label">image3</label><HR>

                                  <input type="file" name="img3">
                                  
                          </div>  
      

                          <div class="col-sm-2">

                                  <label for="images" class=" control-label">image4</label><HR>  

                                  <input type="file" name="img4">
                                 
                          </div> 

                        </div>     
                        <BR>
                        <HR>
                        <br>
                        <br>       

                            <div class="col-sm-12"> <input class="btn btn-primary btn-lg btn-block btn-success" style="width:1000px;" type="submit" value="submit" name="submit"></div>
                         
            
                  </div> 
                    
            </form>      

        </div>

        

      
    </div>
    <BR><BR><BR><BR><BR><BR><BR><BR>
    <div class="footer">  
        <footer class="footer" ><HR>
                  <p>&copy:2016 All Rights Reserved</p>
          </footer>

      </div>    
  </body>


</html>