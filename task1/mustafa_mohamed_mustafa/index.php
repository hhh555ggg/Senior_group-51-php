<!DOCTYPE html>
 <html>
 <head>
     <meta charset='utf-8'>
     <meta http-equiv='X-UA-Compatible' content='IE=edge'>
     <title> <?php echo "index page" ?> </title>
     <meta name='viewport' content='width=device-width, initial-scale=1'>
     
 </head>
 <body>
<!-- in this will print all data types that we take in lec 1 -->

<!--  
variables assigned by value
if we need to assigned by ref we just add & before the variable

 EXAMPLE    -->
 <?php
$name="mustafa";
$age=19;
$x=30;
$y = &$x; // assigned by referance 
$x=10;
echo $y; //will return 10 
echo "<br>";
?>
 
<?php
// two ways to write variables 
 //first way
 $name="mustafa";
$age=20;
$country='EGYPT';

echo "my name  $name , my age is $age and  my country is $country ";
echo "<br>";
// second way 
echo 'my name '. $name .', my age is '. $age.' and  my country is '. $country ;
echo "<br>";
//we can also write in this way like:
echo "my name  ${name} , my age is ${age} and  my country is ${country} ";
echo '<br>';
echo "##############################################################################";
?>


<!--  #################### Variable Variable  #################### -->
<?php
$c='hello';
$$c='world';
echo "<br>";
echo $$c;
echo "<br>";
echo "{$$c}";
echo "<br>";
echo "##############################################################################";
?>






<!-- #################### COMMENTS #################### -->
<?php
/*
comments 
for single line comment we use # or //
for muli lines we start /* and end with */

######################################################
############ pre_defined constant  ###################
######################################################
/*
CASE SENSITIVE 
 PHP_VERSION
 PHP_OS_FAMILY
/PHP_INT_MAX
DEFAULT_INCLUDE_PATH

echo PHP_VERSION;
ECHO "<br>";
ECHO PHP_OS_FAMILY;
ECHO "<br>";
ECHO PHP_INT_MAX;
ECHO "<br>";
ECHO DEFAULT_INCLUDE_PATH;
*/

/*####################  CONSTANT  ####################   */ 
#we use define() method to define constant example
define('name','mustafa');
echo '<br>';
echo name;
// another method to define constant we use const example
const name2 = 'moahmed';
echo '<br>';
echo name2;
echo "<br>";
# very important note that we can not Redefine the constant
echo "##############################################################################";

/*#################### VAR DUMP #################### */
#we use this method to show type and the length 
$ex_str="mustafa";
$ex_int=15;
$ex_bool=True;
echo '<br>';
var_dump($ex_str);
echo '<br>';
var_dump($ex_int);
echo '<br>';
var_dump($ex_bool);
echo '<br>';
echo "##############################################################################";
/*#################### gettype #################### */
# we use gettype() method to retrieve the type like
echo "<br>";
echo gettype($ex_str);
echo '<br>';
echo gettype($ex_int);
echo '<br>';
echo gettype($ex_bool);
echo '<br>';

?>





</body>
</html>





