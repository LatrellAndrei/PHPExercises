<?php
$num = (int)readline("Input the number of elements to be stored in the array: ");
echo ("input $num elements in the array:\n ");

$arr = explode(' ', readline());
 
print_r($arr);



echo "\n";  
$oddArray = array();
$evenArray = array();

$size = count($arr);
for ($i = 0; $i < $size; $i++) {
    echo "$arr[$i] ";
}
$j = 0;
$k = 0;
for ($i = 0; $i < $size; $i++) {
    if ($arr[$i] % 2 == 0) {
        $evenArray[$j] = $arr[$i];
        $j++;
    } else {
        $oddArray[$k] = $arr[$i];
        $k++;
    }
}
echo "\nExpected Output :";
echo "\nThe Even elements are : \n";
for ($i = 0; $i <= $j; $i++) {
    echo "$evenArray[$i] ";
}
echo "\nThe Odd elements are : \n";
for ($i = 0; $i <= $k; $i++) {
    echo "$oddArray[$i] ";
}
?>