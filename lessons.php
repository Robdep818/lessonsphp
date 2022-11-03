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

    const PI = 3.14;
    echo PI;

    ?>


</body>
</html>