<?php
//array_merge() example

$arr1=['1'=>'mustafa','2'=>'mohamed',3=>'ibrahim'];
$arr2=[3=>'ahmed',6=>'hamada'];
$result = array_merge($arr1, $arr2);
echo "<pre>";
print_r($result);
echo "</pre>";
echo "#################################################<br>";
// in_array example
$arr3=['mahmoud','hamed','john'];
if(in_array('mahmoud',$arr3))
{
    echo "the name you search on array exist";
}
else{
    echo "the name you search on array exist";
}

echo "<br>#################################################<br>";
//array_diff() example
$array1 = array("a" => "green","white", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result1 = array_diff($array1, $array2);
echo "<pre>";
print_r($result1);
echo "</pre>";
echo "<br>#################################################<br>";
//array_diff_assoc example >> Computes the difference of arrays with additional index check
$arra1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$arra2 = array("a" => "green", "yellow", "red");
$result2 = array_diff_assoc($arra1, $arra2);
print_r($result2);




?>
