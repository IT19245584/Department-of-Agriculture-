<?php

$crops = array("Rice","cabbage", "carrot", "beetroot", "cauliflower", "knolkhol", "bean", "tomato");
sort($crops);
$arrlength = count($crops);

for ($x = 0; $x < $arrlength; $x++) {
   
    echo "<option class='text-capitalize' value='$crops[$x]'> $crops[$x]</option>";
}
?>