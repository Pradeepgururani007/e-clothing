<?php
    session_start();
    require ("header.php");
    require ("dbconnect.php");

//men
  if(isset($_POST['sub1'])){
    $style=$_POST['graph'];
    $str1=$style;

  } 
  if(isset($_POST['sub2'])){
    $style=$_POST['vn'];
    
  }
   if(isset($_POST['sub3'])){
    $style=$_POST['rn'];
    
  }
     if(isset($_POST['sub4'])){
    $style=$_POST['sol'];
    
  }
   if(isset($_POST['sub5'])){
    $style=$_POST['sols'];
    
  }
   if(isset($_POST['sub6'])){
    $style=$_POST['chks'];
    
  }
   if(isset($_POST['sub7'])){
    $style=$_POST['pris'];
    
  }
   if(isset($_POST['sub8'])){
    $style=$_POST['dens'];
    
  }
   if(isset($_POST['sub9'])){
    $style=$_POST['rgp'];
    
  }
   if(isset($_POST['sub10'])){
    $style=$_POST['fasp'];
    
  }
   if(isset($_POST['sub11'])){
    $style=$_POST['solip'];
    
  }
   if(isset($_POST['sub12'])){
    $style=$_POST['pritp'];
    
  }
   if(isset($_POST['sub13'])){
    $style=$_POST['mchin'];
    
  }
   if(isset($_POST['sub14'])){
    $style=$_POST['mden'];
    
  }
   if(isset($_POST['sub15'])){
    $style=$_POST['mshrt'];
    
  }
   if(isset($_POST['sub16'])){
    $style=$_POST['frmp'];
    
  }
   if(isset($_POST['sub17'])){
    $style=$_POST['mpull'];
    
  }
   if(isset($_POST['sub18'])){
    $style=$_POST['mjack'];
    
  }
   if(isset($_POST['sub19'])){
    $style=$_POST['mblaz'];
    
  }
   if(isset($_POST['sub20'])){
    $style=$_POST['mswst'];
    
  }


//women


  if(isset($_POST['sub21'])){
    $style=$_POST['wtop'];
    
  }
  if(isset($_POST['sub22'])){
    $style=$_POST['wtee'];
    
  }
  if(isset($_POST['sub23'])){
    $style=$_POST['wdress'];
    
  }
  if(isset($_POST['sub24'])){
    $style=$_POST['wpnts'];
    
  }
  if(isset($_POST['sub25'])){
    $style=$_POST['wpulovs'];
    
  }
  if(isset($_POST['sub26'])){
    $style=$_POST['wblaz'];
    
  }
  if(isset($_POST['sub27'])){
    $style=$_POST['wswt'];
    
  }
  if(isset($_POST['sub28'])){
    $style=$_POST['wjack'];
    
  }


//girls


  if(isset($_POST['sub29'])){
    $style=$_POST['gtop'];
    
  }
  if(isset($_POST['sub30'])){
    $style=$_POST['gtee'];
    
  }
  if(isset($_POST['sub31'])){
    $style=$_POST['gdress'];
    
  }
  if(isset($_POST['sub32'])){
    $style=$_POST['gpnts'];
    
  }
  if(isset($_POST['sub33'])){
    $style=$_POST['gpulovs'];
    
  }
  if(isset($_POST['sub34'])){
    $style=$_POST['gblaz'];
    
  }
  if(isset($_POST['sub35'])){
    $style=$_POST['gswt'];
    
  }
  if(isset($_POST['sub36'])){
    $style=$_POST['gjack'];
    
  }


//boys


  if(isset($_POST['sub37'])){
    $style=$_POST['bgraph'];
    
  }
  if(isset($_POST['sub38'])){
    $style=$_POST['bvn'];
    
  }
  if(isset($_POST['sub39'])){
    $style=$_POST['brn'];
    
  }
  if(isset($_POST['sub40'])){
    $style=$_POST['bsol'];
    
  }
  if(isset($_POST['sub41'])){
    $style=$_POST['bsols'];
    
  }
  if(isset($_POST['sub42'])){
    $style=$_POST['bchks'];
    
  }
  if(isset($_POST['sub43'])){
    $style=$_POST['bpris'];
    
  }
  if(isset($_POST['sub44'])){
    $style=$_POST['bdens'];
    
  }
  if(isset($_POST['sub45'])){
    $style=$_POST['brgp'];
    
  }
  if(isset($_POST['sub46'])){
    $style=$_POST['bfasp'];
    
  }
  if(isset($_POST['sub47'])){
    $style=$_POST['bsolip'];
    
  }
  if(isset($_POST['sub48'])){
    $style=$_POST['bpritp'];
    
  }
  if(isset($_POST['sub49'])){
    $style=$_POST['bden'];
    
  }
  if(isset($_POST['sub50'])){
    $style=$_POST['bchin'];
    
  }
  if(isset($_POST['sub51'])){
    $style=$_POST['bshrt'];
    
  }
  if(isset($_POST['sub52'])){
    $style=$_POST['bfrmp'];
    
  }
  if(isset($_POST['sub53'])){
    $style=$_POST['bpull'];
    
  }
  if(isset($_POST['sub54'])){
    $style=$_POST['bjack'];
    
  }
  if(isset($_POST['sub55'])){
    $style=$_POST['bblaz'];
    
  }
  if(isset($_POST['sub56'])){
    $style=$_POST['bswst'];
    
  }

?>

<br><HR>
<!DOCTYPE html>
  <html lang="en">
    <head>
  
  <style type="text/css">
  .bt
  {
    color: #133913;
  }

    .sidebar{

      text-align: center;

    }

    .ul li label {

      border-style: solid 2px;

    }

    .rounded {
      
      width: 50%;
      height:0;
      padding-bottom: 90%;
      border-radius: 50% ;
      opacity: 1;
      
  
  }
  .round{

      border-style: solid;
  }
  .col-sm-2{

      border: 2px ;

  }
  .price{

    margin: 10px auto;
    widows: 30px;
    word-spacing: 50px;
  }
      
  </style>

  <?php

    ?>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <script src="e-clothing/jquery-1.12.3.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      
      <script type="text/javascript">

        function show_value(x)
          {
           document.getElementById("slider_value").innerHTML=x;
          }

          $(document).ready(function(){
              $('[data-toggle="tooltip"]').tooltip(); 
          });
      </script>

      <body style>

          <div class="container">

       
              <div class="col-sm-12">

                  <div class="row">
         
                                    <?php              
                                        $res= $pdo->query($style);
                                        $res->setFetchMode(PDO::FETCH_ASSOC);
                                        while($r = $res->fetch())            
                                        {

                                         ?>
                                         <div class="col-sm-3 thumbnail responsive" style="background-color:#EEEEEE;"> 
                                                <?php echo'<form method="post" action="cloth.php">
                                                              <a href="#" data-toggle="tooltip" data-placement="top" title="click to see product">
                                                              <button class="btn-success" name="pdid" value="select * from product where p_id ='.$r['p_id'].'">
                                                              
                                                              
                                                              </a>
                                                           </form>'; 
                                          
                                                echo'<img style="height:200px" src="data:image;base64,'.$r['image1'].'"';
                                            
                                            
                                          ?>
                  
                                          <label class="price">&nbsp;&nbsp;<h4>price</h4></label> <p style="color:#109910 ; text-align:right; font-size:17px; font-family:verdana"><b><input type="text" name="prc" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $r['price']; ?>" style="border:0"></B></p>
                                          <label class="price">&nbsp;&nbsp;<h4>size</h4></label><p style="color:#109910 ; text-align:center; font-size:17px; font-family:verdana"><B><input type="text" name="sz" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $r['size'] ;?>" style="border:0"></B></p>
                                         
                                          

                                      </div>

                                      <?php
                                        

                                          }

                                      ?> 

                                
                                  </div>
                     
                      </div>
                     
                      </div> 
           
                  <nav>
                    <HR>
                   
                  </nav>

              </div>

            </div>

          </div>

        </div>

      </body>

    </head>
  </html>

  <br><br>
<?php    
    require ("footer.php");
  
?>

