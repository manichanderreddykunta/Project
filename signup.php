<?php


include('config.php');

	$f_name = $_POST["f_name"];
	$l_name = $_POST["l_name"];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$mobile = $_POST['mobile'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
    

		$sql = "INSERT INTO user_info (first_name, last_name, email ,password, mobile, address1, address2) 
		VALUES ('$f_name', '$l_name', '$email','$password', '$mobile', '$address1', '$address2')";
           
           

           
           
           $run_query=mysqli_query($conn,$sql);
            if($run_query){
                echo "
                <script>

             
                window.open('signin.php');
                </script>
                ";
            }

	

?>






















































