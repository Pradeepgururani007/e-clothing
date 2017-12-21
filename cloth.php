<?php
    session_start();
    require ("header.php");
    require ("dbconnect.php");  
 
  if (isset($_POST['pdid'])) {

     $style=$_POST['pdid']; 
    
    
 }
 
  if (isset($_POST['cod'])) {
    
    header("Location:login.php");
    exit;
  }

?>

<br><br><br>
<!DOCTYPE HTML>
<html>
<head>
  <style type="text/css">

   .col-sm-2 img {
      max-height: 170px;
      max-width:127px;

     } 
    .col-sm-8 img {

      max-height: 480px;

    } 
    .row-label{

      text-align:left;
      color: #339966;
      font-size:30px; 

    }
    .col-label{

      text-align: right;
      font-size: 20px;

    }
    .container-fluid col-sm-4{

      border: 2px solid;
      border-color: #339966;

    }

    .body{

      font-family: verdana;
    }
 
    .enlarge:hover{

        height: 700px;
        width:700px;

    }

  </style>

  <body>
                                
      <div class="container">

                <div class="col-sm-8">

                         <?php 

                            $res = $pdo->query($style);
                            $res->setFetchMode(PDO::FETCH_ASSOC);
                            while($r = $res->fetch())
                            {  
                        ?>  

                        <div class="row"><BR><BR><BR></div>

                        <div class="row">        
                               <div  class="col-sm-3 thumbnail-responsive">
                                
                                  <?php echo'<img  class="enlarge" style="height:490px; width:180px;" src="data:image;base64,'.$r['image1'].'"';?><BR>
                                
                              </div>
                           
                               <div class="col-sm-3 thumbnail-responsive">
                                
                                  <?php echo'<img class="enlarge" style="height:490px; width:180px;"  src="data:image;base64,'.$r['image2'].'"';?><BR>
                                

                              </div>
                                               
                               <div class="col-sm-3 thumbnail-responsive">
                                
                                  <?php echo'<img class="enlarge" style="height:490px;width:180px;"  src="data:image;base64,'.$r['image3'].'"';?><BR>
         
                              </div>
                             
               
                               <div class="col-sm-3 thumbnail-responsive">
                                
                                  <?php echo'<img class="enlarge"style="height:490px;width:180px;" src="data:image;base64,'.$r['image4'].'"';?><BR>
                                

                              </div>

                        </div>
                        
                  </div> 

                   <div class="col-sm-4">

                           <span><label for="price" class="row-label">Price-</label></span>
                           <span><label for"price" class="col-label" >Rs. &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $r['price']; ?></label></span><BR><HR>

                           <span><label for="price" class="row-label">Type-</label></span>
                           <span><label for"price" class="col-label">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $r['style'];?></label></span>

                           <HR>
                           <div class="th">
                            <p style="font-size:30px;color:#339966;font-family:verdana"><B> Buy Now</B></p><bR>
                            <a href="cust_login.php">
                             
                              <form method="POST" action="cust_login.php"><input type="hidden" name="pid" value="<?php  echo $r['p_id']; ?>" >

                                <input type="submit" name="op" value="Pay Online" class="btn btn-primary btn-lg btn-block btn-success" >
                              
                              </form></a> <HR><hR><HR>   
                            
                             <form method="POST" action="cust_login.php"> <input type="hidden" name="pid" value="<?php  echo $r['p_id']; ?>" >
                              <input type="submit" name="cod"  class="btn btn-primary btn-lg btn-block" .onclick="<?php $_SESSION['c_o_d']='c_o_d';?>" value="Cash On Delivery"><HR><HR><BR><HR>
                             </form>   
                              <?php } $fid=$r['p_id'];?>  
                             <button type="button" class="btn btn-primary btn-lg btn-block btn-success" .onclick="<?php $_SESSION['fid']=$fid;?>"><span class="glyphicon glyphicon-heart" style="font-size:50px;"></span> <BR>add to favourites</button></a>
                        
                            </div>
            

                  </div>      

        </div>
       
  </body>
  </html> 
<BR><br><br><br><br><HR>
<?php    
    require ("footer.php");

?>