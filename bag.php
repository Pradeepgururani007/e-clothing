<?php
	session_start();
    require ("header.php");
    require ("dbconnect.php");
    
   if(isset($_SESSION['cust_id'])){

		 @$cid=$_SESSION['cust_id'];
		

	}

	if(isset($_SESSION['p_id'])){
    
  		 @$pid=$_SESSION['p_id'];
  		
  	
 }

 if(isset($_SESSION['fid'])) {

 	 @$fid=$_SESSION['fid'];
 
 } 

if (isset($_POST['odel']))
	 {
		 @$oid=$_POST['odel'];		
		
		$del="DELETE FROM `e_clothing`.`order` WHERE `order`.`ord_id` ='$oid'";
        $stmt=$pdo->prepare($del);
        $result=$stmt->execute();
            
	}	

?>
<HR><BR>

<!DOCTYPE html>
<html>
	<head>
	 	<link rel="stylesheet" href="css/style.css">
		
	 	<style type="text/css">

	 		.mypre{

	 			background-color: #339966;

	 		}

	 		.mylabel{

	 			background-color: #339966;
	 			font-style: calibri;
	 			
	 			width: 80px;
	 			border-radius: 5px;
	 			border-spacing: 5px;
	 		
	 		}


	 	</style>

		<body>

			<div class="row">
				
					<div class="col-sm-4">
					
						<pre style="color:#fff;" class="mypre"><span class="glyphicon glyphicon-user" alt=" profile" style="font-size:30px;"></span><B style="font-size:30px; font-family:verdana;">Profile</B></pre>
						


							<div class="container">

									 <?php 
									       

				                            @$sql="SELECT * FROM customer WHERE `fname` ='$cid' or `email`='$cid'";
								            $stmt=$pdo->prepare($sql);
								            $result=$stmt->execute();
								            $user=$stmt->fetch(PDO::FETCH_ASSOC);
								             

	                       			 ?>  

									<div class="col-sm-1">

										<b>name</B>
										<HR>
										 <textarea cols="1" rows="3" style="color:#fff; text-align:center; " class="mylabel">
										 	<?php  echo $user['fname']; echo"  ";echo$user['lname'];?>
										 </textarea>

									</div>	
									<div class="col-sm-1">

										<b>email</B>
										<HR>
										<textarea rows="3" style="color:#fff; text-align:center;" cols="1"  class="mylabel"><?php  echo $user['email'];?></textarea>	

									</div>	

									<div class="col-sm-1">

										<b>contact</B>
										<HR>
										<textarea rows="3"style="color:#fff; text-align:center;" cols="1"  class="mylabel"><?php  echo $user['mobile_no'];?></textarea>	

									</div>	

									<div class="col-sm-1">

										<b>adress</B>
										<HR>
										<textarea rows="3"style="color:#fff;" text-align:center; cols="1"  class="mylabel"><?php  echo $user['address'];?></textarea>	

									</div>	

						</div>
							
                    </div>  
				

					<div class="col-sm-4">

						<TH>
							<pre class="mypre"><span class="glyphicon glyphicon-shopping-cart" style="color:#fff; font-size:30px;"><span><B style="font-size:30px; font-family:verdana">Orders</B></pre> 

						</TH>

						<?php 
	   
				                @$sql="SELECT * from `order` WHERE `p_id`='$pid'";
            					$stmt=$pdo->prepare($sql);
            					$result=$stmt->execute();
            					while($rowr = $stmt->fetch(PDO::FETCH_ASSOC)) {

				             	
	                       			 ?> 
				
						<div class="container">

									<div class="col-sm-1">

										<B>order-id</B>
										<HR>
										<textarea rows="3"style="color:#fff; text-align:center;" cols="1" value=""  class="mylabel">
										
											<?php echo $rowr['ord_id'];?>

										</textarea>	
									</div>	
									<div class="col-sm-1">

										<B>product</B>
										<HR>
										<textarea rows="3"style="color:#fff; text-align:center;" cols="1"  class="mylabel">
											<?php 
				                                                                                                                   
					                            $psql="SELECT `type` FROM `e_clothing`.`product` WHERE `p_id` ='$pid'";
									            $stmt=$pdo->prepare($psql);
									            $result=$stmt->execute();
									            $rowp=$stmt->fetch(PDO::FETCH_ASSOC);
												
												echo $rowp['type'];

											 ?>

										</textarea>	

									</div>	

									<div class="col-sm-1">

										<B>status
										<HR>
										<textarea rows="3" style="color:#fff;text-align:center;" cols="1"  class="mylabel"><?php  echo $rowr['ord_status'];?></textarea>	

									</div>	

									<div class="col-sm-1">

										<b>date</B>
										<HR>
										<textarea rows="3" style="color:#fff; text-align:center;" cols="1"  class="mylabel"><?php  echo $rowr['odate'];?></textarea>										

									</div>
													
						</div>

						<div class="col-sm-4">
							
								<form  method="POST" action="#"><input name="odel" value="<?php echo $rowr['ord_id'];?>"class="btn  btn-block btn-danger"  type="submit" style="color:#fff; width:400px;" title="cancel order"></form>

						</div>
						<BR><BR>	

						<?php 

						 }

						?>
						
					</div>	

					<div class="col-sm-4">

						<th>
								 <pre style="color:#fff;" class="mypre"><span class="glyphicon glyphicon-inverse glyphicon-heart " alt="Wishlist" style="font-size:30px;"><span><b style="font-size:30px; font-family:verdana">Wishlist</B></pre>
								
						</th>
						<div class="container">

									<?php 
	 
				       						@$rsql="SELECT * FROM product where p_id='$pid'";
								            $stmt=$pdo->prepare($rsql);
								            $result=$stmt->execute();
								            $rowf=$stmt->fetch(PDO::FETCH_ASSOC);	
				             	
	                       			 ?> 
									<div class="col-sm-1">

										<B>product-id</B>
										<HR>
										<textarea rows="3"style="color:#fff;text-align:center;" input="disabled" cols="2"  class="mylabel">

												<?php  echo $rowf['p_id'];?>

										</textarea>	
									</div>	
									<div class="col-sm-1">

										<B>type</B>
										<HR>	
										<textarea rows="3"style="color:#fff; text-align:center;" cols="1"  class="mylabel">

												<?php  echo $rowf['type'];?>

										</textarea>	


									</div>	

									<div class="col-sm-1">

										<B>price</B>
										<HR>
										<textarea rows="3" style="color:#fff;text-align:center;" cols="1"  class="mylabel">

												<?php  echo $rowf['price'];?>

										</textarea>		
									</div>	

									<div class="col-sm-1">

										<b>discount(%)</B>
										<HR>
										<textarea rows="3" style="color:#fff; text-align:center;" cols="1"  class="mylabel">

												<?php  echo $rowf['discount'];?>	

										</textarea>	

									</div>	

						</div>

						<div class="col-sm-4">
								<HR>
								<button class="btn  btn-block btn-danger"  type="button" style="color:#fff; width:400px;" title="remove from wishlist">remove from wishlist</button>

						</div>

					</div>

			</div><br><br><br><br><HR>

		</body>	
		
	</head>
</html>

<?php    
    require ("footer.php");
  
?>