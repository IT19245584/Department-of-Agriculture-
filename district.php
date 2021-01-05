<?php

$district = array("Jaffna", "Kilinochchi", "Mannar", "Mullaitivu ", "Vavuniya", "Puttalam", "Kurunegala", "Gampaha", "Colombo ", "Kalutara", "Polonnaruwa", "Anuradhapura", "Matale", "Kandy", "Nuwara Eliya", "Kegalle", "Ratnapura", "Trincomalee", "Batticaloa ", "Ampara", "Badulla", "Monaragala", "Hambantota","Matara", "Galle");
sort($district);
$arrlength = count($district);



for ($x = 0; $x < $arrlength; $x++) {
   
    echo "<option class='text-capitalize' value='$district[$x]'> $district[$x]</option>";
}
