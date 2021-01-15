<?php 
	include('config.php');
	
	$f_name =$_GET["fname"];
	$l_name =$_GET["lname"];
	$email =$_GET['email'];
	$password =$_GET['password'];
	$mobile =$_GET['phone'];
	$address1 =$_GET['address1'];
	$address2 =$_GET['address2'];

					$sql="INSERT INTO user_info (first_name, last_name, email, password, mobile, address1, address2) VALUES ('$f_name', '$l_name', '$email','$password', '$mobile', '$address1', '$address2')";
					echo $sql;
					$run_query=mysqli_query($conn,$sql);
					if($run_query){
						echo "
						<script>

                     
                        window.open('signin.html');
                        </script>
						";
					}
		
 ?>