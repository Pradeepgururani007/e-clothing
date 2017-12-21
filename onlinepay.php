<?php
	session_start();	
  	require ("header.php");
    require ("dbconnect.php");

 if(isset($_SESSION['p_id'])){
    
  		
  	
 }   

  if(isset($_SESSION['cust_id'])){

		

	}

	if(isset($_SESSION['o_p'])){

		

	}

if(isset($_SESSION['c_o_d'])){

		
		 

	}

	if (isset($_POST['go'])) {
		 
		try {
		 		
		 	
	      	 $date=date("y-m-d");
	      	 $cid=$_SESSION['cust_id'];
	      	 $cname=$_SESSION['cust_id'];
	      	 $pid=$_SESSION['p_id'];
	      	 $pmode=$_SESSION['o_p'];
	      	 $orstatus='new';

	      	$sql="SELECT c_id FROM customer WHERE `fname` ='$cname'";
            $stmt=$pdo->prepare($sql);
            $result=$stmt->execute();
            $user=$stmt->fetch(PDO::FETCH_ASSOC);
             $cid=$user['c_id'];
			

			$csql="SET foreign_key_checks = 0";
            $stmt=$pdo->prepare($csql);
            $result=$stmt->execute();

			$insert= "INSERT into `order`(`ord_id`,`odate`,`c_id`,`p_id`,`ord_status`)values('','".$date."','".$cid."','".$pid."','".$orstatus."')";
                   				
			if ($pdo->query($insert)) 
                  {
                  echo '<script>alert("inserted successful");</script>';
                  header('location:bag.php');
                  }
                 

              $pdo=null;

			} 

			catch (PDOException $e) 
			{
		 		 echo $e->getMessage();
		 	}

		 	

        }    

?>

<HR><BR>
<!DOCTYPE html >
<html>
	<head>
	 	<link rel="stylesheet" href="css/style.css">
		
	 	<style type="text/css">

	 		.h2{


	 			font-size: 50px;
	 			font-color: #fff;
	 		}

	 		.container{


	 			position: relative;
	 		}

	 	</style>
		<body>
	
				<div class="container">

			
		              
		                <div class="">
		                  
		                      <div class="container-fluid">
			                      
		                      	<h1 style="font-family:calibri;"><B>Please Enter Your Details</B></h1><HR>

			                      <label for="p_type" class="row control-label" style="align:left">payment-mode</label>
			                        <div class="col-sm-2">
			                          <select class="form-control">
			                            <option>visa</option>
			                            <option>maestro</option>
			                            <option>visa-debit</option>
			                            <option>master-card</option>
			                            <option>paypal</option>
			                          </select>
			                        </div>
			                        <BR><BR>
			                        	<HR>
			         
			                        <label for="p_type" class=" control-label">card-number</label>  
			                        
			                        <input type="text" name="cardnum"> 
			            			 
			                        <br><BR><HR>

					                <label for="p_type" class=" control-label">name on card</label>  
			                
			                        <input type="text" name="price"> 
			        
			                   		<BR><HR>

			                        <label for="p_type" class="  control-label">expiry-date</label>  
			                        
			                        <input type="date" name="expdate">
			          				<BR><HR>

			                        <label for="p_type" class=" control-label">password</label>  
			                  
			                        <input type="text" name="price"> 
			                 
			                    
			                      		<HR>
			                            <div class="col-sm-12"> 
			                  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">          					
			                            
			                            			<input type="hidden" name="odate">
			                            		
			                
			                            			<input type="submit"  value="go"  name="go" class="btn btn-primary btn-lg btn-block btn-success" style="width:500px;">
			                   </form> 	
			                            	
			                            </div>
			                       </div>
		            		
		             </div> 
		             <BR><BR><BR><HR>  	           

		        </div>    	

		</body>	

	</head>
</html>

<?php    
    require ("footer.php");
  
?>