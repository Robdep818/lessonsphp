<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Intro to php</h1>
    <h2>10 primitive types</h2>
    <h2>Scalar</h2>
    <ul>
        <li>String</li>
        <li>integer</li>
        <li>float</li>
        <li>Boolean</li>
    </ul>

    <h2>Compounds</h2>
    <li>Array</li>
    <li>Object</li>
    <li>Callable</li>
    <li>Iterable</li>

    <h2>Special</h2>
    <ul>
        <li>Resource</li>
        <li>Null</li>
    </ul>

    <h2>Pseudo Types</h2>
    <hr />
 
    <h2>Strings</h2>
    <h3>Double Quotes</h3>
    <p>"This is a string data type in php</p>
    <h1>Single Quotes</h1>
    <p>'This is a string data stype in php</p>
    <p>"SELECT person WHERE name- 'Rob' </p>

    <?php 
        /*incorrect
        echo 'I'm learning to work strings in Php'; */
    
        //correct
        echo 'I\'m learning how to work with strings in php';
        ?>
    <hr/>

    <h2>Integers</h2>
    <p>20</p>



<?php 
    echo 20;
    echo "10";
?>
<hr/>
<br>
if<strong>"10" !-- ! 10</strong>{
    echo "Not the same data type!";
} 
   <hr/>
   <?php
    echo 20.5;
    echo "<br>";
    echo "<br>";
    echo 1384.38274;
   ?>

   <h3>php float Data Type</h3>
   <p>20.5</p>
   <h3>C# float data type</h3>
   <p>20.5f</p>
   
   <hr />
   <h3>Adding line breaks</h3>
   <?php
    echo "If you view the page source \n then you will find a new line in this string";
    echo "<br>";
    echo nl2br("You will find the \n new lines in this string \r\n on the browser window");
   ?> 

   <hr />
   <h3>Boolean</h3>
   <ul>
    <li>True</li>
    <li>False</li>
   </ul>

   <?php

   $a = true;
    if($a === false){
        echo 'variable $a is true';
    }

   ?>

   <hr />

   <h2>Variables</h2>
    <?php

     $myName = "Rob";
     $myAge = 19;
     $reading = true;
     $myFloat = 5.5;

    ?>

    <h3>2 parts of a variable </h3>
    <?php
    //declaring a variable $name
    $myName;
    //Initializing a value to a variable
    $myName = "Rob";

    ?>

    <h3>Php Constants in variables</h3>
    <?php

    CONST PI = 3.14;
    CONST BALL_WIDTH =5;
    CONST BALL_HEIGHT = 5;
    echo PI;
    echo "<br>";
    echo BALL_HEIGHT;
    echo "<br>";
    echo BALL_HEIGHT;
    echo "<br>";
    echo BALL_WIDTH;

    ?>

    <?php
    /* CONST BALL_HEIGHT;
    BALL_WIDTH = 10; */
    ?>

    <hr />
    <h2>PHP Operators</h2>
    <h3>expressions & Operators</h3>
        <ul>
            <li>Arithmetic Operators</li>
            <li>Assignment Operators</li>
            <li>Comparison Operators</li>
            <li>Logical Operators</li>
            <li>Increment & Decrement Operators</li>
            <li>Array Operators</li>
            <li>Conditional Assignment Operators</li>
            <li>Operator Precedence</li>
            <li>Error Control Operators</li>
            <li>Execution Control Operators</li>
            <li>Type Operators</li>
            <li>Bitwise Operators</li>
        </ul>

        <hr />

        <h3>Declare Variables for Examples of Operators</h3>
        <h3>Assignment Operators</h3>
        <?php
        $num1 = 1;
        $num2 = 2;
        $sum;

        ?>

        <h3>Arithmetic Operators</h3>
        <?php
        $sum = $num1 + $num2;
        echo $sum;
        echo "<br>";
        $sum = $num1 - $num2;
        echo $sum;
        echo "<br>";
        $sum = $num1 * $num2;
        echo $sum;
        echo "<br>";
        $sum = $num1 / $num2;
        echo $sum;
        echo "<br>";
        $sum = $num1 % $num2;
        echo $sum;
        echo "<br>";

        ?>

    <h3>Compound Assignment with Arithmetic Operators</h3>
    <?php
    //augmented addition
    $num1 += $num2;
    //using += is the same as 1+2 & is considered as a shorthand 
    $num1 = $num1 + $num2;
    $sum

    ?>

    <?php
    $num1 = 1; 
    $num2 = 2;
    $sum;
    $num1 - $num1 = $num2;
    echo $num1;
    echo "<br>";
    $num1 = 1; 
    $num2 = 2;
    $sum;
    $num1 - $num1 = $num2;
    echo $num1;
    ?>

    <hr />
    <h3>Comparison & Strict Equality Operators</h3>
    <?php
    $num1 == $num2;
    $num1 === $num2;
    $num1 != $num2;
    $num1 !== $num2;
    $num1 < $num2;
    $num1 <= $num2;
    $num1 >= $num2;
    $num1 > $num2;
    $num1 <=> $num2;

    ?>

    <hr /> <!--in react, the / is important. without the /, react won't work in xhml-->
    <?php
    $num1 = 1;
    $num1 = "2";
    $num1 == 3;
    
    ?>

    <?php
    $num1 = 1;
    $num2 = "2";
    $num3 = "1";
    $num4 = 4;
    $num5 = "4";
    $num6 = 4;

    echo gettype($num1);
    echo "<br />";
    echo "<br />";
    echo gettype($num2);
    echo "<br />";
    echo "<br />";
   
   
    if ($num4 == $num5){
        echo "this is an example of equality operator";
    };
    echo "<br />";
    echo "<br />";
    echo gettype($num4);
    echo "<br />";
    echo "<br />";
    echo gettype($num5);
    ?>

    <?php
    if ($num4 === $num6){
        echo "this is an example of strict equality operator";
    };
    ?>

    <hr />
    <h3>Not equal & strict not equal Operators</h3>
    <?php
    $num1 = 1;
    $num2 = "2";
    $num3 = "1";
    $num5 = 4;
    $num6 = "4";
    $num1 = 4;

    echo gettype($num1);
    echo "<br />";
    echo "<br />";
    echo gettype($num2);
    echo "<br />";
    echo "<br />";
    ?>

    <?php
    if ($num4 !== $num5){
        echo "this is an example of not to operator";
    };
    ?>

<h3>Less than and greater than operators</h3>
    <?php
    $num1 = 1;
    $num2 = 2;
    $num3 = 3;
    $num5 = 4;
    $num6 = 5;
    
  
    if ($num1 < $num2){
        echo "num1 is less than num2";
    };
    echo "<br />";
    echo "<br />";
    if ($num3 < $num2){
        echo "num3 is less than or equal to num2";
    };
    echo "<br />";
    echo "<br />";
    if ($num5 <= $num6){
        echo "num5 is less than or equal to num6";
    };
    ?>
    <hr />
    <h3>Spaceship Operator Example</h3>
    <?php
     $num1 = 1;
     $num2 = 2;
     $num3 = 3;
     //$num1 <=> #num2
      if ($num1 <=> $num2){
        print "if the one on the right is greater than the number on the left, this should return -1";
        }
        echo "<br />";
        echo "<br />";
        if ($num1 <= $num2);
        echo "<br />";
        echo "<br />";
            echo $num1 <= $num2;
            print "if both numbers are equal to one another";
            echo "<br />";
            echo "<br />";
            print ($num2 <=> $num2);
            echo "<br />";
            echo "<br />";
            echo "if the number on the left is greater than the one on the right this should return 1";
            echo "<br />";
            echo "<br />";
            echo $num2 <=> $num1;
    ?>


   <!-- <hr /> in react, the / is important. without the /, react won't work in xhml-->
    <?php
    $num1 = 1;
    $num1 = "2";
    $num1 == 3;
   
    ?>-->

<hr />
<h2>Logical Operators</h2>
<h3>Logical AND &&</h3>
<?php
 $num1 = 5;
 $num2 = 10;

if($num1 ===5 AND $num2 === 10){
echo "if both values are true display this text paragraph";
};
echo "<br />";
echo "<br />";
if($num1 ===5 && $num2 === 10){
echo "if both values are true display this text paragraph";
};

?>
<hr />
<h3>Logical OR</h3>
<?php
$num1 = 5;
$num2 = 10;

if ($num1 === 5 OR $num2 === 6){
    echo "if one of the values are true, display this text paragraph";
};
echo "<br />";
echo "<br />";
if ($num1 === 5 || $num2 === 10){
    echo "if one of the shorthand version of logical OR operators";
}
?>

<hr />
<h3>Logical XOR</h3>
<?php
$num1 = 10;
$num2 = 20;
$num3 = 5;
$num5 = 6;
if($num1 === 10 xor $num2 === 5)
{
$result1 = $num1 === 10 xor $num2 === 5;
echo "true xor false";
echo "<br>";
echo "if one of these are true, display this!";
echo "<br>";
echo $result1 ? "true": "false";
}
echo "<br>";
echo "<br>";
$result2 = $num3 === 5 xor $num4 === 6;
echo "true xor true";
echo "<br>";
echo "if one of these are true, display this!";
echo "<br>";
echo $result2 ? "true": "false";
echo "<br>";
var_dump($num3 === 5 xor $num4 === 6);

if($result2)
{
echo "<br>";
echo "true xor true";
echo "<br>";
echo "if one of these are true, display this!";
echo "<br>";
echo $result2 ? "true": "false";
echo "<br>";
var_dump($num3 === 5 xor $num4 === 6);
}
?>
</body>
</html>