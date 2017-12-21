<?php

    session_start();     
    require("header.php");
?>

<br><br><br>
<!DOCTYPE html>
  <html lang="en">
    <head>
  
      <body>

            <div class="row">

              <div class="col-sm-12">
                 <form method="POST" action="content.php">
                    <B><pre style="background-color:#109910 ;color:white; text-align:center; font-size:20px; font-family:calibri">TEES</pre></B><HR>  
                         
                        <div class="col-sm-3">
                                
                                  <img src="images/boys-graphic-tee.jpg" class="thumbnail img-responsive" style="height:270px;">
                                  <input type="hidden" name="bgraph" value="SELECT * from product where style='graphic' and category='B'">
                                  <input type="submit"class="btn-success" class="btn-success" value="graphic tees" name="sub37" style="width:300px;">
                                  <input type="" name="" value="" style="border:0px;">

                        </div>
        
                        <div class="col-sm-3">
                                 <img src="images/boys-vneck-tee.jpg" class="thumbnail img-responsive"style="height:270px ;">
                                  <input type="hidden" name="bvn" value="SELECT * from product where style='vneck' and category='B'">
                                  <input type="submit"class="btn-success" value="v-neck tees" name="sub38" style="width:300px;">    
                      </div>
                      
                        <div class="col-sm-3 " >
                                 <img src="images/boys-round-neck-tee.jpg" class="thumbnail img-responsive"style="height:270px;">
                                 <input type="hidden" name="brn" value="SELECT * from product where style='roundneck' and category='B'">
                                 <input type="submit"class="btn-success" value="round-neck tees" name="sub39" style="width:300px;">
                          
                        </div>

                        <div class="col-sm-3 " >
                                  <img src="images/boys-solid-tee.jpg" class="thumbnail img-responsive" style="height:270px;">
                                  <input type="hidden" name="bsol" value="SELECT * from product where style='solid' and category='B' and type='tshirt'">
                                  <input type="submit"class="btn-success" value="solid tees" name="sub40" style="width:300px;">
                          </div>

                          <BR><BR>  
                </div>
                
                <div class="row">
                      <B><pre style="background-color:#109910 ;color:white;text-align:center; font-size:20px; font-family:calibri;">SHIRTS</pre></B><HR>  
                    

                          <div class="col-sm-3  ">
                             
                                      <img src="images/boys-solid-shirt.jpg" class="thumbnail img-responsive" style="height:270px;">
                                   <input type="hidden" name="bsols" value="SELECT * from product where style='solid' and category='B' and type='shirt'">
                                   <input type="submit"class="btn-success" value="solid-shirts" name="sub41" style="width:300px;">    
          
                          </div>
                          <div class="col-sm-3 " >
                              
                                   <img src="images/boys-checked-shirt.jpg" class="thumbnail img-responsive" style="height:270px;">
                                   <input type="hidden" name="bchks" value="SELECT * from product where style='checked' and category='B' and type='shirt'">
                                  <input type="submit"class="btn-success" value="checked-shirt" name="sub42" style="width:300px;">    
                          </div>
                          <div class="col-sm-3 " >
                              
                                   <img src="images/boys-printed-shirt.jpg" class="thumbnail img-responsive" style="height:270px;">
                                   <input type="hidden" name="bpris" value="SELECT * from product where style='printed' and category='B'and type='shirt'">
                                  <input type="submit"class="btn-success" value="printed-shirts" name="sub43" style="width:300px;">    
                          </div>
                          <div class="col-sm-3 " >
                              
                                   <img src="images/boys-denim-shirt.jpg" class="thumbnail img-responsive" style="height:270px;">
                                   <input type="hidden" name="bdens" value="SELECT * from product where style='denim' and category='B'and type='shirt'">
                                  <input type="submit"class="btn-success" value="denim-shirts" name="sub44" style="width:300px;">    
                              
                          </div>
                  </div>       <input type="" name="" value="" style="border:0px;">

                <div class="row">
                    <B><pre style="background-color:#109910 ;color:white;text-align:center; font-size:20px; font-family:calibri;">POLOS</pre></B><HR>  
              
                            <div class="col-sm-3 " >
                                
                                    <img src="images/boys-rugby-polos.jpg" class="thumbnail img-responsive" style="height:270px;">
                                     <input type="hidden" name="brgp" value="SELECT * from product where style='rugby' and category='B'and type='polo'">
                                     <input type="submit"class="btn-success" value="rugby-polos" name="sub45" style="width:300px;">    
                                
                            </div>
                            <div class="col-sm-3 " >
                               
                                     <img src="images/boys-fashion-polos.jpg" class="thumbnail img-responsive" style="height:270px;">
                                     <input type="hidden" name="bfasp" value="SELECT * from product where style='fashion' and category='B'and type='polo'">
                                  <input type="submit"class="btn-success" value="fashion-polos" name="sub46" style="width:300px;">    
                                
                            </div>
                            <div class="col-sm-3 " >
                             
                                     <img src="images/boys-solid-polos.jpg" class="thumbnail img-responsive" style="height:270px;">
                                     <input type="hidden" name="bsolip" value="SELECT * from product where style='solid' and category='B'and type='polo'">
                                  <input type="submit"class="btn-success" value="solid-polos" name="sub47" style="width:300px;">      
                                
                            </div>
                    
                            <div class="col-sm-3 " >
                           
                                     <img src="images/boys-printed-polos.jpg" class="thumbnail img-responsive" style="height:270px;">
                                     <input type="hidden" name="bpritp" value="SELECT * from product where style='printed' and category='B'and type='polo'">
                                    <input type="submit"class="btn-success" value="printed-polos" name="sub48" style="width:300px;">    

                                     <input type="" name="" value="" style="border:0px;">
                                
                            </div>

                </div>
                 
                <div class="row">
                  <B><pre style="background-color:#109910 ;color:white;text-align:center; font-size:20px; font-family:calibri;">BOTTOMS</pre></B><HR>  
                    
                            <div class="col-sm-3 " >
                               
                                     <img src="images/boys-denims.jpg" class="thumbnail img-responsive" style="height:270px;">
                                     <input type="hidden" name="bden" value="SELECT * from product where style='denim' and category='B'and type='bottoms'">
                                     <input type="submit"class="btn-success" value="denims" name="sub49" style="width:300px;">    
         
                            </div>
                    

                            <div class="col-sm-3 " >
                              
                                     <img src="images/boys-chinos.jpg" class="thumbnail img-responsive" style="height:270px;">
                                     <input type="hidden" name="bchin" value="SELECT * from product where style='chinos' and category='B'and type='bottoms'">
                                  <input type="submit"class="btn-success" value="chinos" name="sub50" style="width:300px;">    

                            </div>
                      
                            <div class="col-sm-3 " >
                               
                                     <img src="images/boys-shorts.jpg" class="thumbnail img-responsive" style="height:270px;">
                                     <input type="hidden" name="bshrt" value="SELECT * from product where style='shorts' and category='B'and type='bottoms'">
                                  <input type="submit"class="btn-success" value="shorts" name="sub51" style="width:300px;">    

              
                            </div>
                        
                            <div class="col-sm-3 " >
                                
                                    <img src="images/boys-pants.jpg" class="thumbnail img-responsive" style="height:270px;">
                                    <input type="hidden" name="bfrmp" value="SELECT * from product where style='pant' and category='B'and type='bottoms'">
                                    <input type="submit"class="btn-success" value="pants" name="sub52" style="width:300px;">    
                                    <input type="" name="" value="" style="border:0px;">

                            </div>  
          
      
                <div class="row">
                  <B><pre style="background-color:#109910 ;color:white;text-align:center; font-size:20px; font-family:calibri;">WINTER-WEAR</pre></B><HR>            

                            <div class="col-sm-3 " >
                           
                                    <img src="images/boys-pullovers.jpg" class="thumbnail img-responsive" style="height:270px;">
                                    <input type="hidden" name="bpull" value="SELECT * from product where style='pullovers' and category='B'and type='winter_wear'">
                                    <input type="submit"class="btn-success" value="pullovers" name="sub53" style="width:300px;">    

                            </div>
                            <div class="col-sm-3 " >
                                                      
                                    <img src="images/boys-jackets.jpg" class="thumbnail img-responsive" style="height:270px;">
                                    <input type="hidden" name="bjack" value="SELECT * from product where style='jackets' and category='B'and type='winter_wear'">
                                    <input type="submit"class="btn-success" value="jackets" name="sub54" style="width:300px;">    
                            </div>
                            <div class="col-sm-3 " >
                               
                                     <img src="images/boys-blazers.jpg" class="thumbnail img-responsive" style="height:270px;">
                                     <input type="hidden" name="bblaz" value="SELECT * from product where style='blazers' and category='B'and type='winter_wear'">
                                     <input type="submit"class="btn-success" value="blazers" name="sub55" style="width:300px;">    
    
                            </div>
                    
                            <div class="col-sm-3 " >
                                
                                     <img src="images/boys-sweatshirts.jpg" class="thumbnail img-responsive" style="height:270px;">
                                     <input type="hidden" name="bswst" value="SELECT * from product where style='sweatshirts' and category='B'and type='winter_wear'">
                                     <input type="submit"class="btn-success" value="sweatshirts" name="sub56" style="width:300px;">    

                            </div><input type="" name="" value="" style="border:0px;">

                </div>        
           
           </form> 
          </div>

        </div>

        </div>

        </div>
           
    </div>

      </body>

    </head>
  </html>

<?php

    require ("footer.php");
  
?>

