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
                                  
                                        <img src="images/girls-top.jpg" class="thumbnail img-responsive" style="height:270px;">
                                        <input type="hidden" name="gtop" value="SELECT * from product where type='western_wear' and style='top' and category='G'">
                                          <input type="submit"class="btn-success" class="btn-success" value="tops" name="sub29" style="width:300px;">
                                           <input type="" name="" value="" style="border:0px;">

                                       
                                  </a>
                              </div>
                      
                              <div class="col-sm-3 ">
                                  
                                       <img src="images/girls-tee.jpg" class="thumbnail img-responsive" style="height:270px;">
                                        <input type="hidden" name="gtee" value="SELECT * from product where type='western_wear' and style='fashion' and category='G'">
                                          <input type="submit"class="btn-success" class="btn-success" value="tees" name="sub30" style="width:300px;">
                                  </a>
                              </div>
                        
                              <div class="col-sm-3 ">
                                 
                                      <img src="images/girls-dress.jpg" class="thumbnail img-responsive" style="height:270px;">
                                        <input type="hidden" name="gdress" value="SELECT * from product where type='western_wear' and style='dress' and category='G'">
                                         <input type="submit"class="btn-success" class="btn-success" value="dresses" name="sub31" style="width:300px;">
                                      
                                  </a>
                              </div>
                          
                              <div class="col-sm-3 ">
                               
                                         <img src="images/girls-pants.jpg" class="thumbnail img-responsive" style="height:270px;">
                                        <input type="hidden" name="gpnts" value="SELECT * from product where type='western_wear'and style='pants' and category='G'">
                                          <input type="submit"class="btn-success" class="btn-success" value="pants" name="sub32" style="width:300px;">
                                  </a>
                        
                              </div>  
                  
                        </div>
                        <div class="row">
                        <b><pre style="background-color:#109910 ;color:white; text-align:center; font-size:20px; font-family:calibri">WINTER-WEAR</pre></b><HR>  
                                  <div class="col-sm-3 ">
                                    
                                           <img src="images/girls-pullovers.jpg" class="thumbnail img-responsive" style="height:270px;">
                                            <input type="hidden" name="gpulovs" value="SELECT * from product where type='winter_wear' and style='pullovers' and category='G'">
                                              <input type="submit"class="btn-success" class="btn-success" value="pullovers" name="sub33" style="width:300px;">
                                      </a>
                                  </div>
                                  <div class="col-sm-3 ">
                               
                                           <img src="images/girls-sweatshirts.jpg" class="thumbnail img-responsive" style="height:270px;">
                                            <input type="hidden" name="gblaz" value="SELECT * from product where type='winter_wear' and style='sweatshirts' and category='G'">
                                              <input type="submit"class="btn-success" class="btn-success" value="sweatshirts" name="sub34" style="width:300px;"> 
                                      </a>
                                  </div>
                                  <div class="col-sm-3 ">
                                     
                                           <img src="images/girls-blazer.jpg" class="thumbnail img-responsive" style="height:270px;">
                                            <input type="hidden" name="gswt" value="SELECT * from product where type='winter_wear' and style='blazers' and category='G'">
                                              <input type="submit"class="btn-success" class="btn-success" value="blazers" name="sub35" style="width:300px;">        
                                      </a>
                                  </div>
                          
                                  <div class="col-sm-3 ">
                                      
                                           <img src="images/girls-jackets.jpg" class="thumbnail img-responsive" style="height:270px;">
                                            <input type="hidden" name="gjack" value="SELECT * from product where type='winter_wear' and style='jackets' and category='G'">
                                              <input type="submit"class="btn-success" class="btn-success" value="jackets" name="sub36" style="width:300px;">
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
