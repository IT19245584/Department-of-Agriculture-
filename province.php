<?php

$province = array("Central Province", "Eastern Province ", "Northern Province", "Southern Province ", "Western Province ", "North Western Province", "North Central Province","Uva Province", "Sabaragamuwa Province ");
sort($province);
$arrlength = count($province);



for ($x = 0; $x < $arrlength; $x++) {
   
    echo "<option class='text-capitalize' value='$province[$x]'> $province[$x]</option>";
}
