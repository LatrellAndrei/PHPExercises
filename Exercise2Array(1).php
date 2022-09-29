<?php

$num = (int)readline("Input the number of elements to be stored in the array: ");
echo ("input $num elements in the array:\n ");
$arrNum[] = $num;

for ($i = 0; $i < $num; $i++) {
$arrNum[$i] = (int)readline("Enter element " . $i .": ");
}
$arr = explode(' ', readline());
 
print_r($arr);

$arr = array(' ');

echo "\n";

echo ("Expected Output : \n");
echo ("Total number of duplicate elements found in the array is : ");
echo count($arr);
?>