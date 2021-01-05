<?php
  include"config.php";
?>

<?php




	// Escape user inputs for security
	session_start();
	$nic= $_SESSION["nic"];
	$password = $_SESSION["password"];
	

    
	// Attempt insert query execution
	$sql = "INSERT INTO system_reg(nic, passwod) VALUES('$nic','$password')";
	if(mysqli_query($conn, $sql)){
		echo "<script> alert('Records added successfully!!!!')</script>";
		header("Location:main_login.php");
	} 
	else{
		echo "ERROR: Could not able to execute $sql." ;
	echo "<script>
                alert('Already Registered NIC');
                window.location = 'main_login.php';
            </script>";
	}
	

	 
	// Close connection
    mysqli_close($conn);


?>