
<?php
include "config.php";
?>

<?php

// Escape user inputs for security
$Username = $_POST["Username"];
$Password = $_POST["Pawword"];



    $sql = "select * from system_reg where nic='$Username' and passwod='$Password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

           if($Username == 'admin'){
            echo "<script>
                alert('Success Login');
                window.location = 'staff_reg.php';
            </script>";
           }else{
            echo "<script>
                alert('Success Login');
                window.location = 'Former_registration.php';
            </script>"; 
           }
     }
    } else {
        echo "<script>
                alert('Invalid Username or password');
                window.location = 'main_login.php';
            </script>";
       
    }

// Close connection
mysqli_close($conn);
?>