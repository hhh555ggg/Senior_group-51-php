<!-- task2  -->
<!-- mustafa mohamed mustafa -->

<?php
// simple array
$back_lang=['php' , 'java' , 'python' , 'c#' ];
echo "<pre>";
print_r($back_lang);
echo "</pre>";
echo "<br>";
// access array elements by default the array indexed from 0 to length of array -1
echo $back_lang[0];
echo "<br>";
// change value in array 
$back_lang[1]='ayhaga';
echo $back_lang[1];
echo "<br>";

// methods in array 
// first method array_push
array_push($back_lang,'c++');  // will add c++ in the end of the array 
echo "<pre>";
print_r($back_lang);
echo "</pre>";
echo "<br>";

// second  method array_pop
array_pop($back_lang);  // will delete c++ in the end of the array 
echo "<pre>";
print_r($back_lang);
echo "</pre>";
echo "<br>";

// third  method count
echo  "the count of array is".count($back_lang);
echo "<br>";

// forth method shift >>> will remove first  element and re index the array


echo "#########################################################################";

// associative array have key and value
echo "<br>";
$alllangs_fram=['php' => 'lavarel','perl'=>'Catalyst','python'=> 'django'];
echo "<br>";
echo $alllangs_fram['php']; // lavarel
echo "<br>";

//add new value in associative array 
$alllangs_fram['js']='nextjs';
echo "<pre>";
print_r($alllangs_fram);
echo "</pre>";
echo "<br>";

// change value in array 
$alllangs_fram['python']= 'ayhaga';
echo $alllangs_fram['python'];  // ayhaga
echo "<br>";


// fifth method unset  >> will remove the element without re indexed
unset($alllangs_fram['perl']);
echo "<pre>";
print_r($alllangs_fram);
echo "</pre>";
echo "<br>";



echo "#########################################################################";
echo "<br>";  
// mulidimintional Array
$users=[
    
    ['user1' => 'mustafa' , 'email ' => 'mustafa@gmail.com'],
    ['user2' => 'mohaamed' , 'email ' => 'mohamed@gmail.com'],
    ['user3' => 'ahmed' , 'email ' => 'ahmed@gmail.com'],
    ['user4' => 'hamada' , 'email' => 'hamada@gmail.com'],

];

print_r($users[0]['user1']); // mustafa
echo "<br>";  
print_r($users[3]['email']); //hamada@gmail.com
echo "<br>";  

// ##########################################################################
// another examble
$employee=[
'mustafa' =>[
    'name' => 'mustafa mohamed',
    'address' => 'dyarb negm',
    'phones' => [789,459]
],
'mohamed'=> [
    'name' => 'mohamed ahmed',
    'address' => 'zagazig',
    'phones' => [123,456]
    ]
];

print_r($employee['mohamed']['phones'][1]);  //456
echo "<br>";
echo "#########################################################################";
echo "<br>";  
?>

<!--  IF CONDITION  GPA project-->
<html>
    <head>
    <meta charset="UTF-8">
    </head>
    <body>
        <?php $d=84; if($d >= 85):?>
            <?= "you get A"?>
        <?php elseif($d >= 80): ?> 
            <?= "yot get B+" ?>
         <?php elseif($d >= 75): ?> 
             <?= "yot get C+" ?>
        <?php elseif($d >= 70): ?> 
            <?= "yot get C" ?>
        <?php elseif($d >= 60): ?> 
            <?= "yot get D+" ?>
        <?php elseif($d >= 50): ?> 
            <?= "yot get D" ?>
        <?php else : ?>
            <?= "oops you failed "?>
        <?php endif; ?> 
    </body>