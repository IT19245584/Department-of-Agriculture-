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
	$province = $_POST["province"];
	$District = $_POST["District"];
	$Farmer_Type = $_POST["Farmer_Type"];
	$email = $_POST["email"];
	$Farming_type = $_POST["Farming_type"];
	$crops1 = $_POST["crops1"];
	$crops2 = $_POST["crops2"];
	$crops3 = $_POST["crops3"];
	$crops4 = $_POST["crops4"];
	$More_Crops = $_POST["More_Crops"];
	$password = $_POST["password"];
	$Cpassword = $_POST["Cpassword"];

	if ($Cpassword != $password ) {
		echo "<script> alert('Passwords Are Not Matching')</script>";
	} else {
	
    
	// Attempt insert query execution
	$sql = "INSERT INTO farmer(name, nic, tel, home, address, province, district, farmer_type,email,farming_method,crops1,crops2,crops3, crops4,more_crops,password,Cpassword,age,bod) VALUES
	('$name','$nic','$telNum1','$telNum2','$Address','$province','$District','$Farmer_Type','$email','$Farming_type','$crops1','$crops2','$crops3','$crops4','$More_Crops','$password','$Cpassword','$bod','$age') ";
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