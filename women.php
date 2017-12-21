<?php
    session_start();
    require("header.php");
?>

<br><br><br>
<!DOCTYPE html>
  <html lang="en">
    <head>
  
      <body>

          <div class="container-fluid">

              <form method="POST" action="content.php">

                  <div class="col-sm-12">
                        
                        <div class="row">
                          <B><pre style="background-color:#109910 ;color:white; text-align:center; font-size:20px; font-family:calibri">WESTERN-WEAR</pre></B><HR>  
                            
                  
                              <div class="col-sm-3 ">
                                  
                                       <img src="images/women-top.jpg" class="thumbnail img-responsive" style="height:270px;">
                                        <input type="hidden" name="wtop" value="SELECT * from product where type='western_wear' and style='top' and category='W'">
                                          <input type="submit"class="btn-success" class="btn-success" value="tops" name="sub21" style="width:300px;">
                                           <input type="" name="" value="" style="border:0px;">

                                       
                                  </a>
                              </div>
                      

                              <div class="col-sm-3 ">
                                  
                                       <img src="images/women-tee.jpg" class="thumbnail img-responsive" style="height:270px;">
                                        <input type="hidden" name="wtee" value="SELECT * from product where type='tshirt' and category='W'">
                                          <input type="submit"class="btn-success" class="btn-success" value="tees" name="sub22" style="width:300px;">
                                  </a>
                              </div>
                        
                              <div class="col-sm-3 ">
                                 
                                       <img src="images/women-dress.jpg" class="thumbnail img-responsive" style="height:270px;">
                                        <input type="hidden" name="wdress" value="SELECT * from product where type='western_wear' and style='dress'and category='W'">
                                          <input type="submit"class="btn-success" class="btn-success" value="dresses" name="sub23" style="width:300px;">
                                      
                                  </a>
                              </div>
                          
                              <div class="col-sm-3 ">
                               
                                       <img src="images/women-pants.jpg" class="thumbnail img-responsive" style="height:270px;">
                                        <input type="hidden" name="wpnts" value="SELECT * from product where type='bottoms'and category='W'">
                                          <input type="submit"class="btn-success" class="btn-success" value="bottoms" name="sub24" style="width:300px;">
                                       
                                  </a>
                        
                              </div>  
                  
                        </div>


                        <div class="row">
                        <b><pre style="background-color:#109910 ;color:white; text-align:center; font-size:20px; font-family:calibri">WINTER-WEAR</pre></b><HR>  
                              

                                  <div class="col-sm-3 ">
                                    
                                           <img src="images/women-pullovers.jpg" class="thumbnail img-responsive" style="height:270px;">
                                            <input type="hidden" name="wpulovs" value="SELECT * from product where type='winter_wear'and style='pullovers' and category='W'">
                                              <input type="submit"class="btn-success" class="btn-success" value="pullovers" name="sub25" style="width:300px;">
                                          
                                      </a>
                                  </div>
                                  <div class="col-sm-3 ">
                               
                                           <img src="images/women-blazer.jpg" class="thumbnail img-responsive" style="height:270px;">
                                            <input type="hidden" name="wblaz" value="SELECT * from product where type='winter_wear' and style='blazers' and category='W'">
                                              <input type="submit"class="btn-success" class="btn-success" value="blazers" name="sub26" style="width:300px;">
                                          
                                      </a>
                                  </div>
                                  <div class="col-sm-3 ">
                                     
                                           <img src="images/women-swetshirts.jpg" class="thumbnail img-responsive" style="height:270px;">
                                            <input type="hidden" name="wswt" value="SELECT * from product where type='winter_wear' and style='sweatshirts' and category='W'">
                                              <input type="submit"class="btn-success" class="btn-success" value="sweatshirts" name="sub27" style="width:300px;">
                                          
                                      </a>
                                  </div>
                          
                                  <div class="col-sm-3 ">
                                      
                                           <img src="images/women-jackets.jpg" class="thumbnail img-responsive" style="height:270px;">
                                            <input type="hidden" name="wjack" value="SELECT * from product where type='winter_wear' and style='jackets' and category='W'">
                                              <input type="submit"class="btn-success" class="btn-success" value="jackets" name="sub28" style="width:300px;">
                                               <input type="" name="" value="" style="border:0px;">

                                         
                                      </a>
                                  </div>

                        </div>        
                        
              </div>
  
          </form>

        </div>

      </body>

    </head>
  </html>


<?php

    require ("footer.php");
  
?>
