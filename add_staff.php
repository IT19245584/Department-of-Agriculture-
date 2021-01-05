<?php
  include"config.php";
?>

<?php



if(isset($_POST['submit']))
{
	// Escape user inputs for security
	$name = $_POST["name"];
	$nic = $_POST["nic"];
	$bod = $_POST["bod"];
	$age = $_POST["age"];
	$telNum1 = $_POST["telNum1"];
	$telNum2 = $_POST["telNum2"];
	$Address = $_POST["Address"];
	$email = $_POST["email"];
	$gender = $_POST["gender"];
	$work = $_POST["work"];
	$branch = $_POST["branch"];
	$password = $_POST["password"];
	$Cpassword = $_POST["Cpassword"];

	if ($Cpassword != $password ) {
		echo "<script> alert('Passwords Are Not Matching')</script>";
	} else {
	
    
	// Attempt insert query execution
	$sql = "INSERT INTO staff( name, nic, bod, age, tel, home, address, gender, location, branch, email, pass) VALUES 
	('$name','$nic','$bod','$age','$telNum1','$telNum2','$Address','$gender','$work','$branch','$email','$password') ";
	if(mysqli_query($conn, $sql)){

		header("Location:system_reg.php");
			session_start();
			$_SESSION["nic"]= $nic ;
			$_SESSION["password"] = $password;
	} 
	else{
		echo "ERROR: Could not able to execute $sql." ;
			echo "<script>
                alert('Already Registered NIC');
                window.location = 'main_login.php';
            </script>";
	}
	
}
	 
	// Close connection
    mysqli_close($conn);
}

?>