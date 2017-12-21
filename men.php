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
                                
                                <button class="btn btn-success" class="btn-success" class="btn-success" value="graphic tees" name="sub1" style="width:300px;"><img src="images/graphic-tee.jpg" class="thumbnail img-responsive" style="height:300px;">
                                  <input type="hidden" name="graph" value="SELECT * from product where style='graphic' and category='M'">
                                </button> 

                        </div>
               
                     
                        <div class="col-sm-3">
                                  <button class="btn btn-success" value="v-neck tees" name="sub2" style="width:300px;">
                                    <img src="images/vneck-tee.jpg" class="thumbnail img-responsive"style="height:300px;">
                                    <input type="hidden" name="vn" value="SELECT * from product where style='vneck' and category='M'">
                                        
                                  </button>
                      </div>
                      
                        <div class="col-sm-3 " >
                                <button alt="round-neck"class=" btn btn-success" value="round-neck tees" name="sub3" style="width:300px;">
                                 <img src="images/round-neck-tee.jpg" class="thumbnail img-responsive"style="height:300px;">
                                 <input type="hidden" name="rn" value="SELECT * from product where style='roundneck' and category='M'">
                              
                                </button>
                        </div>

                        <div class="col-sm-3 " >
                                <button class="btn btn-success" value="solid tees" name="sub4" style="width:300px;">
                                  <img src="images/solid-tee.jpg" class="thumbnail img-responsive" style="height:300px;">
                                  <input type="hidden" name="sol" value="SELECT * from product where style='solid' and category='M' and type='tshirt'">
                                  
                                </button>
                          </div>

                            
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="row">
                      <B><pre style="background-color:#109910 ;color:white;text-align:center; font-size:20px; font-family:calibri;">SHIRTS</pre></B><HR>  
                    

                          <div class="col-sm-3  ">
                                  <button class=" btn btn-success" value="solid-shirts" name="sub5" style="width:300px;">   
                                   <img src="images/solid-shirt.jpg" class="thumbnail img-responsive" style="height:300px;">
                                   <input type="hidden" name="sols" value="SELECT * from product where style='solid' and category='M' and type='shirt'">
                                   
                                  </button> 
                              
                          </div>
                          <div class="col-sm-3 " >
                                  <button class="btn btn-success" value="checked-shirt" name="sub6" style="width:300px;">
                              
                                    <img src="images/checked-shirt.jpg" class="thumbnail img-responsive" style="height:300px;">
                                    <input type="hidden" name="chks" value="SELECT * from product where style='checked' and category='M'">
                                        
                                  </button>
                          </div>
                          <div class="col-sm-3 " >
                                  <button class="btn btn-success" value="printed-shirts" name="sub7" style="width:300px;">
                                    <img src="images/printed-shirt.jpg" class="thumbnail img-responsive" style="height:300px;">
                                    <input type="hidden" name="pris" value="SELECT * from product where style='printed' and category='M'and type='shirt'">
                                        
                                  </button> 
                              
                          </div>
                          <div class="col-sm-3 " >
                                  <button class="btn btn-success" value="denim-shirts" name="sub8" style="width:300px;">
                                    <img src="images/denim-shirt.jpg" class="thumbnail img-responsive" style="height:300px;">
                                    <input type="hidden" name="dens" value="SELECT * from product where style='denim' and category='M'and type='shirt'">
                                        
                                  </button>
                          </div>
                  </div>       <input type="" name="" value="" style="border:0px;">
                  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="row">

                    <B><pre style="background-color:#109910 ;color:white;text-align:center; font-size:20px; font-family:calibri;">POLOS</pre></B><HR>  
                      

                            <div class="col-sm-3 " >
                                  <button class="btn btn-success" value="rugby-polos" name="sub9" style="width:300px;">
                                     <img src="images/rugby-polo.jpg" class="thumbnail img-responsive" style="height:300px;">
                                     <input type="hidden" name="rgp" value="SELECT * from product where style='rugby' and category='M'and type='polo'">
                                         
                                  </button>    
                                
                            </div>
                            <div class="col-sm-3 " >
                                  <button class="btn btn-success" value="fashion-polos" name="sub10" style="width:300px;">
                                     <img src="images/fashion-polo.jpg" class="thumbnail img-responsive" style="height:300px;">
                                     <input type="hidden" name="fasp" value="SELECT * from product where style='fashion' and category='M'and type='polo'">
                                     
                                  </button>   
                                    
                                
                            </div>
                            <div class="col-sm-3 " >
                                  <button class="btn btn-success" value="solid-polos" name="sub11" style="width:300px;">                            
                                     <img src="images/solid-polo.jpg" class="thumbnail img-responsive" style="height:300px;">
                                     <input type="hidden" name="solip" value="SELECT * from product where style='solid' and category='M'and type='polo'">
                                         
                                  </button>
                                     
                                
                            </div>
                    
                            <div class="col-sm-3 " >
                                    <button class="btn-success" value="printed-polos" name="sub12" style="width:300px;">
                                      <img src="images/printed-polo.jpg" class="thumbnail img-responsive" style="height:300px;">
                                      <input type="hidden" name="pritp" value="SELECT * from product where style='printed' and category='M'and type='polo'">
                                          

                                     </button>
                                
                            </div>


                </div>
                 <br><br><br><br><br>
                <div class="row">
                  <B><pre style="background-color:#109910 ;color:white;text-align:center; font-size:20px; font-family:calibri;">BOTTOMS</pre></B><HR>  
                    
            
                            <div class="col-sm-3 " >
                               
                                     <img src="images/men-chinos.jpg" class="thumbnail img-responsive" style="height:300px;">
                                     <input type="hidden" name="mchin" value="SELECT * from product where style='chinos' and category='M'and type='bottoms'">
                                     <input type="submit"class="btn-success" value="chinos" name="sub13" style="width:300px;">    
                                      
                                    
                                
                            </div>
                    

                            <div class="col-sm-3 " >
                              
                                     <img src="images/men-denim.jpg" class="thumbnail img-responsive" style="height:300px;">
                                     <input type="hidden" name="mden" value="SELECT * from product where style='denim' and category='M'and type='bottoms'">
                                  <input type="submit"class="btn-success" value="denims" name="sub14" style="width:300px;">    

                                  
                                
                            </div>
                      
                            <div class="col-sm-3 " >
                               
                                     <img src="images/men-shorts.jpg" class="thumbnail img-responsive" style="height:300px;">
                                     <input type="hidden" name="mshrt" value="SELECT * from product where style='shorts' and category='M'and type='bottoms'">
                                  <input type="submit"class="btn-success" value="shorts" name="sub15" style="width:300px;">    

                                     
                                
                            </div>
                        
                            <div class="col-sm-3 " >
                                
                                    <img src="images/men-pants.jpg" class="thumbnail img-responsive" style="height:300px;">
                                    <input type="hidden" name="frmp" value="SELECT * from product where style='pants' and category='M'and type='bottoms'">
                                    <input type="submit"class="btn-success" value="formal-pants" name="sub16" style="width:300px;">    
                                    <input type="" name="" value="" style="border:0px;">

              
                            </div>  
          <br><br><br>
      
                <div class="row">
                  <B><pre style="background-color:#109910 ;color:white;text-align:center; font-size:20px; font-family:calibri;">WINTER-WEAR</pre></B><HR>            

                            <div class="col-sm-3 " >
                           
                                    <img src="images/men-pullovers.jpg" class="thumbnail img-responsive" style="height:300px;">
                                    <input type="hidden" name="mpull" value="SELECT * from product where style='pullovers' and category='M'and type='winter_wear'">
                                    <input type="submit"class="btn-success" value="pullovers" name="sub17" style="width:300px;">    

                                
                            </div>
                            <div class="col-sm-3 " >
                                                      
                                    <img src="images/men-jackets.jpg" class="thumbnail img-responsive" style="height:300px;">
                                    <input type="hidden" name="mjack" value="SELECT * from product where style='jackets' and category='M'and type='winter_wear'">
                                    <input type="submit"class="btn-success" value="jackets" name="sub18" style="width:300px;">    

                                     
                                
                            </div>
                            <div class="col-sm-3 " >
                               
                                     <img src="images/men-blazers.jpg" class="thumbnail img-responsive" style="height:300px;">
                                     <input type="hidden" name="mblaz" value="SELECT * from product where style='blazers' and category='M'and type='winter_wear'">
                                     <input type="submit"class="btn-success" value="blazers" name="sub19" style="width:300px;">    
      
                            </div>
                    
                            <div class="col-sm-3 " >
                                
                                     <img src="images/men-sweatshirt.jpg" class="thumbnail img-responsive" style="height:300px;">
                                     <input type="hidden" name="mswst" value="SELECT * from product where style='sweatshirts' and category='M'and type='winter_wear'">
                                     <input type="submit"class="btn-success" value="sweatshirts" name="sub20" style="width:300px;">    

                  
                            </div><input type="" name="" value="" style="border:0px;">

                  </div>        
           <br>
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

